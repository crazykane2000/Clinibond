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
      <?php include 'navbar.php'; ?>

       <div class="content-wrapper " style="">
         <div class="page-title" style="padding: 32px;background-color: #0e1354;box-shadow: 0px 2px 10px rgba(0,0,0,.2);">
          <div class="row" style="width: 100%;margin-left:0px;">
           <div class="col-sm-3 lft">
            <div style="padding: 20px;" class="mobss"></div>
              <div class="lft_pad">
                <div style="padding: 10px;"></div>
                <h1 style="font-family: 'Century Gothic';color: #999;font-size: 25px;font-weight: normal;"><div style="font-weight: bold;color: #ddd">Transation  </div>of users</h1>
                
              </div>
           </div>
           <div class="col-sm-9">
             <?php include 'price_panel.php';  ?>
           </div>
          
          </div>
        </div>
       <?php  see_status2($_REQUEST);   ?>

        <div style="padding: 20px;"></div>        
          <div class="clearfix"></div>
          <div class="col-md-12">
            <div class="card">
              <h3 style="font-family: 'Century Gothic';font-weight: normal;font-size: 20px;color:#666">
                View Users Transation 
                </h3>
              <hr/>
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered datatable" cellspacing="0"
                                   width="100%" style="color: #333">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Username</th>
                                    <th>To Froms</th>
                                    <th>Token Amount</th>
                                    <th>Direction </th>                   
                                  </tr>
                                </thead>
                                <tbody>
                               <?php 
                                   
                                    try {
                                        $stmt = $pdo->prepare('SELECT * FROM `transfer` WHERE `to` LIKE "'.$_REQUEST['tx_address'].'" OR `from` LIKE "'.$_REQUEST['tx_address'].'" ORDER BY date DESC');
                                       
                                    } catch(PDOException $ex) {
                                        echo "An Error occured!"; 
                                        print_r($ex->getMessage());
                                    }
                                    $stmt->execute();
                                    $user = $stmt->fetchAll();
                                    $i=1;
                                    foreach ($user as $key => $value) {
                                        
                                          $statys = '<label class="label label-info" style="color:#fff">'.$value['process'].'</label>';
                                       
                                      echo ' <tr>
                                              <td>'.$i.'</td>rUSD'.$value['type'].'</label></td>
                                               <td>'.$pdo_auth['name'].'</td>
                                              <td><b>To : </b>'.$value['to'].'<br/> <b>from : </b> '.$value['from'].'<br/><label class="label label-success">'.$value['tx_address'].'</label> </td>
                                              <td>'.round($value['tokens'],2).'</td>
                                              <td>'.$statys.' <br/> '.$value['date'].'</td>                                                              
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

    <!-- Modal -->
    
<?php include 'update_modal.php'; ?>
  
    <div id="myDiv" style="visibility:hidden"></div>
    
    <?php include 'modal.php'; ?>
    <?php include 'scripts.php'; ?>    
    
  </body>
</html>