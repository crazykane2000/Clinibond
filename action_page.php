<?php include 'administrator/connection.php';
  include 'administrator/function.php';
  include 'administrator/pdo_class_data.php';
  $pdo = new PDO($dsn, $user, $pass, $opt);

  //print_r($_REQUEST);
  $current_diagnosis = $_REQUEST['current_diagnosis'];
  $array = array();
  foreach ($_REQUEST['conditions'] as $key => $value) {
    if ($value!="") {
      $array[] = $value;
    }    
  }

  $current_diagnosis = array_merge($current_diagnosis,$array);
  $current_diagnosis = implode("::", $current_diagnosis);


    $state = "";
    if(isset($_REQUEST['state'])){
        $state = $_REQUEST['state'];
    }else{
        $state = "";
    }


  $table = "user_info";      
      $key_list = "`current_diagnosis`, `time_of_diagnosis`, `current_meds`, `past_meds`,`ecog`, `known_allergies`,  `family_medical_genetics`, `age`, `gender`, `weight`, `weight_scale`,`ethinicity`,   `state`, `country`, `zip_code`, `are_they_on_studies`, `are_they_consent`, `alchohol_tobaco_use`, `only_alchohol`, `consents`, `email`, `phone`, `date_of_form`, `person_name`";
      $value_list = "'".$current_diagnosis."',";
      $value_list.= "'".$_REQUEST['time_of_diagnosis']."',";
      $value_list.= "'".implode(",", $_REQUEST['current_meds'])."',";
      $value_list.= "'".implode(",", $_REQUEST['past_meds'])."',";
      $value_list.= "'".$_REQUEST['ecog']."',";
      $value_list.= "'".implode(",",$_REQUEST['known_allergies'])."',";
      $value_list.= "'".$_REQUEST['family_history']."',";
      $value_list.= "'".$_REQUEST['age']."',";
      $value_list.= "'".$_REQUEST['gender']."',";
      $value_list.= "'".$_REQUEST['weight']."',";
      $value_list.= "'".$_REQUEST['weight_scale']."',";
      $value_list.= "'".$_REQUEST['ethinicity']."',";      
     $value_list.= "'".$state."',";
      $value_list.= "'".$_REQUEST['country']."',";
      $value_list.= "'".$_REQUEST['zip_code']."',";
      $value_list.= "'".$_REQUEST['are_they_on_studies']."',";
      $value_list.="'".$_REQUEST['are_they_consent']."',";
      $value_list.="'".$_REQUEST['alchohol_tobaco_use']."',";
      $value_list.="'".$_REQUEST['only_alchohol']."',";
      $value_list.="'".$_REQUEST['mentally_fit']."',";
      $value_list.="'".$_REQUEST['email']."',";
      $value_list.="'".$_REQUEST['phone']."',";
      $value_list.="'".$_REQUEST['dates']."',";
      $value_list.="'".$_REQUEST['person_name']."'";
      //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
      
      $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
      add_notification("A Patient Profile has been Created", "admin", 0);        
      header('Location:end_data.php?choice=success&value=Patient Profile Created');
     exit();
?>