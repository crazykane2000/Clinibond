<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';

   $table = "users";
   $id= $_REQUEST['id'];
   try {
    $stmt = $pdo->prepare('UPDATE  '.$table.' SET `otp_verified`="Yes" WHERE id = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!"; 
        //echo ($ex->getMessage());
    }
   $stmt->execute(['id' => $id]);
   add_notification("A User has been Updated", "admin", 0);
   header('Location:users2.php?choice=success&value=OTP verified Successfully');   
?>