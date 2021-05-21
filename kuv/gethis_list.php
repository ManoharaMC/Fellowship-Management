
<?php
session_start();

if(!isset($_SESSION['auser'])){
header("Location: login.php");

}
include('db.php');

$p_id=$_POST['p_id'];

$user=$_SESSION['auser'];
	 $sel = "SELECT s.Stud_id, s.Stud_name, s.`Email-id`, s.`Contact_Number`, d.Dept_name, f.Emp_name, s.`Topic`, m.Fell_time, m.Applied_Date FROM `student` s inner join department d inner join faculty f inner join tbl_fellowship_metadata m  on s.Dept_id=d.Dept_id and s.Guid_id=f.Emp_id and s.Stud_id=m.fellow_id  WHERE m.Req_with='5' and m.Fell_time='$p_id'";
	
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
echo "Applied Date:" . $row['Applied_Date']."<br>";
echo "<hr>";
}
?>
 
 