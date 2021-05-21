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





?>

<!--<div >
</div>-->


	<div class="container">

   
      
      
        <center><h2 class="form-signin-heading">Fellowship Reports</h2></center>
<hr />
       <b> 
	   
	   <div class="form-group">
	<div class="form-group" >
	<select name="rrd" id="rrd" class="form-control" onchange="get_reqdet(this.value);">
    <option value="">Select Responder</option>
    <?php
	
	$sel = "SELECT `req_id`, `Responder` FROM `tbl_req`";
	
	$result=mysqli_query($con,$sel);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<option value=".$row['req_id'].">REPORTS WITH - ".$row['Responder']."</option>";
	}
	 ?>
    </select>
	</div>
	</div>
	
	   
        <div id="error">
            </div>
 
     
	 </div>
</div>
   
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
function get_reqdet(val) {
	$.ajax({
	type: "POST",
	url: "get_rep.php",
	data:'res_id='+val,
	success: function(data){
		
		$("#error").html(data);
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