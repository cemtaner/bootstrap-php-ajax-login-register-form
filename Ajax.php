<?php include('connect.php'); ?>
<?php include('functions.php'); ?>
<?php ob_start(); session_start(); ?>
<?php

//--Security All POST Controller
if($_POST){
	
function index(){
	//--ajax.php default index function
}

function UserRegister(){
	
	//--POST form
	$email = p('email');
	$pass = p('pass');
	$again_pass = p('again_pass');
	$contract = p('contract');
	
	$md5pass = md5($again_pass);
	
	
	//--Controller
	if($email==""){ 
	
		alert_error('You must write an email address.');
		
	}elseif($pass==""){
		
		alert_error('Create a password and repeat it.');
		
	}elseif($again_pass==""){
		
		alert_error('Repeat your password.');
		
	}elseif(($pass!=$again_pass)){
		
		alert_error('The passwords you typed do not match.');
		
	}elseif(($pass!=$again_pass)){

		alert_error('The passwords you typed do not match.');
		
	}elseif($contract==""){

		alert_error('You did not accept the user agreement.');
		
	}else{
				
		$password_rules= '/\S*((?=\S{8,})(?=\S*[A-Z]))\S*/';
		if(preg_match_all($password_rules, $pass)){
			
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
			   
						
				$result = mysql_query("SELECT * FROM users where email='$email'");
				$num_rows = mysql_num_rows($result);

				if($num_rows>0){
					
					alert_error('This email is already registered on our site. Please write a valid email.');
					
				}else{
					
					$ip_address  = ip();
					
					$ua=getBrowser();
					$browser= "Browser: " . $ua['name'] . " " . $ua['version'] . " OS: " .$ua['platform'];
					
					
					$register = mysql_query("insert into users (email,pass,ip,browser) values ('$email','$md5pass','$ip_address','$browser')");
					if($register){
						
						?>
						<script type="text/javascript">
						$("#epGiris").val("");
						$("#inputPassword").val("");
						$("#inputAgainPassword").val("");
						//You can direct it to the member login page from here
						//window.location.replace('login.php')
						</script>
						<?php

						alert_successful('Your registration is complete.');

					}else{

						alert_error('Your registration has not been completed. Try again.');
						
					}
					
				}
			   
			}else{

				alert_error('Please enter a valid email.');
				
			}
			
		}else{

			alert_error('The password must contain at least 8 characters and 1 uppercase letter.');
			
		}
		
	}
		
	
	
}

function UserLogin(){
	$email = p('email');
	$pass = p('pass');
	
	$md5pass = md5($pass);
	
	if($email==""){

		alert_error('Enter your e-mail address.');
		
	}elseif($pass==""){

		alert_error('Enter your password.');
		
	}else{
		
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
			   
						
				$result = mysql_query("select * from users where email='$email' and pass='$md5pass'");
				$num_rows = mysql_num_rows($result);

				if($num_rows>0){
					
						$_SESSION["user"] = $email;
						
						alert_successful('Login process is complete.');
						?>
						<script type="text/javascript">
						//You can direct it to the member profile page from here
						//window.location.replace('profile.php')
						</script>
						<?php
					
				}else{
					
						alert_error('Login failed, try again.');
					
				}
			   
			}else{
				
				alert_error('Please enter a valid email.');
				
			}

	}
	
	
}


$Func	= $_GET["Func"];
switch($Func){
default:
	index();
	break;

//--User Register Function
case "UserRegister":
UserRegister();
break;


//--User Login Function
case "UserLogin";
UserLogin();
break;

}

}else{
	
	// Security Violation of Entire POST Controller
	
	## Session Controls ##
	$user = $_SESSION["user"];
	if($user==""){
		//redirect if there is no cookie
		unset($_SESSION["user"]);
		header("location:login");
	}else{
		//redirect if cookie
		header("location:profile");
	}
}



?>