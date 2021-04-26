<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';
   // Add User Starts Here
   $table = "user_info";
   $result = $pdo->exec("UPDATE `user_info` SET 
   	`current_diagnosis`='".$_REQUEST['current_diagnosis']."',
   	`time_of_diagnosis`='".$_REQUEST['time_of_diagnosis']."',
   	`current_meds`='".$_REQUEST['current_meds']."',
   	`past_meds`='".$_REQUEST['past_meds']."',
   	`age`='".$_REQUEST['age']."',
   	`gender`='".$_REQUEST['gender']."',
   	`weight`='".$_REQUEST['weight']."',
   	`ethinicity`='".$_REQUEST['ethinicity']."',
   	`ecog`='".$_REQUEST['ecog']."',
   	`state`='".$_REQUEST['state']."',
   	`country`='".$_REQUEST['country']."',
   	`zip_code`='".$_REQUEST['zip_code']."',
   	`known_allergies`='".$_REQUEST['known_allergies']."',
   	`family_medical_genetics`='".$_REQUEST['family_medical_genetics']."',
   	`are_they_on_studies`='".$_REQUEST['are_they_on_studies']."',
   	`are_they_consent`='".$_REQUEST['are_they_consent']."',
   	`alchohol_tobaco_use`='".$_REQUEST['alchohol_tobaco_use']."',
   	`consents`='".$_REQUEST['consents']."' WHERE id=".$_REQUEST['id']);

   add_notification("Data Updated Successfully", "admin",0);
   header('Location:update_data.php?id='.$_REQUEST['id'].'&choice=success&value= Information Update Request Approved');
   exit();
?>