<?php session_start();
   include 'connection.php';
   include 'function.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);

   // Add User Starts Here
      $table = "users";
      $result = $pdo->exec("UPDATE $table SET `verified`='No'  WHERE id=".$_REQUEST['id']);

     add_notification("Data Verfication Request Unpproved", "admin", 0);
     header('Location:users.php?choice=success&value= Data Verfication Request Unpproved');
?>