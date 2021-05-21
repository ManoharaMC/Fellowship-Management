<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kuvempu University-</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="script.js"></script>

<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="../css/superslides.css">
    <!-- Slick slider css file -->
    <link href="../css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="../css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="../css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="../css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="../css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="../style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    
 

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   

   <script src="../js/custom.js"></script>
       <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="../js/jquery.tosrus.min.all.js"></script>   

    <script src="../js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
</head>
<?php
include('dbConfig.php');
?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="report-form"  method="post" action="date.php"   enctype="multipart/form-data">
      
        <center><h2 class="form-signin-heading">Final Report</h2></center>
<hr />
       <b> 
        <div id="error">
            </div>
			<div class="form-group">
	<div class="form-group" >
			<select name="month" id="month" class="form-control">
    <option value="">Select Month</option>
    <?php
		for ($i = 1; $i <=12;   $i++) {
		$date_str = date('M', strtotime("+ $i months"));
		echo "<option value=$i>".$date_str ."</option>";
	} ?>
    </select>
	</div>
	<div class="form-group" >
	<?php
// set start and end year range
	$yearArray = range(1990, 2050);
	?>
<!-- displaying the dropdown list -->
	<select name="year" id="year" class="form-control">
    <option value="">Select Year</option>
    <?php
    foreach ($yearArray as $year) {
        // if you want to select a particular year
        $selected = ($year == year) ? 'selected' : '';
        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    }
    ?>
</select>
</div>
			
			 <div class="form-group" >
		
            <select name="Dept_id" id="Dept_id" class="form-control" onChange="getstudent(this.value);" required>
	    <option value="">SELECT DEPARTMENT</option>
<?php
 $stmt1 = $db_con->prepare("SELECT `Dept_id`, `Dept_name` FROM `department`");
      $stmt1->execute();
$infoarray = $stmt1->fetchAll();
foreach ($infoarray as $infor) {
?>
<option value="<?php echo $infor['Dept_id']; ?>"><?php echo $infor['Dept_name']; ?></option>
<?php 
		}
?>
</select>
</div>
 <div class="form-group">
<select name="Student-list" id="Student-list" class="form-control"  onChange="getstudent(this.value);" required>
<option value="">SELECT Student</option>

</select>
            </div>

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
function getstudent(val) {
	$.ajax({
	type: "POST",
	url: "get_student.php",
	data:'dept_id='+val,
	success: function(data){
		
		$("#Student-list").html(data);
	}
	});
}

</script>


</body>
</html>