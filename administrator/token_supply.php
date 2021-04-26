<?php
   include 'connection.php';
   include 'function.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);
   // print_r($_REQUEST);
   // Add User Starts Here
   $balance = extract_total("users", "balance");
   if ($_REQUEST['token_supply']<$balance) {
     header('Location:price_updates.php?choice=error&value=Token Supply Cannot be This less than '.$balance);
     exit();
   }

   // $carbon_credits = extract_total("users", "carbon_credits");
   // if ($_REQUEST['token_supply']<$carbon_credits) {
   //   header('Location:price_updates.php?choice=error&value=Carbon Credits Cannot be This less than '.$carbon_credits);
   //   exit();
   // }

   // $energy_credits = extract_total("users", "energy_credits");
   // if ($_REQUEST['token_supply']<$energy_credits) {
   //   header('Location:price_updates.php?choice=error&value=Energy Credits Cannot be This less than the '.$energy_credits);
   //   exit();
   // }


    if(isset($_REQUEST['update_admin'])){
      $table = "administrator_super_user";
      $result = $pdo->exec("UPDATE $table SET `tokens`='".$_REQUEST['token_supply']."'  WHERE id=1");

      add_notification("Admin Account Profile Updated", "admin");
      header('Location:price_updates.php?choice=success&value=Total Supply has been changed ');
      exit();
    }
     header('Location:price_updates.php?choice=error&value=Required Value Missing');
?>