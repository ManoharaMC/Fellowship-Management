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
<body>
<?php
session_start();

if(!isset($_SESSION['auser'])){
header("Location: login.php");

}

include('db.php');
include('menu.html');
if(isset($_POST['btn-save'])){
include_once("db.php");
$user=$_SESSION['auser'];

$insert = "INSERT INTO `fell_time`(`f_id`, `Month`, `Year`, `user`) values('".$_POST['fl_id']."','".$_POST['month']."','".$_POST['year']."','".$user."')";
mysqli_query($con,$insert);
	if(mysqli_affected_rows($con)>0)
	{
		echo "<script>alert('Application invited Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Application Invited for This Period Already');</script>";
		
	}
}



?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data">
      
        <center><h2 class="form-signin-heading">Fellowship Allow Period</h2></center>
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
		echo "<option value=".$date_str.">".$date_str ."</option>";
	} ?>
    </select>
	</div>
	<div class="form-group" >
	<?php
// set start and end year range
	$yearArray = range(2019, 2030);
	?>
<!-- displaying the dropdown list -->
	<select name="year" id="year" class="form-control" onchange="get_fellowpr()">
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
<input type="hidden" class="form-control" placeholder="Fellowship Period" name="fl_id" id="fl_id"  required  />


</div>
			<hr />
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
			</button> 
		</div>  
     </form>
	 </div>
</div>
   
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
function getguide(val) {
	$.ajax({
	type: "POST",
	url: "get_guide.php",
	data:'dept_id='+val,
	success: function(data){
		
		$("#Guide-list").html(data);
	}
	});
}
function get_fellowpr() {
//alert('hai');
var yr=document.getElementById('year').value;
var mon=document.getElementById('month').value;
document.getElementById('fl_id').value=mon+yr;
alert(mon+'-'+yr);
}

</script>


</body>
</html>