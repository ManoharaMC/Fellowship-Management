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
include('db.php');
if(isset($_POST['btn-save'])){
	
	
if($_POST['UserType']==2){
	$email=$_POST['Username'];
	$passwd=$_POST['passwd'];
	$sel = "SELECT `Stud_id` FROM `student` WHERE `Email-id`='$email' and `Password`='$passwd'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		
		session_start();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		 $_SESSION['Suser']=$row['Stud_id'];
		}
		echo "<script>window.location.assign('Student_Stepone.php')</script>";
		
	}
	
	
	
}	
else if($_POST['UserType']==3){
	$email=$_POST['Username'];
	$passwd=$_POST['passwd'];
	$sel = "SELECT Emp_id, Emp_name Password FROM faculty WHERE emp_email='$email' and Password='$passwd'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		
		session_start();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		 $_SESSION['fuser']=$row['Emp_id'];
		}
		echo "<script>window.location.assign('Guide_approve.php')</script>";
		
	}
	
	
	
}	

else if($_POST['UserType']==1){
	$email=$_POST['Username'];
	$passwd=$_POST['passwd'];
	$sel = "SELECT m.Emp_id, c.Dept_id FROM faculty m inner join chairman c on m.Emp_id=c.Emp_id WHERE  m.emp_email='$email' and m.Password='$passwd'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		
		session_start();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		 $_SESSION['duser']=$row['Emp_id'];
		 		 $_SESSION['dept']=$row['Dept_id'];
		}
		echo "<script>window.location.assign('Dept_approve.php')</script>";
		
	}
	
	
	
}


else if($_POST['UserType']==4){
	$email=$_POST['Username'];
	$passwd=$_POST['passwd'];
	$sel = "SELECT admin_id, Name, email, passwd FROM tbl_admin WHERE email='$email' and passwd='$passwd'";
	
	$result=mysqli_query($con,$sel);
	
	if(mysqli_affected_rows($con)==1){
		
		session_start();
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		 $_SESSION['auser']=$row['admin_id'];
		 		
		}
		echo "<script>window.location.assign('reg_stu.php')</script>";
		
	}
	
	
	
}
			
else {
	
	echo "<script>alert('Invalid Deatils');</script>";
	
	
}	
}
?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data">
      
        <center><h2 class="form-signin-heading">Login!</h2></center>
<hr />
       <b> 
        <div id="error">
            </div>
 <div class="form-group">
		<div class="form-group">
                <input type="email" class="form-control" placeholder="email id" name="Username" id="Username" required />
            </div>
			
			<div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="passwd" id="Password" required />
            </div>		
			<div class="form-group" >
			<select name="UserType" id="UserType" class="form-control" required>
				<option value="">Select User</option>
				<option value="1">CHAIRMEN</option>
				<option value="2">SCHOLAR</option>
				<option value="3">GUIDE</option>
				<option value="4">ADMIN</option>
			</select>
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

</script>


</body>
</html>