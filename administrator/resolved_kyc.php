<?php session_start();
   include 'connection.php';
   include 'function.php';
    include '../add_notification_user.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);

   $data = get_data_id_data("kyc", "id", $_REQUEST['id']);
   //print_r($data);
   // Add User Starts Here
      $table = "kyc";
      $result = $pdo->exec("UPDATE $table SET `status`='Verified'  WHERE id=".$_REQUEST['id']);

      $data = get_data_id("kyc", $_REQUEST['id']);
      $result = $pdo->exec("UPDATE `users` SET `kyc_approved`='Approved'  WHERE id=".$data['user_id']);

      add_notification("KYC Request Has been Verified", "admin");
       add_notification_user("Your KYC Document is Verified", "user", $data['user_id']);
       
      header('Location:kyc.php?choice=success&value=KYC Request Resolved');
?>