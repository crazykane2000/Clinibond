<?php
   include 'connection.php';
   include 'function.php';
   include '../add_notification_user.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);

   // Add User Starts Here
      $table = "withdraw";
      $result = $pdo->exec("UPDATE $table SET `status`='Approved'  WHERE id=".$_REQUEST['id']);
      
      //
     //echo $total; 
     
     //$table = "users";  
      try {
         $stmt = $pdo->prepare("SELECT * FROM $table WHERE id=".$_REQUEST['id']);
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      $mota = $user;
      //print_r($mota);
      
       try {
         $stmt = $pdo->prepare("SELECT * FROM `users` WHERE id=".$user['user_id']);
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      
      
      $total = $user['balance']-$mota['amount']-0;  
      //0.5 is transaction fees
      //print_r($user);
      
       try {
        $stmt = $pdo->prepare("UPDATE users SET `balance`= '".$total."' WHERE id=".$user['id']);
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();


    // Starts Here monitoring the Transactions
    $tx_hash = "0x".md5(date("U")).md5(date("Y"));
    $table = "transfer";
    $from_address = $user['tx_address'];


      $key_list = "`to`,`from`, `tx_address`, `tokens`, `status`, `process`";
      $value_list = "'".$mota['withdraw_wallet_address']."',";
      $value_list.= "'".$from_address."',";
      $value_list.="'".$tx_hash."',";
      $value_list.="'".$mota['amount']."',";
      $value_list.="'Success',";
      $value_list.="'Withdraw Tokens'";   

      try {
          $stmt = $pdo->prepare("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
          //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      
      $stmt->execute();

  add_notification("Withdraw Token Request Approved", "admin");
  add_notification_user("Your Withdraw Token Request Approved", "user", $_REQUEST['id']);    
  header('Location:view_withdraw.php?choice=success&value= Withdraw Token Request Approved');
?>