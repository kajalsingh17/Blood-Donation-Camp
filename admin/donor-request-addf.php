<?php

include('../include/config.php');
include("../include/functions.php");

if($_REQUEST['submitContact']=='yes'){
 $name=$obj->escapestring($_POST['name']); 
  $last_name=$obj->escapestring($_POST['last_name']);
  $email=$obj->escapestring($_POST['email']);
   $mobile=$obj->escapestring($_POST['mobile']);
   $dob=$obj->escapestring($_POST['dob']);
   $age=$obj->escapestring($_POST['age']);
  $address=$obj->escapestring($_POST['address']);
  $blood_group=$obj->escapestring($_POST['blood_group']);
  $gender=$obj->escapestring($_POST['gender']);

if ($_REQUEST['id']=='') {
$obj->query("insert into tbl_donor_request set name='$name',last_name='$last_name',email='$email',mobile='$mobile',dob='$dob',age='$age',address='$address',blood_group='$blood_group',gender='$gender'",-1); //die();
}else{

	$sql = "update tbl_donor_request set name='$name',last_name='$last_name',email='$email',mobile='$mobile',dob='$dob',age='$age',address='$address',blood_group='$blood_group',gender='$gender' where id='".$_REQUEST['id']."'";
//   print_r($sql);die;
	$obj->query($sql);
  $_SESSION['sess_msg']='updated sucessfully';  
}
  
  header("location: donor-request-list.php");


};
if($_REQUEST['id']!=''){
  $sql=$obj->query("select * from tbl_donor_request where id=".$_REQUEST['id']);
  $result=$obj->fetchNextObject($sql);
} 
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
								<div class="page-title">Add Donation Requests</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Donation Requests</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Donation Requests</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Donor Basic Information</header>
									
							
								</div>
								<form action="" method="post">
							  <input type="hidden" name="submitContact" value="yes">
							    <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />
								
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo $result->name; ?>">
											<label class="mdl-textfield__label">First Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="last_name" id="last_name" value="<?php echo $result->last_name; ?>">
											<label class="mdl-textfield__label">Last Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" id="email" name="email" value="<?php echo $result->email; ?>">
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Enter Valid Email Address!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="blood_group" name="blood_group" value="<?php echo $result->blood_group; ?>">
											<label class="mdl-textfield__label">Blood Group</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
									<!-- 	<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
										
											<select data-mdl-for="sample2"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu" name="gender" id="gender">
											<label for="sample2" class="mdl-textfield__label">Gender</label>
											<option class="mdl-menu__item" name="gender" value="meal" data-val="DE">Male</option>
											<option class="mdl-menu__item" name="gender" value="female" data-val="BY">Female</option>
											</select>
											
										</div> -->
									<select class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width" name="gender" id="gender">
									<option class="mdl-menu__item" name="gender" value="meal" data-val="DE">Male</option>
									<option class="mdl-menu__item" name="gender" value="female" data-val="BY">Female</option>
									</select>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="mobile" name="mobile" value="<?php echo $result->mobile; ?>">
											<label class="mdl-textfield__label" for="text5">Mobile Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="dob" name="dob" value="<?php echo $result->dob; ?>">
											<label class="mdl-textfield__label">Birth Date</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="age" name="age" value="<?php echo $result->age; ?>">
											<label class="mdl-textfield__label">age</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="address" name="address" value="<?php echo $result->address; ?>"></textarea>
											<label class="mdl-textfield__label" for="text7">Address</label>
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