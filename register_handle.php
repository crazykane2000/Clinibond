<?php include 'administrator/connection.php';
  include 'administrator/function.php';
  include 'administrator/pdo_class_data.php';
  $pdo = new PDO($dsn, $user, $pass, $opt);
  //print_r($_REQUEST);
  extract($_REQUEST);

  try {
      $stmt = $pdo->prepare('SELECT * FROM `users` WHERE `email`="'.$email.'" OR `phone`="'.$phone.'"  ORDER BY date DESC ');
  } catch(PDOException $ex) {
      echo "An Error occured!"; 
      print_r($ex->getMessage());
  }


  
	if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = ($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	     header('Location:get_started.php?choice=error&value=Incorrect email, please enter valid Email address');
	    }
	  }



  $stmt->execute();
  $user = $stmt->fetchAll();
  $count = count($user);  
  if($count>0){
    header('Location:get_started.php?choice=error&value=A user with either same email or same transaction address already exists');
    exit();
  }


  $tx_address = getToken(42);
  // add Member to the List
  if(isset($_REQUEST['add_user'])){

  	  $secret = "";
      //print_r($_REQUEST);
      $table = "users";
      $name = $_REQUEST['first_name'];
      $uniq = uniqid();

      $key_list = "`first_name`, `last_name`, `email`, `tx_address`, `verified`, `phone`, `password`,`activation_code`";
      $value_list = "'".$_REQUEST['first_name']."',";
      $value_list.= "'".$_REQUEST['last_name']."',";
      $value_list.="'".$email."',";
      $value_list.="'".$tx_address."',";
      $value_list.="'Yes',";
      $value_list.="'".$_REQUEST['phone']."',";
      $value_list.="'".$_REQUEST['pass']."',";
      $value_list.="'".$uniq."'";
      
      $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");

     
      
      add_notification("A New User Created", "admin", 0);        
      header('Location:start_data.php?choice=success&value=Account created, Please fill out the data below.&email_data='.base64_encode($email).'&phone_data='.base64_encode($_REQUEST['phone']));
    //echo $message;
     exit();
    }
    else{
      header('Location:start_data.php?choice=success&value=Account created, Please fill out the data below.&email_data='.base64_encode($email).'&phone_data='.base64_encode($_REQUEST['phone']));
    }
?>