<?php 
include('../include/config.php');
include("../include/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
	<?php include('header.php'); ?>
		<!-- end color quick setting -->
		<!-- start page container -->
		<?php include('menu.php') ?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Donation Requests</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Donation Requests</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Donation Requests List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
												
													<div class="card-body ">
														
														<table
															class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
															id="example4">
															<thead>
																<tr>
																	
																	<th></th>
																	<th> Name </th>
																	<th>Blood Group </th>
																	<th> Mobile </th>
																	<th> Email </th>
																	<th>DOB</th>
																	<th>Age</th>
																	<th>Address</th>
																	<th> Action </th>
																</tr>
															</thead>
															<tbody>
														   <?php
															$i=1;
															$sql=$obj->query("select * from tbl_donor_request where 1=1 and user_id='".$_SESSION['user_id']."'",$debug=-1);
															while($line=$obj->fetchNextObject($sql)){?>
																<tr class="odd gradeX">
																	
																	<td class="left"><?php echo $i ?></td>
																	<td><?php echo $line->name ?></td>
																	<td class="left"><?php echo $line->blood_group ?></td>
																	<td><a href="<?php echo $line->mobile ?>">
																			<?php echo $line->mobile ?></a></td>
																	<td><a href="<?php echo $line->email ?>">
																			<?php echo $line->email ?> </a></td>
																	<td class="left"><?php echo $line->dob ?></td>
																	<td><a href="<?php echo $line->age ?>">
																			<?php echo $line->age ?> </a></td>
																	<td><a href="<?php echo $line->address ?>">
																			<?php echo $line->address ?> </a></td>
																	<td>
																		<a href="donor-request-addf.php?id=<?php echo $line->id;?>" class="tblEditBtn">
																			<i class="fa fa-pencil"></i>
																		</a>
																		
																			<a href="request-del.php?id=<?php echo $line->id;?>"onclick=" return confirm('Are you sure?')" class="tblDelBtn" >
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
															   <?php $i++; } ?>
															
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
					
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->

			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
<?php include('footer.php'); ?>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/all_students.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 09:46:06 GMT -->
</html>