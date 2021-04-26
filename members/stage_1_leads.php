<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'head.php'; ?>
  
  </head>
  <body class="sidebar-mini fixed  pace-done sidebar-collapse">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'navbar.php'; ?>

       <div class="content-wrapper " style="">
         <div class="page-title" style="padding: 32px;    background-image: linear-gradient(45deg, #124686 0%, #3f79bd 100%);box-shadow: 0px 2px 10px rgba(0,0,0,.2);">
          <div class="row" style="width: 100%;margin-left:0px;">
           <div class="col-sm-3 lft">
            <div style="padding: 20px;" class="mobss"></div>
              <div class="lft_pad">
                <div style="padding: 10px;"></div>
                <h1 style="font-family: 'Century Gothic';color: #999;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #fff">Indian School of Democracy  </div><span style="font-size: 14px;">View Stage 1 Leads</span></h1>
              </div>
           </div>
           <div class="col-sm-9">
             
           </div>
          
          </div>
        </div>
       <?php 
         see_status2($_REQUEST);
        ?>

        <div style="padding: 20px;"></div>        
          <div class="clearfix"></div>
          <div class="col-md-12">
            <div class="card">
              <h3 style="font-weight: normal;font-size: 20px;color:#666;">
                Stage 1 Leads <span style="font-weight: bold;color: #333;"> (All)</span></h3><hr/>

              
              <div class="table-responsive">
               
               <table class="table table-hover table-striped" id="example" >
                  <thead>
                    <tr style="color:#ddd">
                      <th style="text-align:center">S.No.</th>
                      <th> Name</th>
                      <th>Language</th>
                      <th>Gender</th>
                      <th>Marks</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>state</th>
                      <th>Stage 1 Status</th>
                      <th>Strong Candidate</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $drt = 'SELECT users.id, users.alloted_to, users.strong_candidate, users.stage_1_clear, users.alloted_to_name, users.answer_status, users.marks, users.profile_status, users.document_status, users.date, users.name, users.email, users.phone, users.language, users.register_date, user_info.gender, user_info.age, user_info.present_state FROM users INNER JOIN user_info ON users.id=user_info.user_id WHERE users.profile_status="Done" AND  users.answer_status="Done" AND  users.document_status="Done" AND users.alloted="Yes"  ORDER BY users.name ASC';
                     
                      try {
                          $stmt = $pdo->prepare($drt);
                      } catch(PDOException $ex) {
                          echo "An Error occured!"; 
                          print_r($ex->getMessage());
                      }
                      $stmt->execute();
                      $user = $stmt->fetchAll();
                      $i=1;
                      foreach ($user as $key => $value) {

                          $statys = '<a  style="background-color:orange"  title="View all Information" class="badge">Incomplete</a>';
                          $link = 'view_data.php?id='.$value['id'];
                          if($value['stage_1_clear']=="No" ){
                             $statys = '<a  style="background-color:orange"  title="View all Information" class="badge">Incomplete</a>';
                             $link = 'view_data.php?id='.$value['id'];                             
                          } else if($value['stage_1_clear']=="Accept" ){
                             $statys = '<a  style="border:solid 1px;background-color:transparent;color:green;border-color:green"  title="View all Information" class="badge">Accepted</a>';
                             $link = 'view_data.php?id='.$value['id'];                           
                          } else if($value['stage_1_clear']=="Reject" ){
                             $statys = '<a  style="border:solid 1px;background-color:transparent;color:red;border-color:red"  title="View all Information" class="badge">Rejected</a>';
                             $link = 'view_data.php?id='.$value['id'];                           
                          }else if($value['stage_1_clear']=="Unsure" ){
                             $statys = '<a  style="border:solid 1px;background-color:transparent;color:#03a9f4;border-color:#03a9f4"  title="View all Information" class="badge">Unsure</a>';
                             $link = 'view_data.php?id='.$value['id'];                           
                          }

                          $language = '<label class="badge" style="background-color:#8bc34a">Hindi</label>';
                          if ($value['language']=="english") {
                            $language = '<label class="badge" style="background-color:#2196f3">English</label>';
                          }
                          
                          $date = $value['date'];
                          if($value['register_date']!=""){
                              $date = $value['register_date'];
                          }else{
                              $date = $value['date'];
                          }
                          
                          $strong = '';
                          if ($value['strong_candidate']!="No") {
                            $strong = '<label class="badge" style="background-color:#2196f3">Strong Candidate</label>';
                          }

                        echo ' <tr>
                                <td style="text-align:center">'.$i.'</td>
                                <td><a style="color:#095a9a;text-decoration:underline" href="'.$link.'"  title="View all Information"><b>'.$value['name'].'</b></a></td>
                                <td style="text-transform:uppercase">'.$language.'</td>
                                 <td><b>'.$value['gender'].'</b> </td>
                                 <td><b>'.$value['marks'].' /15</b> </td>
                                 <td>'.$value['email'].'</td>
                                 <td>'.$value['phone'].'</td>
                                 <td>'.$value['present_state'].'</td>
                                 <td>'.$statys.'</td>
                                 <td>'.$strong.'</td>
                                <td>                                  
                                  <a style="zoom:1" href="view_alloted_leads.php?id='.$value['alloted_to'].'" ><button class="btn btn-success btn-sm" title="Lead Owner"><i class="icon-check"></i> '.$value['alloted_to_name'].'</button></a>
                                </td>
                              </tr>';
                              $i++;
                      }
                     ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
        </div>
       
        <?php include 'footer.php'; ?>        
      </div>
    </div>
    
    <!-- Javascripts-->

    <?php include 'add_modal.php';  ?>
    <?php include 'update_modal.php';  ?>

    <?php include 'modal.php'; ?>
    <?php include 'scripts.php'; ?>  
    <script type="text/javascript">
      $(function() {
          $('.chk_boxes').click(function() {
              $('.chk_boxes1').prop('checked', this.checked);
          });
      });
    </script>  
  </body>
</html>