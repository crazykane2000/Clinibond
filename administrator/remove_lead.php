<?php session_start();
	include 'pdo_class_data.php';
	include 'connection.php';
	$pdo_auth = authenticate_admin();
	$pdo = new PDO($dsn, $user, $pass, $opt);
	include 'function.php';
	if (!isset($_REQUEST['id'])) {
		header('Location:members.php?choice=success&value=Lead Alloted Successfully');
		exit();
	}

	$member_data = get_data_id_data("members", "id", $_REQUEST['user_id']);
	$table = "users";
	 $result = $pdo->exec("UPDATE $table SET `alloted`='No', `alloted_to`='', `alloted_to_name`='', `stage_1_clear`='No'  WHERE id=".$_REQUEST['id']);

	add_notification("Lead Un Alloted", "admin",0);
	header('Location:view_alloted_leads.php?choice=success&value=Lead Alloted Successfully&id='.$_REQUEST['user_id']);
	exit();
?>