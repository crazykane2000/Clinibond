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
	 $result = $pdo->exec("UPDATE $table SET `stage_2_alloted`='No', `alloted_to_stage_2`='', `alloted_to_name_stage_2`='' , `stage_2_clear`='No'  WHERE id=".$_REQUEST['id']);

	add_notification("Lead Un Alloted Stage 2", "admin",0);
	header('Location:view_alloted_leads_stage_2.php?choice=success&value=Lead Alloted Successfully&id='.$_REQUEST['user_id']);
	exit();
?>