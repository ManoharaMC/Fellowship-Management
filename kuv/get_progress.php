

<?php
include_once("db.php");



$f_if=$_POST['f_id'];

$sel = "SELECT `fel_id`, `Conference`, `seminar`, `paper`, `publish`, `detail_report`, `update_date` FROM `progress` WHERE  fel_id='$f_if'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		$fel_id=$row['fel_id'];
		$conf=$row['Conference'];
		$sem=$row['seminar'];
		$pep=$row['paper'];
		$pub=$row['publish'];
		$det_rep=$row['detail_report'];
		
	

?>
		<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Conference Attended" name="Conference" id="Conference" value="<?php echo $conf ?>" required />
            </div>
			<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Seminar/workshop Attended" name="seminar" id="seminar" value="<?php echo $sem ?>" required  />
            </div>		
			<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Paper present" name="paper" id="paper"  value="<?php echo $pep ?>" required />
            </div>	
			<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of paper published" name="publish" id="publish"  value="<?php echo $pub ?>" required />
            </div>	
			<div class="form-group"><textarea name="detail_report" id="detail_report" rows="15" cols="50" placeholder="Detail Report" class="form-control" required><?php echo $det_rep ?></textarea>
			</div>
        <hr />
        <div id="error">
        <!-- error will be showen here ! -->
        </div>

	<?php
	}
	}
	else{
	?>
		<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Conference Attended" name="Conference" id="Conference"  required />
            </div>
			<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Seminar/workshop Attended" name="seminar" id="seminar"  required  />
            </div>		
			<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Paper present" name="paper" id="paper"   required />
            </div>	
			<div class="form-group">
                <input type="number" class="form-control" placeholder="Number of paper published" name="publish" id="publish"   required />
            </div>	
			<div class="form-group"><textarea name="detail_report" id="detail_report" rows="15" cols="50" placeholder="Detail Report" class="form-control" required></textarea>
			</div>
        <hr />
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
		
	<?php
	}
	?>