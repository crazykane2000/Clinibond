<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';

?><!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'; ?>
    <title><?php include 'title.php'; ?></title>   
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
<body class="sidebar-mini fixed  pace-done ">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'navbar.php'; ?>

      <div class="content-wrapper " style="">
         <div class="page-title" style="padding: 32px;background-color: #fff;box-shadow: 0px 2px 10px rgba(0,0,0,.2);">
          <div class="row" style="width: 100%;margin-left:0px;">
           <div class="col-sm-3 lft">
            <div style="padding: 20px;" class="mobss"></div>
              <div class="lft_pad">
                <div style="padding: 10px;"></div>
                <h1 style="font-family: 'Century Gothic';color: #333;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #222">CliniBond </div>
                <span style="font-size: 14px;">Clinibond Dashboard</span></h1>
                
              </div>
           </div>
           <div class="col-sm-9">
             

   

           <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <a href="#">
                <div class="card" style="background-color: #41cc52;margin-bottom:0px">
                  <div class="row">
                    <div class="col-sm-4" style="text-align: center;">
                      <img src="img/profits.svg" class="ico" style="opacity: 1">
                    </div>
                    <div class="col-sm-8 rgt">
                      <div style="padding: 10px;"></div>
                      <div style="font-size: 12px;color: #fff;">TOTAL Registers</div>
                      <div style="font-size: 25px;color: #fff;font-family: 'Century Gothic';font-weight: bold;">
                       <?php
                              try {
                                      $stmt = $pdo->prepare( 'SELECT id FROM users ');                            
                                  } catch(PDOException $ex) {
                                      echo "An Error occured!"; 
                                      print_r($ex->getMessage());
                                  }
                                  $stmt->execute();
                                  $user = $stmt->rowCount();
                                  echo $user;
                           ?> 


                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <a href="#">
                <div class="card" style="background-color: #41cc52;margin-bottom:0px">
                  <div class="row">
                    <div class="col-sm-4" style="text-align: center;">
                      <img src="img/profits.svg" class="ico" style="opacity: 1">
                    </div>
                    <div class="col-sm-8 rgt">
                      <div style="padding: 10px;"></div>
                      <div style="font-size: 12px;color: #fff;">TOTAL Infos</div>
                      <div style="font-size: 25px;color: #fff;font-family: 'Century Gothic';font-weight: bold;">
                       <?php
                              try {
                                      $stmt = $pdo->prepare( 'SELECT id FROM users ');                            
                                  } catch(PDOException $ex) {
                                      echo "An Error occured!"; 
                                      print_r($ex->getMessage());
                                  }
                                  $stmt->execute();
                                  $user = $stmt->rowCount();
                                  echo $user;
                           ?> 


                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <a href="#">
                <div class="card" style="background-color: #41cc52;margin-bottom:0px">
                  <div class="row">
                    <div class="col-sm-4" style="text-align: center;">
                      <img src="img/profits.svg" class="ico" style="opacity: 1">
                    </div>
                    <div class="col-sm-8 rgt">
                      <div style="padding: 10px;"></div>
                      <div style="font-size: 12px;color: #fff;">Wallet Balance </div>
                      <div style="font-size: 25px;color: #fff;font-family: 'Century Gothic';font-weight: bold;">
                       <?php
                              try {
                                      $stmt = $pdo->prepare( 'SELECT id,tokens FROM administrator_super_user');                            
                                  } catch(PDOException $ex) {
                                      echo "An Error occured!"; 
                                      print_r($ex->getMessage());
                                  }
                                  $stmt->execute();
                                  $user = $stmt->fetch();
                                  echo $user['tokens'];
                           ?> 


                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>


          </div>
           </div>
          
          </div>
        </div>

        
        <?php see_status2($_REQUEST); ?>
        <?php //include 'dashboard_stats.php'; ?>          
        <?php include 'dashboard_chart.php'; ?>          
       
        <div class="row">
         
          <div class="col-md-12">
            <div class="card">
              <h3 style="font-family: 'Century Gothic';font-weight: normal;font-size: 20px;color:#666;">View all Users</h3>
              <div class="table-responsive">
                <table class="table table-hover table-striped" id="example">
                  <thead>
                    <tr style="color:#ddd">
                      <th>#</th>
                      <th> Name</th>
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
      
     <?php include 'footer.php'; ?>
      
      
      </div>
    </div>
    <div id="gora" ></div>
    


