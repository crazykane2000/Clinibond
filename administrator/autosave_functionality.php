<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    $pdo_auth = authenticate_admin();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'function.php';

    try {
	 $table = "users";
	 $stmt = $pdo->prepare('UPDATE `'.$table.'` SET `stage_2_clear`="'.($_REQUEST['stage_status']).'", `final_note`="'.$_REQUEST['final_note'].'", `final_status`="'.$_REQUEST['final_status'].'" WHERE id='.$_REQUEST['lead_id']);	
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();



    if (ans_exist("stage_2_answers", $_REQUEST['lead_id'], $_REQUEST['lead_aloted_to_member'])<1) {
    	 	
    	 try {
	    	 $table = "stage_2_answers";
	    	 $stmt = $pdo->prepare('INSERT INTO `'.$table.'`( `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`,  `lead_id`, `lead_aloted_to_member`, `mark1`, `mark2`, `mark3`, `mark4`, `mark5`, `mark6`, `stage_2_remarks`) VALUES ("'.strip_comma($_REQUEST['answer1']).'", "'.strip_comma($_REQUEST['answer2']).'","'.strip_comma($_REQUEST['answer3']).'","'.strip_comma($_REQUEST['answer4']).'","'.strip_comma($_REQUEST['answer5']).'","'.strip_comma($_REQUEST['answer6']).'","'.strip_comma($_REQUEST['answer7']).'" ,"'.$_REQUEST['lead_id'].'","'.$_REQUEST['lead_aloted_to_member'].'", "'.$_REQUEST['marks1'].'", "'.$_REQUEST['marks2'].'", "'.$_REQUEST['marks3'].'", "'.$_REQUEST['marks4'].'", "'.$_REQUEST['marks5'].'", "'.$_REQUEST['marks6'].'", "'.$_REQUEST['evaluation_remark'].'" )');
	    	 
		      } catch(PDOException $ex) {
		          echo "An Error occured!"; 
		          print_r($ex->getMessage());
		      }
		      $stmt->execute();

    	 }else{
    	 	try {
	    	 $table = "stage_2_answers";
	    	 $stmt = $pdo->prepare('UPDATE `'.$table.'` SET `answer1`="'.strip_comma($_REQUEST['answer1']).'",`answer2`="'.strip_comma($_REQUEST['answer2']).'",`answer3`="'.strip_comma($_REQUEST['answer3']).'",`answer4`="'.strip_comma($_REQUEST['answer4']).'",`answer5`="'.strip_comma($_REQUEST['answer5']).'",`answer6`="'.strip_comma($_REQUEST['answer6']).'",`answer7`="'.strip_comma($_REQUEST['answer7']).'", `mark1`="'.$_REQUEST['marks1'].'", `mark2`="'.$_REQUEST['marks2'].'",`mark3`="'.$_REQUEST['marks3'].'",`mark4`="'.$_REQUEST['marks4'].'",`mark5`="'.$_REQUEST['marks5'].'",`mark6`="'.$_REQUEST['marks6'].'", `stage_2_remarks`="'.$_REQUEST['evaluation_remark'].'" WHERE lead_id='.$_REQUEST['lead_id']);	    	 
	    	 
		      } catch(PDOException $ex) {
		          echo "An Error occured!"; 
		          print_r($ex->getMessage());
		      }
		      $stmt->execute();
    	 }


   
