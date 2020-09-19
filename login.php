<?php ob_start(); session_start();?>
<?php include('connect.php'); ?>
<?php include('functions.php'); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ct web agency">
    <title>Login Page</title>
	<link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
	
	<!--div with ajax result-->
	<div id="return"></div>
	
	<!--loading gif where it appears-->
	<div id="load"></div>
	
    <form class="form-signin" name="loginForm" id="loginForm">
	  <img class="mb-4" src="assets/img/login-logo.png" alt="" width="" height="90">
	  <label for="inputEmail" class="sr-only">Your E-Mail</label>
	  <input type="email" id="email" onKeyUp="email_control()" name="email" class="form-control" placeholder="Your E-Mail" required autofocus>
	  <label for="inputPassword" class="sr-only">Your Password</label>
	  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Your Password" required>
	  <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" onclick="AjaxPost('loginForm','UserLogin','return','load')">Sign In</button>
	  <!--
	  AjaxPost('loginForm','UserLogin','return','load')
	  loginForm	   = FORM ID
	  UserLogin    = Ajax.php case "UserLogin": Function
	  return       = return div
	  load         = loading div
	  -->
	  <div class="checkbox mb-3">
		<p><br>Don't have an account yet? <a href="register"><br><b>Create Account</b></a></p>
	  </div>
	  
	  <p class="mt-5 mb-3 text-muted">&copy; 2020 All Rights Reserved.</p>
	</form>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/main.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>
