
<?php
session_start();

if(!isset($_SESSION['auser'])){
header("Location: login.php");

}
include('db.php');

$d_id=$_POST['d_id'];

$user=$_SESSION['auser'];
	$sel = "SELECT s.Stud_id, s.Stud_name, s.`Email-id`, s.`Contact_Number`, d.Dept_name, f.Emp_name, s.`Topic`, s.`Fello_category` FROM `student` s inner join department d inner join faculty f on s.Dept_id=d.Dept_id and s.Guid_id=f.Emp_id   WHERE s.Dept_id='$d_id'";
	
	$result=mysqli_query($con,$sel);
	
?>

<!--<div >
</div>-->




<div style="color: black;">
<?php
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
Echo "Name :".$row['Stud_name']."<br>";
Echo "Reg. NO :".$row['Stud_id']."<br>";
Echo "Guide Name :".$row['Emp_name']."<br>";
echo "Dept :".$row['Dept_name']."<br>";
Echo "Contact :".$row['Contact_Number']."  -  ".$row['Email-id']."<br>";
Echo "Topic  :".$row['Topic']."<br>";
echo "<hr>";
}
?>
 
 