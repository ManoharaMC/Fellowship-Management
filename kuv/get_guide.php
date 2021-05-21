<?php
require_once 'dbconfig.php';



echo "<option value=''>SELECT GUIDE</option>";
$dept_id = $_POST['dept_id'];

$stmt1 = $db_con->prepare("SELECT Emp_name, Emp_id FROM faculty where Dept_id='$dept_id'");
      $stmt1->execute();
$infoarray = $stmt1->fetchAll();


foreach ($infoarray as $infor) {



?>

	    <option value="<?php echo $infor['Emp_id']; ?>"><?php echo $infor['Emp_name']; ?></option>

<?php
	}



?>

	 
