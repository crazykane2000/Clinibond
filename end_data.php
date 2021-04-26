<?php include 'administrator/connection.php';
  include 'administrator/function.php';
  include 'administrator/pdo_class_data.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CliniBond</title>
    <link rel="icon" href="assets/images/favicon.html" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Root Multipurpose Landing Page Template">
    <meta name="keywords" content="Root HTML Template, Root Landing Page, Landing Page Template">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700%7CRoboto:300,400,500%7CMuli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css"> <!-- Resource style -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css"> <!-- Resource style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
  
  body {
    background-color: #fff;
    font-family: Raleway;
  }

  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    margin-top:0px;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  
  input,select {
    padding: 10px;
    width: 100%;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 5px;
    font-size: 14px;
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  button {
    background-color: #41cd52;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
    border-radius: 5px;
  }

  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
  }
</style>


  </head>
  <body>

    <div class="wrapper">
      <?php include  'header.php'; ?>

      <div id="main" class="main">
        <div style="padding: 30px;"></div>

        <div id="services" class="pi-points" style="background-color: #f4f4f4">
          <div class="container" >
            <div class="row text-center">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="points-intro text-center">
                  <?php see_status2($_REQUEST); ?>
                 </div>
              </div>
              <div class="col-sm-12 wow fadeInDown" data-wow-delay="0.1s">
                <div id="regForm">
                    <img src="assets/images/payment_successful.gif">
                    <h2>Your Data Has been saved</h2>
                    <hr/>
                    <a href="members/index.php" class="btn btn-success ">Sign In to View the Data</a>
                </div>
                
              </div>
              
              
            </div>
          </div>
        </div>


       <?php include 'footer.php'; ?>
      </div> <!-- Main -->
    </div><!-- Wrapper -->


    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/validator.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>


  </body>
</html>
