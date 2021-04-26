<?php session_start();
   include 'connection.php';
   include 'function.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);

   // Add User Starts Here
    if(isset($_REQUEST['add_user'])){
      //print_r($_REQUEST);
      $table = "members";
      $key_list = "`name`, `email`, `phone`, `status`, `pass`";
      $value_list = "'".$_REQUEST['name']."',";
      $value_list.="'".$_REQUEST['email']."',";
      $value_list.="'".$_REQUEST['phone']."',";
      $value_list.="'".$_REQUEST['status']."',";
      $value_list.="'".$_REQUEST['pass']."'";
      $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");

      add_notification("A New Member Created", "admin", 0);
      header('Location:members.php?choice=success&value=Added News Member');
    }
?>