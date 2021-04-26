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
                Religion Wise Report </h3>
                
              <hr/>
              
              <div class="table-responsive">
                 <table class="table table-hover table-striped" id="example" >
                  <thead>
                    <tr style="color:#ddd">
                      <th>#</th>
                      <th>Religion</th>
                      <th>Count </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     
                      try {
                        $stmt = $pdo->prepare( 'SELECT user_info.religion, COUNT(*) as county FROM users INNER JOIN user_info ON users.id=user_info.user_id WHERE users.profile_status="Done" AND  users.answer_status="Done" AND  users.document_status="Done" GROUP BY user_info.religion');

                          //$stmt = $pdo->prepare('SELECT  religion,  COUNT(*) as county FROM user_info GROUP BY religion ORDER BY religion');
                      } catch(PDOException $ex) {
                          echo "An Error occured!"; 
                          print_r($ex->getMessage());
                      }
                      $stmt->execute();
                      $user = $stmt->fetchAll();
                      //print_r($user);
                      $i=1;
                      foreach ($user as $key => $value) {
                        echo ' <tr>
                                <td>'.$i.'</td>
                                <td><a style="color:#095a9a;text-decoration:underline" href="view_data_religion.php?id='.$value['religion'].'"  title="View all Information"><b>'.$value['religion'].'</b></a></td> 
                                <td><a style="color:#095a9a;text-decoration:underline" href="view_data_religion.php?id='.$value['religion'].'"  title="View all Information"><b>'.$value['county'].'</b></a></td>                                
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