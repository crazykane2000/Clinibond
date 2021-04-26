<?php session_start();
	include 'pdo_class_data.php';
	include 'connection.php';
	$pdo_auth = authenticate_admin();
	$pdo = new PDO($dsn, $user, $pass, $opt);
	include 'function.php';
	if (count($_REQUEST['ids'])<1) {
		header('Location:assign_lead.php?choice=error&value= No Leads Selected');
		exit();
	}

	$member_data = get_data_id_data("members", "id", $_REQUEST['member']);

	// Add User Starts Here
	$table = "users";
	for ($i=0; $i <count($_REQUEST['ids']); $i++) { 
	 $result = $pdo->exec("UPDATE $table SET `alloted`='Yes', `alloted_to`='".$_REQUEST['member']."', `alloted_to_name`='".$member_data['name']."'  WHERE id=".$_REQUEST['ids'][$i]);
	}  

	add_notification("Lead Alloted", "admin",0);
	header('Location:assign_lead.php?choice=success&value=Lead Alloted Successfully');
	exit();
?>