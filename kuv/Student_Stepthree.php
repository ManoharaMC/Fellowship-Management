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
if(!isset($_SESSION['Suser'])){
header("Location: login.php");

}

include('db.php');
include('menu_sch.html');
$suser=$_SESSION['Suser'];
if(isset($_POST['btn-save'])){
$f_if=$_POST['prd'];
$Conference=$_POST['Conference'];
$seminar=$_POST['seminar'];
$paper=$_POST['paper'];
$publish=$_POST['publish'];
$detail_report=$_POST['detail_report'];
$sel = "SELECT `fel_id`, `Conference`, `seminar`, `paper`, `publish`, `detail_report`, `update_date` FROM `progress` WHERE  fel_id='$f_if'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		$updt = "UPDATE `progress` SET `Conference`='$Conference',`seminar`='$seminar',`paper`='$paper',`publish`='$publish',`detail_report`='$detail_report' WHERE `fel_id`='$f_if'";
	
	$result=mysqli_query($con,$updt);
	
	echo "<script>alert('Progress Modified Successfully');</script>";
		

	}
else{
	
	$sel = "INSERT INTO `progress`(`fel_id`, `Conference`, `seminar`, `paper`, `publish`, `detail_report`) VALUES ('$f_if','$Conference','$seminar','$paper','$publish','$detail_report')";
	
	$result=mysqli_query($con,$sel);
	
	echo "<script>alert('Progress saved Successfully');</script>";
	
	
}


}

?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data">
      
        <center><h2 class="form-signin-heading">Progress Report</h2></center>
<hr />
       <b> 
        <div id="error">
            </div>
 <div class="form-group">
	<div class="form-group" >
	<select name="prd" id="prd" class="form-control" onchange="get_progress(this.value);">
    <option value="">Select Period</option>
    <?php
	
	$sel = "SELECT m.fel_id, m.fellow_id, m.Fell_time, m.Req_with, m.Applied_Date FROM tbl_fellowship_metadata m WHERE  m.Req_with='1' and m.fellow_id='$suser'";
	
	$result=mysqli_query($con,$sel);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<option value=".$row['fel_id'].">".$row['Fell_time']."</option>";
	}
	 ?>
    </select>
	</div>
	</div>
	
	<div id="info"></div>

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
function get_progress(val) {
	
	$.ajax({
	type: "POST",
	url: "get_progress.php",
	data:'f_id='+val,
	success: function(data){
		
		$("#info").html(data);
	}
	});
}

</script>


</body>
</html>