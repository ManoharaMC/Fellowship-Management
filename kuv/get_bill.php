<?php

include('db.php');
$f_if=$_POST['f_id'];


$select = "SELECT m.fel_id, m.fellow_id, s.Stud_name,s.Stud_id,m.Fell_time,f.Emp_name,d.Dept_name, m.Req_with, m.Applied_Date FROM tbl_fellowship_metadata m inner join student s inner join faculty f inner join department d on m.fellow_id=s.Stud_id and s.Guid_id=f.Emp_id and s.Dept_id=d.Dept_id WHERE m.fel_id='$f_if'";

$result=mysqli_query($con,$select);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	
$s_name=$row['Stud_name'];	
$dept=$row['Dept_name'];
$Gui=$row['Emp_name'];
$prd=$row['Fell_time'];
$s_id=$row['Stud_id'];	
$fel_id=$row['fel_id'];
$a_adate=$row['Applied_Date'];
}


?>


<table width=100% style="color: black;">
<tr><td>
From, <br>
<?php echo $s_name; ?>	<br>			 
Research Scholar<br>
Dept of <?php echo $dept; ?>
</td><td></td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td>
Through, <br>
<?php echo $Gui; ?>	<br>			 
Research Guide<br>

</td><td> Chairman<br>
Dept. Of<?php echo $dept; ?>

</td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td colspan="2">
Subject :SC/ST Junior Fellowship of the period of <?php echo $prd; ?>

</td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td colspan="2">
Research fellowship (for Ph.D.) bill of Mr. <?php echo $s_name; ?> (Reg. No: <?php echo $s_id; ?>), Dept. of PG Studies and Research in <?php echo $dept; ?>, for the period of  <?php echo $prd; ?>. Ref. No: <?php  echo $fel_id ?>  dated <?php echo $a_adate;?>

</td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td> Approved by Guide</td><td>Approved by Chairman</td></tr>

</table>