<?php session_start();

include("../include/config.php");

include("../include/functions.php"); 

$id = $_REQUEST['id'];
if($id){
  $obj->query("delete from tbl_donor_request where id='$id'",-1);//	die;
	header("location: donor-request-list.php");

  
}


$uid = $_REQUEST['user_id'];
if($uid){
$obj->query("delete from $tbl_user where id='$uid'",-1);//die;
header("location: user-list.php");

}  

		



	

?>

