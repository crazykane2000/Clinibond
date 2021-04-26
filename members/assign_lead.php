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
  <style type="text/css">
    .dataTables_filter input{
      padding:5px;
      border:solid 1px #ccc;
      border-radius: 5px;
    }

    .dataTables_wrapper .dt-button, .paginate_button{
      background-image: linear-gradient(to bottom, #3f95ef 0%, #19caff 100%);
      color: #fff;
      border:0;
    }

    .dataTables_wrapper .dt-button:hover{
      background-image: linear-gradient(to bottom, #3f95ef 90%, #19caff 0%) !important;
      color: #fff;
      border:0 !important;
    }
  </style>
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
                <h1 style="font-family: 'Century Gothic';color: #999;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #fff">Indian School of Democracy  </div><span style="font-size: 14px;">All Users</span></h1>
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
                Assign Leads Stage 1  </h3>
                
              <hr/>

              <div style="padding: 20px;background-color: #f5f5f5;margin-bottom: 30px">
                <form action="assign_lead.php" method="POST">
                  <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Select Age</label>
                      <select name="age" class="form-control" style="border:solid 1px #ccc">
                        <option value="">Select Age Range</option>
                        <option value="user_info.age < 30">Below 30 Years</option>
                        <option value="user_info.age BETWEEN 30 AND 40">30-40 Years</option>
                        <option value="user_info.age BETWEEN 40 AND 50">40-50 Years</option>
                        <option value="user_info.age BETWEEN 50 AND 60">50 -60 Years</option>
                        <option value="user_info.age > 60"> Above 60 Years</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Select Gender</label>
                      <select name="gender" class="form-control" style="border:solid 1px #ccc">
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                        <option>Prefer Not to Say</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Select Language</label>
                      <select name="language" class="form-control" style="border:solid 1px #ccc">
                        <option value="">Select Language</option>
                        <option value="hindi">Hindi</option>
                        <option value="english">English</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Select State</label>
                      <select name="state" class="form-control" style="border:solid 1px #ccc">
                        <option value="">Select State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <button class="btn btn-success btn-block " name="search">Search Now</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
              <div class="table-responsive">
                
                <form method="POST" action="assign_lead_handle.php" >
                 <table class="table table-hover table-striped" id="example" >
                  <thead>
                    <tr style="color:#ddd">
                      <th style="text-align:center"><input class="chk_boxes" type="checkbox"></th>
                      <th> Name</th>
                      <th>Email </th>
                      <th>Phone </th>
                      <th>Language</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>State</th>
                      <th>Status</th>
                      <th>Date Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                    if (isset($_REQUEST['search'])) {
                      $age = "";
                      if ($_REQUEST['age']!="") {
                        $age = " AND ".$_REQUEST['age'];
                      }
                    $user_age = $_REQUEST['age'];
                      $drt = 'SELECT users.id, users.answer_status, users.profile_status, users.document_status, users.date, users.name, users.email, users.phone, users.language, users.register_date, user_info.gender, user_info.age, user_info.present_state FROM users INNER JOIN user_info ON users.id=user_info.user_id WHERE users.profile_status="Done" AND  users.answer_status="Done" AND  users.document_status="Done" AND users.alloted="NO" AND user_info.gender LIKE "'.$_REQUEST['gender'].'%" AND users.language LIKE "%'.$_REQUEST['language'].'%" AND user_info.present_state LIKE "%'.$_REQUEST['state'].'%" '. $age;
                    }else{

                      $drt = 'SELECT users.id, users.answer_status, users.profile_status, users.document_status, users.date, users.name, users.email, users.phone, users.language, users.register_date, user_info.gender, user_info.age, user_info.present_state FROM users INNER JOIN user_info ON users.id=user_info.user_id WHERE users.profile_status="Done" AND  users.answer_status="Done" AND  users.document_status="Done" AND users.alloted="NO" ORDER BY users.name ASC';
                    }
                     
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

                          $statys = '<a href="view_data.php?id='.$value['id'].'" style="background-color:orange"  title="View all Information" class="badge">Incomplete</a>';

                          if($value['answer_status']=="Done" && $value['profile_status']=="Done" && $value['document_status']=="Done"){
                             $statys = '<a href="view_data.php?id='.$value['id'].'" style="background-color:green"  title="View all Information" class="badge">Completed</a>';
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

                        echo ' <tr>
                                <td style="text-align:center"><input type="checkbox" value="'.$value['id'].'" class="chk_boxes1" name="ids[]" /></td>
                                <td><a style="color:#095a9a;text-decoration:underline" href="view_data.php?id='.$value['id'].'"  title="View all Information"><b>'.$value['name'].'</b></a></td>
                                <td><b>'.$value['email'].'</b> </td>
                                <td><b>'.$value['phone'].'</b> </td>
                                 <td style="text-transform:uppercase">'.$language.'</td>
                                 <td><b>'.$value['gender'].'</b> </td>
                                 <td><b>'.$value['age'].' Yrs</b> </td>
                                 <td><b>'.$value['present_state'].' </b> </td>
                                 <td>'.$statys.'</td>
                                 <td>'.date($date,strtotime('+330 minutes', 0)).'</td>                                
                              </tr>';
                              $i++;
                      }
                     ?>
                    
                  </tbody>
                </table>

                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Allot These Lead to</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Select Member</label>
                          <select class="form-control" name="member">
                            <?php $members = get_data_col("members", "status", "Approved"); 
                              foreach ($members as $key => $value) {
                                echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                              }
                            ?>                            
                          </select>
                        </div>
                        <hr/>
                         <button type="submit" name="allot_lead" data-toggle="modal" data-target="#myModal" class="btn btn-block btn-success">Assign Lead to Selected Members</button>
                      </div>
                    </div>

                  </div>
                </div>

                <br/>
                <button type="button" name="click" data-toggle="modal" data-target="#myModal" class="btn btn-block btn-success">Assign Lead to Selected Members</button>

                <br/><br/>

                </form>
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