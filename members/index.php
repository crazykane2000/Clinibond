<?php include 'pdo_class_data.php'; ?>
<!DOCTYPE html>
<html>
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php include 'title.php'; ?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <?php $rand = mt_rand(1,4); ?>
  <body style="background-image: url('../assets/images/refdd.png');background-size: cover;">
     
    <section class="login-content">     
      <div class="login-box" style="height: 450px;">
        <?php see_status2($_REQUEST); ?>
        <form class="login-form" action="login_handle.php" method="post">
          <div style="padding: 10px;"></div>
         <center> <img src="clinibo.jpg" style="width: 130px"></center>
         <div style="padding: 10px;"></div>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" style="border-radius: 0px;border:solid 1px #ccc" name="user" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control"  style="border-radius: 0px;border:solid 1px #ccc"  name="pass" type="password" placeholder="Password">
          </div>
          <div style="padding:10px;"></div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" style="    background-image: linear-gradient(45deg, #6bb464 0%, #4c80be  100%);"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
          <hr/>

          <div class="form-group mt-20">
            <p class="semibold-text mb-0" style="text-align: center;"><a href="../get_started.php" style="color: #111"><i class="fa fa-angle-left fa-fw"></i> Dont have an Account?</a></p>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head" style="font-family: 'Century Gothic';"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" style="background-color: #204dfb"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip" style="color: #999"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
        <div style="padding: 10px;"></div>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>

</html>