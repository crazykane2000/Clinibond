<?php include 'administrator/connection.php';
  include 'administrator/function.php';
  include 'administrator/pdo_class_data.php';
?>

<!DOCTYPE html>
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
  }

  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  
  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
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
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
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

  .border{
    border:solid 1px red !important;
  }
</style>


  </head>
  <body>

    <div class="wrapper">
      <?php include  'header.php'; ?>

      <div id="main" class="main">
        <div style="padding: 30px;"></div>

        <div id="services" class="pi-points">
          <div class="container" style="background-color: #fff">
            <div class="row text-center">
              <div class="col-sm-5">
                <img src="assets/images/clik.jpg" style="width: 100%">
              </div>
              <div class="col-sm-5 col-sm-offset-1" style="text-align: left;">
                <form action="register_handle.php" method="POST" id="forms" onsubmit="return validate();" novalidate="">
                  <div style="padding: 20px;"></div>
                  <h1 style="font-size: 30px;">Get Started Here!</h1>
                  <?php see_status($_REQUEST); ?>
                  <hr/>
                  <div class="form-group" style="margin-bottom: 20px;" >
                    <label style="font-family:Nunito;text-align: left;font-weight: bold; ">First Name *</label>
                    <div style="padding: 3px;font-weight: bold;"></div>
                    <input type="text" placeholder="Enter First Name" required="" name="first_name" id="first_name" class="form-control" style="height: 50px;">
                  </div>

                  <div class="form-group" style="margin-bottom: 20px;" >
                    <label style="font-family:Nunito;text-align: left;font-weight: bold; ">Last Name *</label>
                    <div style="padding: 3px;font-weight: bold;"></div>
                    <input type="text" placeholder="Enter Last Name" required="" name="last_name" id="last_name" class="form-control" style="height: 50px;">
                  </div>

                  <div class="form-group" style="margin-bottom: 20px;" >
                    <label style="font-family:Nunito;text-align: left;font-weight: bold; ">Email Address *</label>
                    <div style="padding: 3px;font-weight: bold;"></div>
                    <input type="text" placeholder="Enter Email Address" required="" name="email" id="email" class="form-control" style="height: 50px;">
                  </div>

                  <div class="form-group" style="margin-bottom: 20px;" >
                    <label style="font-family:Nunito;text-align: left;font-weight: bold; ">Phone Number * (Format (xxx) xxx-xxxx)</label>
                    <div style="padding: 3px;font-weight: bold;"></div>
                    <input type="text" placeholder="Enter Phone Number" id="phone" required="" name="phone" class="form-control" style="height: 50px;">
                  </div>

                  <div class="form-group" style="margin-bottom: 20px;" >
                    <label style="font-family:Nunito;text-align: left;font-weight: bold; ">Password * </label><br/><span style="font-size: 12px;">(Your password must be at least 8 characters, one uppercase letter, one symbol and a number)</span>
                    <div style="padding: 3px;font-weight: bold;"></div>
                    <input type="password" placeholder="Enter Password" required="" name="pass" id="pass" class="form-control" style="height: 50px;">
                    <span style="color: red" id="pass_check"></span>
                  </div>

                  <hr/>

                  <div class="form-group" style="margin-bottom: 20px;" >
                    <input  type="submit" id="add_user" name="add_user" class="btn btn-success btn-block" style="height: 50px;">
                  </div>
                  <b>Already have an account? <a href="members/index.php">Login here</a></b>
                  <br/>
                  <!--<img src="assets/images/cliks.jpg">-->


                </form>
              </div>         
            </div>
          </div>
        </div>


       <?php include 'footer.php'; ?>
      </div> <!-- Main -->
    </div><!-- Wrapper -->


    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="dist/jquery.inputmask.js"></script>
    <script src="dist/bindings/inputmask.binding.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#phone").inputmask("(999) 999-9999");
      });

      

      $(".form-control").keyup(function(){
          $(this).removeClass("border");
        });

      function validate(){
       
        validation = "True";
        var first_name = $("#first_name").val();
        if (first_name=="") {
          $("#first_name").addClass("border");
          validation="False";
        }

        var last_name = $("#last_name").val();
        if (last_name=="") {
          $("#last_name").addClass("border");
         validation="False";
        }

        var email = $("#email").val();
        if (email=="") {
          $("#email").addClass("border");
          validation="False";
        }

        var phone = $("#phone").val();
        if (phone=="") {
          $("#phone").addClass("border");
          validation="False";
        }

        var pass = $("#pass").val();
        if (pass=="") {
          $("#pass").addClass("border");
          validation="False";
        }

        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        //alert(re.test(pass));
        if (!re.test(pass)) {
          $("#pass_check").html("Your password must be at least 8 characters, one uppercase letter, one symbol and a number");
          validation="False";
        }

        if (validation!="True") {
          alert("Please Complete the Form");
          return false;
        }

        return true;
      }
    </script>
    
  </body>
</html>
