<?php
require_once 'dbconfig.php';



echo "<option value=''>SELECT Student</option>";
$dept_id = $_POST['dept_id'];

$stmt1 = $db_con->prepare("SELECT Stud_name, Stud_id FROM student where Dept_id='$dept_id'");
      $stmt1->execute();
$infoarray = $stmt1->fetchAll();


foreach ($infoarray as $infor) {



?>

	    <option value="<?php echo $infor['Stud_id']; ?>"><?php echo $infor['Stud_name']; ?></option>

<?php
	}



?>

	 
