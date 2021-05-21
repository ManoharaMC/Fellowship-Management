<table border=1 width="100%" class="form-signin" style="color: black;">

<tr><td> App Id</td> <td> Name </td> <td> Reg_no</td> <td>Guide</td> <td>Period</td> <td> Date </td></tr>

<?php
session_start();

if(!isset($_SESSION['duser'] ) OR !isset($_SESSION['dept'])){
header("Location: login.php");

}
include_once("db.php");

$dept=$_SESSION['dept'];
$emp_id=$_SESSION['duser'];

$s_if=$_POST['s_id'];
if($s_if=='0'){
	
$sel = "SELECT m.fel_id, m.fellow_id,s.Stud_name,f.Emp_name, m.Fell_time, a.Dept_id, c_Action, Approved_date FROM tbl_dept_approve a inner join tbl_fellowship_metadata m inner join student s inner join faculty f on a.fel_id=m.fel_id and m.fellow_id=s.Stud_id and s.Guid_id=f.Emp_id WHERE c_action='$s_if' and a.Dept_id='$dept'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	
		
		 echo "<tr><td>".$row['fel_id']."</td><td>".$row['Stud_name']."</td><td>".$row['fellow_id']."</td><td>".$row['Emp_name']."</td><td>".$row['Fell_time']."</td><td>".$row['Approved_date']."</td></tr>"; 
		
		
	}
	}	
	
	
	
	
}
$s_if=$_POST['s_id'];
if($s_if=='1'){
	
$sel = "SELECT m.fel_id, m.fellow_id,s.Stud_name,f.Emp_name, m.Fell_time, a.Dept_id, c_Action, Approved_date FROM tbl_dept_approve a inner join tbl_fellowship_metadata m inner join student s inner join faculty f on a.fel_id=m.fel_id and m.fellow_id=s.Stud_id and s.Guid_id=f.Emp_id WHERE c_action='$s_if' and a.Dept_id='$dept'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		 echo "<tr><td>".$row['fel_id']."</td><td>".$row['Stud_name']."</td><td>".$row['fellow_id']."</td><td>".$row['Emp_name']."</td><td>".$row['Fell_time']."</td><td>".$row['Approved_date']."</td></tr>"; 
	}
	}	
	
	
	
	
}
	?>
	</table>