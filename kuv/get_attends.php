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

$select = "SELECT `fel_id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twenty_one`, `twenty_two`, `twenty_three`, `twenty_four`, `twenty_five`, `twenty_six`, `twenty_seven`, `twenty_eight`, `twenty_nine`, `thirty`, `thirty_one`, `update_date` FROM `attendence` WHERE `fel_id`='$f_if'";

$result=mysqli_query($con,$select);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	
	$one=$row['one'];
		$two=$row['two'];
		$three=$row['three'];
		$four=$row['four'];
		$five=$row['five'];
		
		
		
		$six=$row['six'];
		$seven=$row['seven'];
		$eight=$row['eight'];
		$nine=$row['nine'];
		$ten=$row['ten'];
		
		$eleven=$row['eleven'];
		$twelve=$row['twelve'];
		$thirteen=$row['thirteen'];
		$fourteen=$row['fourteen'];
		$fifteen=$row['fifteen'];
		
		
				
		$sixteen=$row['sixteen'];
		$seventeen=$row['seventeen'];
		$eighteen=$row['eighteen'];
		$nineteen=$row['nineteen'];
		$twenty=$row['twenty'];
		
		$twenty_one=$row['twenty_one'];
		$twenty_two=$row['twenty_two'];
		$twenty_three=$row['twenty_three'];
		$twenty_four=$row['twenty_four'];
		$twenty_five=$row['twenty_five'];
		
		
				
		$twenty_six=$row['twenty_six'];
		$twenty_seven=$row['twenty_seven'];
		$twenty_eight=$row['twenty_eight'];
		$twenty_nine=$row['twenty_nine'];
		$thirty=$row['thirty'];
		$thirty_one=$row['thirty_one'];
	
	
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
Subject :Scholar Attendence for the period of <?php echo $prd; ?>

</td></tr>
<tr><td> <br><br></td><td><br><br></td></tr>

</table >
<table border=1 width=100% style="color: black;">
<tr><td>Date</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td></tr>
<tr><td>Attend</td><td><?php echo $one ?></td><td><?php echo $two ?></td><td><?php echo $three ?></td><td><?php echo $four ?></td><td><?php echo $five ?></td><td><?php echo $six ?></td><td><?php echo $seven ?></td><td><?php echo $eight ?></td><td><?php echo $nine ?></td><td><?php echo $ten ?></td><td><?php echo $eleven ?></td><td><?php echo $twelve ?></td><td><?php echo $thirteen ?></td><td><?php echo $fourteen ?></td><td><?php echo $fifteen ?></td><td><?php echo $sixteen ?></td><td><?php echo $seventeen ?></td><td><?php echo $eighteen ?></td><td><?php echo $nineteen ?></td><td><?php echo $twenty ?></td><td><?php echo $twenty_one ?></td><td><?php echo $twenty_two ?></td><td><?php echo $twenty_three ?></td><td><?php echo $twenty_four ?></td><td><?php echo $twenty_five ?></td><td><?php echo $twenty_six ?></td><td><?php echo $twenty_seven ?></td><td><?php echo $twenty_eight ?></td><td><?php echo $twenty_nine ?></td><td><?php echo $thirty ?></td><td><?php echo $thirty_one ?></td></tr>

</table>
<table width=100% style="color: black;">
<tr><td> <br><br></td><td><br><br></td></tr>
<tr><td> Approved by Guide</td><td>Approved by Chairman</td></tr>

</table>