

<?php
session_start();
if(!isset($_SESSION['Suser'])){
header("Location: login.php");

}
include('db.php');

$suser=$_SESSION['Suser'];
$f_if=$_POST['res_id'];
if($f_if==1){
$sel="SELECT fel_id, fellow_id, Fell_time, Req_with, Applied_Date FROM tbl_fellowship_metadata WHERE Req_with='$f_if' and `fellow_id`='$suser'";

$result=mysqli_query($con,$sel);
$i=1;
	echo "<table width='100%' align='center'><tr><td>Sl. No</td><td>Req. Id</td><td> Period </td><td> Application Ini Date</td></td>";
	if(mysqli_affected_rows($con)>0){
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		echo "<tr><td>".$i."</td><td>".$row['fel_id']."</td><td>".$row['Fell_time']."</td><td>".$row['Applied_Date']."</td></tr>";
		$i=$i+1;
	}
	echo "</table>";
	}
}

if($f_if==2){
$sel="SELECT fel_id, fellow_id, Fell_time, Req_with, Applied_Date FROM tbl_fellowship_metadata WHERE Req_with='$f_if' and `fellow_id`='$suser'";

$result=mysqli_query($con,$sel);
$i=1;
	echo "<table width='100%' align='center'><tr><td>Sl. No</td><td>Req. Id</td><td> Period </td><td> Application Ini Date</td></td>";
	if(mysqli_affected_rows($con)>0){
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		echo "<tr><td>".$i."</td><td>".$row['fel_id']."</td><td>".$row['Fell_time']."</td><td>".$row['Applied_Date']."</td></tr>";
		$i=$i+1;
	}
	echo "</table>";
	}
}


	?>