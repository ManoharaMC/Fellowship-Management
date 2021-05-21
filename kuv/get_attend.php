
<div style="font-size:10px;text-align:left;"><font color="black">P - Present A- Absent H - Holiday SS-Second Saturday S - Sunday NA- Day Not Exist in Month</font></div>
<?php
include_once("db.php");



$f_if=$_POST['f_id'];

$sel = "SELECT `fel_id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twenty_one`, `twenty_two`, `twenty_three`, `twenty_four`, `twenty_five`, `twenty_six`, `twenty_seven`, `twenty_eight`, `twenty_nine`, `thirty`, `thirty_one`, `update_date` FROM `attendence` WHERE fel_id='$f_if'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
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
		
		?>
<table class="form-group">
  <tbody><tr>
    <th style="font-size:15px;text-align:left;"><font color="black">Date</font></th>
	<td class="form-group"><font color="black">01</font></td>
				<td class="form-group"><font color="black">02</font></td>
				<td class="form-group"><font color="black">03</font></td>
				<td class="form-group"><font color="black">04</font></td>
				<td class="form-group"><font color="black">05</font></td>
				<td class="form-group"><font color="black">06</font></td>
				<td class="form-group"><font color="black">07</font></td>
				<td class="form-group"><font color="black">08</font></td>
				<td class="form-group"><font color="black">09</font></td>
				<td class="form-group"><font color="black">10</font></td>
            	</td>
			 </tr>
			 </tbody>

  </tr>
  
   <tr>
<td style="text-align:left;"><font color="black">Attendence</font></td><td class="form-group">
                <input type="text" class="form-control"  name="one" value="<?php echo $one ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="two" value="<?php echo $two ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="three" value="<?php echo $three ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="four" value="<?php echo $four ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="five" value="<?php echo $five ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="six" value="<?php echo $six ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="seven" value="<?php echo $seven ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="eight" value="<?php echo $eight ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="nine" value="<?php echo $nine ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="ten" value="<?php echo $ten ?>" required  />
            	</td>
			 </tr>
			 </tbody>
  
 <?php
 
		
		
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
	?>
<tbody><tr>
    <th style="width:20%;font-size:20px;text-align:left;"><font color="black"></font></th>
	<td class="form-group"><font color="black">11</font></td>
				<td class="form-group"><font color="black">12</font></td>
				<td class="form-group"><font color="black">13</font></td>
				<td class="form-group"><font color="black">14</font></td>
				<td class="form-group"><font color="black">15</font></td>
				<td class="form-group"><font color="black">16</font></td>
				<td class="form-group"><font color="black">17</font></td>
				<td class="form-group"><font color="black">18</font></td>
				<td class="form-group"><font color="black">19</font></td>
				<td class="form-group"><font color="black">20</font></td>
            	</td>
			 </tr>
			 </tbody>

  </tr>
  
   <tr>
<td style="text-align:left;"><font color="black"></font></td><td class="form-group">
                <input type="text" class="form-control"  name="eleven" value="<?php echo $eleven ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="twelve" value="<?php echo $twelve ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="thirteen" value="<?php echo $thirteen?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="fourteen" value="<?php echo $fourteen ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="fifteen" value="<?php echo $fifteen ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="sixteen" value="<?php echo $sixteen ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="seventeen" value="<?php echo $seventeen ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="eighteen" value="<?php echo $eighteen ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="nineteen" value="<?php echo $nineteen ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty" value="<?php echo $twenty ?>" required  />
            	</td>
			 </tr>
			 </tbody>



<?php	
		
		
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
		
		?>
		
		
		<tbody><tr>
    <td style="text-align:left;"><font color="black"></font></td>
	<td class="form-group"><font color="black">21</font></td>
				<td class="form-group"><font color="black">22</font></td>
				<td class="form-group"><font color="black">23</font></td>
				<td class="form-group"><font color="black">24</font></td>
				<td class="form-group"><font color="black">25</font></td>
				<td class="form-group"><font color="black">26</font></td>
				<td class="form-group"><font color="black">27</font></td>
				<td class="form-group"><font color="black">28</font></td>
				<td class="form-group"><font color="black">29</font></td>
				<td class="form-group"><font color="black">30</font></td>
				<td class="form-group"><font color="black">31</font></td>
            	</td>
			 </tr>
			 </tbody>

  </tr>
  
   <tr>
