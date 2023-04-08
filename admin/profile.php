
<?php

include('../include/config.php');
include("../include/functions.php");

if($_REQUEST['submitContact']=='yes'){
$name=$obj->escapestring($_POST['name']); 
$last_name=$obj->escapestring($_POST['last_name']);
$email=$obj->escapestring($_POST['email']);
$mobile=$obj->escapestring($_POST['mobile']);



$sql = "update $tbl_admin set emp_name='$name',emp_surname='$last_name',emp_email='$email',emp_mobile1='$mobile' where id='1'";
$obj->query($sql);
$_SESSION['sess_msg']='updated sucessfully';  


header("location: profile.php");


};

$sql=$obj->query("select * from $tbl_admin  where id='1'",-1);//die;
$result=$obj->fetchNextObject($sql);

?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<?php include('header.php'); ?>
		<!-- start color quick setting -->
		<?php include('menu.php') ?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Profile Update</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Profile Update</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Profile Update</li>
							</ol>
						</div>
					</div>
					<p style="color:red;" ><?php echo $_SESSION['sess_msg']; ?></p>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Admin Information</header>
									
							
								</div>

								<form action="" method="post">
							  <input type="hidden" name="submitContact" value="yes">
							    <input type="hidden" name="id" value="0" />
								
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo $result->emp_name; ?>">
											<label class="mdl-textfield__label">First Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="last_name" id="last_name" value="<?php echo $result->emp_surname; ?>">
											<label class="mdl-textfield__label">Last Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" id="email" name="email" value="<?php echo $result->emp_email; ?>">
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Enter Valid Email Address!</span>
										</div>
									</div>
								
									
							
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="mobile" name="mobile" value="<?php echo $result->emp_mobile1; ?>">
											<label class="mdl-textfield__label" for="text5">Mobile Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
								
								
								
									
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" value="submit" 
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- end page container -->
		<!-- start footer -->
<?php include('footer.php'); ?>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/add_professor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 09:46:04 GMT -->
</html>