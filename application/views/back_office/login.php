

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V16</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>ressource/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ressource/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo base_url();?>ressource/images/bg-01.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Account Login
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="<?php echo base_url(); ?>back_office/main/login_validation">

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="User name" name="username">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password"  placeholder="Password" name="password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn" name="insert">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>ressource/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>ressource/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>ressource/js/main.js"></script>

</body>
</html>
