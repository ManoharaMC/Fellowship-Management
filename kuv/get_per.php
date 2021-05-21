<?php
session_start();

if(!isset($_SESSION['auser'])){
header("Location: login.php");

}
include('db.php');



$adm_id=$_SESSION['auser'];

$f_if=$_POST['f_id'];

$insert = "UPDATE tbl_fellowship_metadata SET Req_with='5' WHERE fel_id='$f_if'";
mysqli_query($con,$insert);
	if(mysqli_affected_rows($con)==1)
	{
		echo "<script>alert('Application Accepted Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Application Invited for This Period Already');</script>";
		
	}

?>