<td style="text-align:left;"><font color="black"></font></td><td class="form-group">
                <input type="text" class="form-control"  name="twenty_one" value="<?php echo $twenty_one ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="twenty_two" value="<?php echo $twenty_two ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_three" value="<?php echo $twenty_three?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_four" value="<?php echo $twenty_four ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_five" value="<?php echo $twenty_five ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="twenty_six" value="<?php echo $twenty_six ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_seven" value="<?php echo $twenty_seven ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_eight" value="<?php echo $twenty_eight ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_nine" value="<?php echo $twenty_nine ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="thirty" value="<?php echo $thirty ?>" required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="thirty_one" value="<?php echo $thirty_one ?>" required  />
            	</td>
			 </tr>
			 </tbody>
		
		
		
		
		
		<?php
		
		
	}
	}
	else if(mysqli_affected_rows($con)>1){
		echo "Problem With Attendence Please Contact Admin";
	}
	else {
	 ?>

<table class="form-group">
  <tbody><tr>
    <th style="width:20%;font-size:20px;text-align:left;"><font color="black">Date</font></th>
	<td class="form-group"><font color="black">01</font></td>
				<td class="form-group"><font color="black">02</font></td>
				<td class="form-group"><font color="black">03</font></td>
				<td class="form-group"><font color="black">04</font></td>
				<td class="form-group"><font color="black">05</font></td>
				<td class="form-group"><font color="black">06</font></td>
				<td class="form-group"><font color="black">07</font></td>
				<td class="form-group"><font color="black">08</font></td>
				<td class="form-group"><font color="black">09</font></td>
				<td class="form-group"><font color="black">10</font></td>
            	</td>
			 </tr>
			 </tbody>

  </tr>
  
   <tr>
<td style="text-align:left;"><font color="black">Attendence</font></td><td class="form-group">
                <input type="text" class="form-control"  name="one"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="two"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="three"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="four"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="five"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="six"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="seven"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="eight"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="nine"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="ten"  required  />
            	</td>
			 </tr>
			 </tbody>
  

<tbody><tr>
    <th style="width:20%;font-size:20px;text-align:left;"><font color="black"></font></th>
	<td class="form-group"><font color="black">11</font></td>
				<td class="form-group"><font color="black">12</font></td>
				<td class="form-group"><font color="black">13</font></td>
				<td class="form-group"><font color="black">14</font></td>
				<td class="form-group"><font color="black">15</font></td>
				<td class="form-group"><font color="black">16</font></td>
				<td class="form-group"><font color="black">17</font></td>
				<td class="form-group"><font color="black">18</font></td>
				<td class="form-group"><font color="black">19</font></td>
				<td class="form-group"><font color="black">10</font></td>
            	</td>
			 </tr>
			 </tbody>

  </tr>
  
   <tr>
<td style="text-align:left;"><font color="black"></font></td><td class="form-group">
                <input type="text" class="form-control"  name="eleven"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="twelve"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="thirteen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="fourteen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="fifteen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="sixteen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="seventeen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="eighteen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="nineteen"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty"  required  />
            	</td>
			 </tr>
			 </tbody>
	 

		<tbody><tr>
    <td style="text-align:left;"><font color="black"></font></td>
	<td class="form-group"><font color="black">21</font></td>
				<td class="form-group"><font color="black">22</font></td>
				<td class="form-group"><font color="black">23</font></td>
				<td class="form-group"><font color="black">24</font></td>
				<td class="form-group"><font color="black">25</font></td>
				<td class="form-group"><font color="black">26</font></td>
				<td class="form-group"><font color="black">27</font></td>
				<td class="form-group"><font color="black">28</font></td>
				<td class="form-group"><font color="black">29</font></td>
				<td class="form-group"><font color="black">30</font></td>
				<td class="form-group"><font color="black">31</font></td>
            	</td>
			 </tr>
			 </tbody>

  </tr>
  
   <tr>
<td style="text-align:left;"><font color="black"></font></td><td class="form-group">
                <input type="text" class="form-control"  name="twenty_one"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="twenty_two"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_three"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_four"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_five"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control" name="twenty_six"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_seven"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_eight"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="twenty_nine"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="thirty"  required  />
            	</td>
				<td class="form-group">
                <input type="text" class="form-control"  name="thirty_one" required  />
            	</td>
			 </tr>
			 </tbody>
			 </table>
			 
			 <?php
	}
	?>