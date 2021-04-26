<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';
    $state = $_REQUEST['id'];
    $data = get_data_col("user_info", "finance_support", $state);
    $states = array();
    foreach ($data as $key => $value) {
      $states[] = $value['user_id'];
    }

    $states = implode(",", $states);
    echo $states;
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
                Report Financial Support Wise (<?php echo $_REQUEST['id']; ?>) </h3>
                
              <hr/>             
              <div class="table-responsive">
                 <table class="table table-hover table-striped" id="example" >
                  <thead>
                    <tr style="color:#ddd">
                      <th>#</th>
                      <th> Name</th>
                      <th>Email </th>
                      <th>Phone </th>
                      <th>Language</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Status</th>
                      <th>Date Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     
                      try {
                          $stmt = $pdo->prepare( 'SELECT users.id, users.answer_status, users.profile_status, users.document_status, users.date, users.name, users.email, users.phone, users.language, users.register_date, user_info.gender, user_info.age, user_info.present_state FROM users INNER JOIN user_info ON users.id=user_info.user_id WHERE users.profile_status="Done" AND  users.answer_status="Done" AND  users.document_status="Done" AND users.id IN ('.$states.')  ORDER BY users.name ASC');
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
                                <td>'.$i.'</td>
                                <td><a style="color:#095a9a;text-decoration:underline" href="view_data.php?id='.$value['id'].'"  title="View all Information"><b>'.$value['name'].'</b></a></td>
                                <td><b>'.$value['email'].'</b> </td>
                                <td><b>'.$value['phone'].'</b> </td>
                                 <td style="text-transform:uppercase">'.$language.'</td>
                                 <td><b>'.$value['gender'].'</b> </td>
                                 <td><b>'.$value['age'].' Yrs</b> </td>
                                 <td>'.$statys.'</td>
                                 <td>'.date($date,strtotime('+330 minutes', 0)).'</td>
                                
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
  </body>
</html>