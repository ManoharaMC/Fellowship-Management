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
	
	

	$email=$_SESSION['auser'];
	$passwd=$_POST['opasswd'];
	$npasswd=$_POST['npasswd'];
	$sel = "SELECT `admin_id`, `Name`, `email`, `passwd` FROM `tbl_admin` WHERE admin_id='$email' and passwd='$passwd'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		
		$ins = "UPDATE tbl_admin SET passwd='$npasswd' WHERE `admin_id`='$email' and `Passwd`='$passwd'";
	
	$result=mysqli_query($con,$ins);
		
		
		echo "<script>alert('Password Changed Successfully')</script>";
		
	}
	
else {
	
	echo "<script>alert('Incorrect Password')</script>";
	
}	
	

	
	
}
?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data">
      
        <center><h2 class="form-signin-heading">Change Password!</h2></center>
<hr />
       <b> 
        <div id="error">
            </div>

			
			<div class="form-group">
                <input type="password" class="form-control" placeholder="Old Password" name="opasswd" id="oPassword" required />
            </div>
			<div class="form-group">
                <input type="password" class="form-control" placeholder="New Password" name="npasswd" id="nPassword" required />
            </div>			
						<div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpasswd" id="cPassword"  required />
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


document.getElementById("cPassword").addEventListener("keyup", function() {
    var p1 = document.getElementById('nPassword').value;
	var p2 = document.getElementById('cPassword').value;
    if (p1== p2) {
        document.getElementById('btn-submit').removeAttribute("disabled");
    } else {
        document.getElementById('btn-submit').setAttribute("disabled", null);
    }
});

</script>


</body>
</html>