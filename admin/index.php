<?php 
ob_start();	
session_start();
include('../include/config.php');
include("../include/functions.php");
if($_SESSION['sess_admin_id']!=''){
header("location:welcome.php");	
exit();	
}
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 09:45:57 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title> Rustamji institute of technology (Tekanpur) </title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="../assets/css/pages/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
	<script language="javascript" type="text/javascript" src="js/admin.js"></script>
<script>
function LoginValidate(obj)
{
if(obj.username.value=='')
{
alert("Please enter username.");
obj.username.focus();
return false;
}
else if(obj.password.value=='')
{
alert("Please enter password.");
obj.password.focus();
return false;
}
}
</script>
</head>
	
<body>
	<div class="main">
		<!-- Sing in  Form -->						
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="../assets/img/pages/adminlogin.jpg" alt="sing up image"></figure>
						<!-- <a href="sign_up.html" class="signup-image-link">Create an account</a> -->
					</div>
					<div class="signin-form">
						<h2 class="form-title">Login</h2>
						<p style="color: red;"><?php if($_SESSION['sess_msg']!=''){ echo $_SESSION['sess_msg']; $_SESSION['sess_msg']=''; } ?></p>
						<form class="register-form" name="loginform" method="post" action="login.php" onsubmit="return LoginValidate(this);">
								<input type="hidden" name="logged" value="yes" />
							<div class="form-group">
								<div class="">
									<input name="username" type="text" value=""  id="username" Placeholder="User Name"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="password" id="userpass" type="password" value="" Placeholder="Password"
										class="form-control input-height" /> </div>
							</div>
							<!-- <div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div> -->
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin">Login</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 09:45:57 GMT -->
</html>