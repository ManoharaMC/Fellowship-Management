<?php
session_start();

if(!isset($_SESSION['auser'])){
header("Location: login.php");

}
include('db.php');



$adm_id=$_SESSION['auser'];

$f_if=$_POST['f_id'];

?>

<!--<div >
</div>-->



       
      
        <center><h2 class="form-signin-heading">Selected</h2></center>
<hr />
       <b> 
       
			<div id="onx">
 <div class="form-group">
 <table  width="100%"  style="color: black;">
 <tr><td>Name</td><td>Reg_NO</td><td>Guide</td><td>Dept</td><td>Period</td><td>App Date</td></tr>
 <?php
 
 $select = "SELECT fel_id, fellow_id, s.Stud_name,d.Dept_name, f.Emp_name,Fell_time, Req_with, Applied_Date FROM tbl_fellowship_metadata m inner join student s inner join faculty f inner join department d on m.fellow_id=s.Stud_id and s.Guid_id=f.Emp_id and s.Dept_id=d.Dept_id WHERE m.Req_with='4' and fel_id='$f_if'";

$result=mysqli_query($con,$select);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	?>
	
 <tr><td><input type="hidden"   name="f_id" id="f_id" value="<?php echo $row['fel_id'] ?>" required  /> <?php echo $row['Stud_name']."</td><td>".$row['fellow_id']."</td><td>".$row['Emp_name']."</td><td>".$row['Dept_name']."</td><td>".$row['Fell_time']."</td><td>".$row['Applied_Date']."</td>"; ?>
  </tr><tr><td>
  <button    id="<?php echo $row['fel_id']; ?> " value="<?php echo $row['fel_id']; ?>" onclick="get_bill(this.value);">Bill</button></td><td>
  <button    id="<?php echo $row['fel_id']; ?> " value="<?php echo $row['fel_id']; ?>" onclick="get_attend(this.value);">Attendence</button></td><td>
  <button    id="<?php echo $row['fel_id']; ?> " value="<?php echo $row['fel_id']; ?>" onclick="get_progress(this.value);">Progress</button></td><td>
  <button    id="<?php echo $row['fel_id']; ?> " value="<?php echo $row['fel_id']; ?>" onclick="get_accept(this.value);">Accept</button></td><td>
   <button    id="<?php echo $row['fel_id']; ?> " value="<?php echo $row['fel_id']; ?>" onclick="printDiv();">print</button></td><td></tr>
  
  <?php
}
?>