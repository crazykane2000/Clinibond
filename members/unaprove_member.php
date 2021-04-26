<?php
   include 'connection.php';
   include 'function.php';
   include '../add_notification_user.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);

   // Add User Starts Here
   $table = "members";
   $result = $pdo->exec("UPDATE $table SET `status`='Pending'  WHERE id=".$_REQUEST['id']);
   add_notification("Member Un Approved", "admin",0);
   header('Location:members.php?choice=success&value= Status Update Request Approved');
?>