<?php include 'update_modal.php'; ?>
    

    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable( {
               "pageLength": 50,
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          } );


          $('#example23').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          } );


          $("#mota").click(function(){
            //alert("hello");
            $("#gora").load("change_notif_status.php");
          });



          // $(".dt-button").addClass("btn btn-success btn-sm");

      } );
    </script>   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Percentage'],
          <?php 
            $aare = array();
            try {
                $stmt = $pdo->prepare('SELECT  country,  COUNT(*) as county FROM user_info GROUP BY country ORDER BY country');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
           // print_r($user); 
            foreach ($user as $key => $value) {
             $language = $value['country'];
              if ($value['country']=="") {
                $language = "Not Selected";
              }
              $aare[] = "['".$language."', ".$value['county']."]";
            }
            //$aare = array_unique($aare);
            $aare = implode(",", $aare);
            echo $aare;
          ?>
          
        ]);

        var options = {
          title: 'Country Wise Report',
          pieHole: 0.4,
          colors: ['#41cc52', '#6be47a', '#88d458', '#8ac104', '#4caf50']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script> 

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Percentage'],
          <?php 
            $aare = array();
            try {
                $stmt = $pdo->prepare('SELECT  gender,  COUNT(*) as county FROM user_info GROUP BY gender ORDER BY gender');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll(); 
            foreach ($user as $key => $value) {
             $language = $value['gender'];              
             $aare[] = "['".$language."', ".$value['county']."]";
            }
            $aare = implode(",", $aare);
            echo $aare;
          ?>
          
        ]);

        var options = {
          title: 'Gender Wise Report',
          pieHole: 0.4,
          colors: ['#41cc52', '#6be47a', '#88d458', '#8ac104', '#4caf50']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
    </script> 


    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ethnicity', 'Percentage'],
          <?php 
            $aare = array();
            try {
                $stmt = $pdo->prepare('SELECT  ethinicity,  COUNT(*) as county FROM user_info GROUP BY ethinicity ORDER BY ethinicity');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll(); 
            foreach ($user as $key => $value) {
             $language = $value['ethinicity'];              
             $aare[] = "['".$language."', ".$value['county']."]";
            }
            $aare = implode(",", $aare);
            echo $aare;
          ?>
          
        ]);

        var options = {
          title: 'Gender Wise Report',
          pieHole: 0.4,
          colors: ['#41cc52', '#6be47a', '#88d458', '#8ac104', '#4caf50']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
        chart.draw(data, options);
      }
    </script> 

    <script type="text/javascript">
      // google.charts.load("current", {packages:["corechart"]});
      // google.charts.setOnLoadCallback(drawChart);
      // function drawChart() {
      //   var data = google.visualization.arrayToDataTable([
      //     ['Gender', 'Percentage'],
      //     <?php 
      //       $aare = array();
      //       try {
      //           $stmt = $pdo->prepare('SELECT  origin,  COUNT(*) as county FROM user_info GROUP BY origin ORDER BY origin');
      //       } catch(PDOException $ex) {
      //           echo "An Error occured!"; 
      //           print_r($ex->getMessage());
      //       }
      //       $stmt->execute();
      //       $user = $stmt->fetchAll(); 
      //       foreach ($user as $key => $value) {
      //        $language = $value['origin'];              
      //        $aare[] = "['".$language."', ".$value['county']."]";
      //       }
      //       $aare = implode(",", $aare);
      //       echo $aare;
      //     ?>
          
      //   ]);

      //   var options = {
      //     title: 'Outreach Channels',
      //     pieHole: 0.4,
      //     colors: ['#235a9b', '#4e8fdc', '#44b9cc', '#1ee0ff', '#21e6cb']
      //   };

      //   var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
      //   chart.draw(data, options);
      // }
    </script> 

  </body>


</html>