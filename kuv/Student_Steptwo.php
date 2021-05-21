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
?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data">
      
        <center><h2 class="form-signin-heading">Attendence</h2></center>
<hr />
       <b> 
        <div id="error">
            </div>
  <div class="form-group">
	<div class="form-group" >
	<select name="prd" id="prd" class="form-control" onchange="get_attend(this.value);">
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
	<div id="attend">
	
	
	</div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
			</button> 
		</div>  
     </form>
	 </div>
	 <?php 
	 
include_once("db.php");
if(isset($_POST['btn-save'])){
$f_if=$_POST['prd'];

$one=$_POST['one'];
$two=$_POST['two'];
$three=$_POST['three'];
$four=$_POST['four'];
$five=$_POST['five'];
$six=$_POST['six'];
$seven=$_POST['seven'];
$eight=$_POST['eight'];
$nine=$_POST['nine'];
$ten=$_POST['ten'];
$eleven=$_POST['eleven'];
$twelve=$_POST['twelve'];
$thirteen=$_POST['thirteen'];
$fourteen=$_POST['fourteen'];
$fifteen=$_POST['fifteen'];
$sixteen=$_POST['sixteen'];
$seventeen=$_POST['seventeen'];
$eighteen=$_POST['eighteen'];
$nineteen=$_POST['nineteen'];
$twenty=$_POST['twenty'];
$twenty_one=$_POST['twenty_one'];
$twenty_two=$_POST['twenty_two'];
$twenty_three=$_POST['twenty_three'];
$twenty_four=$_POST['twenty_four'];
$twenty_five=$_POST['twenty_five'];
$twenty_six=$_POST['twenty_six'];
$twenty_seven=$_POST['twenty_seven'];
$twenty_eight=$_POST['twenty_eight'];
$twenty_nine=$_POST['twenty_nine'];
$thirty=$_POST['thirty'];
$thirty_one=$_POST['thirty_one'];
















$sel = "SELECT `fel_id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twenty_one`, `twenty_two`, `twenty_three`, `twenty_four`, `twenty_five`, `twenty_six`, `twenty_seven`, `twenty_eight`, `twenty_nine`, `thirty`, `thirty_one`, `update_date` FROM `attendence` WHERE fel_id='$f_if'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		
		
	$updt ="UPDATE `attendence` SET `one`='$one',`two`='$two',`three`='$three',`four`='$four',`five`='$five',`six`='$six',`seven`='$seven',`eight`='$eight',`nine`='$nine',`ten`='$ten',`eleven`='$eleven',`twelve`='$twelve',`thirteen`='$thirteen',`fourteen`='$fourteen',`fifteen`='$fifteen',`sixteen`='$sixteen',`seventeen`='$seventeen',`eighteen`='$eighteen',`nineteen`='$nineteen',`twenty`='$twenty',`twenty_one`='$twenty_one',`twenty_two`='$twenty_two',`twenty_three`='$twenty_three',`twenty_four`='$twenty_four',`twenty_five`='$twenty_five',`twenty_six`='$twenty_six',`twenty_seven`='$twenty_seven',`twenty_eight`='$twenty_eight',`twenty_nine`='$twenty_nine',`thirty`='$thirty',`thirty_one`='$thirty_one' WHERE fel_id='$f_if'";
		
	mysqli_query($con,$updt);
	echo "<script>alert('Attendence Modified Successfully');</script>";	
	}
	else {
	$ins ="INSERT INTO `attendence`(`fel_id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twenty_one`, `twenty_two`, `twenty_three`, `twenty_four`, `twenty_five`, `twenty_six`, `twenty_seven`, `twenty_eight`, `twenty_nine`, `thirty`, `thirty_one`) VALUES ('$f_if','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen','$fifteen','$sixteen','$seventeen','$eighteen','$nineteen','$twenty','$twenty_one','$twenty_two','$twenty_three','$twenty_four','$twenty_five','$twenty_six','$twenty_seven','$twenty_eight','$twenty_nine','$thirty','$thirty_one')";	
	mysqli_query($con,$ins);
	echo "<script>alert('Attendence Saved Successfully');</script>";	
		
	}
	}
?>
</div>
<script>
function get_attend(val) {
	
	$.ajax({
	type: "POST",
	url: "get_attend.php",
	data:'f_id='+val,
	success: function(data){
		
		$("#attend").html(data);
	}
	});
}
</script>
</body>
</html>