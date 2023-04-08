<?php 
include('../../include/config.php');
include("../../include/functions.php");

$first_name = $_REQUEST['name'];

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


$sql = $obj->query("select id from $tbl_user where email='$email'");
if($obj->numRows($sql)>0){
  echo "0";
}else{

  $obj->query("insert into $tbl_user set name='$first_name',email='$email',pass='$password'",$debug=-1); //die;
  $lastInserId=$obj->lastInsertedId();
  
  if ($lastInserId>0) {
   
     $_SESSION['user_id']=$lastInserId;
    $_SESSION['user_name']=$first_name; 
header("Location: ../user_disboard.php");


  }else{
    echo"2";
  }
}
?>
		

