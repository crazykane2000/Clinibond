<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';
    $lata = get_data_id_data("users", "id", $pdo_auth['id']);    
    $gata = "";
    $gata = get_data_id_data("user_info", "phone", $lata['phone']);  
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
             
           </div>
          
          </div>
        </div>

        
        <?php see_status2($_REQUEST); ?>
       
        <div class="row">
         
          <div class="col-md-12">
            <div class="card">
              <h3 style="font-family: 'Century Gothic';font-weight: normal;font-size: 20px;color:#666;">View Data</h3>
              <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Data</th>
                        <th>Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="font-weight: bold;">Current Diagnosis</td>
                        <td><?php echo str_replace("::", ", ", $gata['current_diagnosis']); ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Time of Diagnosis</td>
                        <td><?php echo $gata['time_of_diagnosis']; ?></td>
                      </tr>


                      <tr>
                        <td style="font-weight: bold;">Current Medicines</td>
                        <td><?php echo $gata['current_meds']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Past Medicines</td>
                        <td><?php echo $gata['past_meds']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Current Age</td>
                        <td><?php echo $gata['age']; ?> Years</td>
                      </tr>


                      <tr>
                        <td style="font-weight: bold;">Gender</td>
                        <td><?php echo $gata['gender']; ?></td>
                      </tr>


                      <tr>
                        <td style="font-weight: bold;">Current Weight</td>
                        <td><?php echo $gata['weight']; ?> <?php echo $gata['weight_scale']; ?></td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold;">Ethnicity</td>
                        <td><?php echo $gata['ethinicity']; ?></td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold;">ECOG</td>
                        <td><?php echo $gata['ecog']; ?></td>
                      </tr>


                      <tr>
                        <td style="font-weight: bold;">Current State</td>
                        <td><?php echo $gata['state']; ?></td>
                      </tr>


                      <tr>
                        <td style="font-weight: bold;">Current Country</td>
                        <td><?php echo $gata['country']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Current Zip Code</td>
                        <td><?php echo $gata['zip_code']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Known Allergies</td>
                        <td><?php echo $gata['known_allergies']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Family Medical and Genetics </td>
                        <td><?php echo $gata['family_medical_genetics']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Are they under any Medical Studies/research or supervision?</td>
                        <td><?php echo $gata['are_they_on_studies']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Are they able to give Concent </td>
                        <td><?php echo $gata['are_they_consent']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Do they use Tobaco or Alchohol </td>
                        <td><?php echo $gata['alchohol_tobaco_use']; ?></td>
                      </tr>


                      <tr>
                        <td style="font-weight: bold;">What is their Consent? </td>
                        <td><?php echo $gata['consents']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Data of this Data Submission </td>
                        <td><?php echo $gata['date']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Person Name </td>
                        <td><?php echo $gata['person_name']; ?></td>
                      </tr>

                      <tr>
                        <td style="font-weight: bold;">Date of Signature</td>
                        <td><?php echo $gata['date_of_form']; ?></td>
                      </tr>
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