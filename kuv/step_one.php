<?php 
include('db.php');

if(isset($_POST['btn-save'])){


$suser='382';

$insert = "INSERT INTO `tbl_fellowship_metadata`(`fellow_id`, `Fell_time`, `Req_with`) VALUES ('".$suser."','".$_POST['prd']."','1')";

mysqli_query($con,$insert);
	if(mysqli_affected_rows($con)>0)
	{
		echo "<script>alert('Application initiated Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Application  Already Initiated');</script>";
		
	}
}
?>

