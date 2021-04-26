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
      .dt-button{
        background-color: green !important;
      }
      
    </style>
    <style type="text/css">
    .dataTables_filter input{
      padding:5px;
      border:solid 1px #ccc;
      border-radius: 5px;
    }

    .dataTables_wrapper .dt-button, .paginate_button{
      background-image: linear-gradient(to bottom, #40cb52 0%, #40cb52 100%);
      color: #fff;
      border:0;
    }

    .dataTables_wrapper .dt-button:hover{
      background-image: linear-gradient(to bottom, #40cb52 90%, #40cb52 00%) !important;
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
         <div class="page-title" style="padding: 32px;    background-image: linear-gradient(45deg, #41cc53 0%, #41cc53 100%);
         box-shadow: 0px 2px 10px rgba(0,0,0,.2);">
          <div class="row" style="width: 100%;margin-left:0px;">
           <div class="col-sm-3 lft">
            <div style="padding: 20px;" class="mobss"></div>
              <div class="lft_pad">
                <div style="padding: 10px;"></div>
                <h1 style="font-family: 'Century Gothic';color: #999;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #fff">CliniBond  </div><span style="font-size: 14px;color: #fff;">All Users</span></h1>
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
              
              <div class="table-responsive">
                <div class="row">
         
          <div class="col-md-12">
            <div class="card">
              <h3 style="font-family: 'Century Gothic';font-weight: normal;font-size: 20px;color:#666;">View all Users</h3>
              <div class="table-responsive">
                <table class="table table-hover table-striped" id="example">
                  <thead>
                    <tr style="color:#ddd">
                      <th>#</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Tx Address</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     
                      try {
                          $stmt = $pdo->prepare('SELECT * FROM `users` ORDER BY date DESC');
                      } catch(PDOException $ex) {
                          echo "An Error occured!"; 
                          print_r($ex->getMessage());
                      }
                      $stmt->execute();
                      $user = $stmt->fetchAll();
                      $i=1;
                      foreach ($user as $key => $value) {

                         $statys = '<a href="verify_data.php?id='.$value['id'].'" style="background-color:red"  title="View all Information" class="badge">Pending</a>';
                         
                          if($value['verified']=="Yes" ){
                             $statys = '<a href="unverify_data.php?id='.$value['id'].'" style="background-color:green"  title="View all Information" class="badge">Verified</a>';
                          }else{
                            $statys = '<a href="verify_data.php?id='.$value['id'].'" style="background-color:red"  title="View all Information" class="badge">Pending</a>';
                          }
                        echo ' <tr>
                                <td>'.$i.'</td>
                                <td><a style="color:#111;text-decoration:underline" href="view_data.php?id='.$value['id'].'"  title="View all Information"><b>'.$value['first_name'].' '.$value['last_name'].'</b></a></td>
                                <td><b>'.$value['email'].'</b>  <br/>'.$value['phone'].'</td>
                                 <td style="text-transform:uppercase">'.$value['tx_address'].'</td>
                                 <td>'.$statys.'</td>
                                <td>
                                  <!--<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal_update" title="Update"><i class="icon-refresh"></i></button>-->
                                  <a href="delete_user.php?id='.$value['id'].'&phone='.$value['phone'].'"  onclick="return confirm(\'Are You Sure You want to Remove This User?\')"><button class="btn btn-info btn-sm" title="Delete"><i class="icon-remove-sign"></i></button></a>
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
        </div>
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