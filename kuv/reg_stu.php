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
include('dbconfig.php');
include('menu.html');
?>

<!--<div >
</div>-->


	<div class="container">

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data">
      
        <h2 class="form-signin-heading">Register Scholar</h2>
<hr />
       <b> 
        <div id="error">
            </div>
 <div class="form-group">
		<div class="form-group">
                <input type="text" class="form-control" placeholder="Student Registration Number" name="stu_id" id="stu_id"  required />
            </div>
			
			<div class="form-group">
                <input type="text" class="form-control" placeholder="Student Name" name="stu_name" id="stu_name" required />
            </div>		
			<div class="form-group">
                <input type="email" class="form-control" placeholder="Student email" name="stu_mail" id="stu_mail" required />
            </div>	
			<div class="form-group">
                <input type="text" class="form-control" placeholder="Student Mobile Number" name="stu_num" id="stu_num" required  />
            </div>	
               <div class="form-group" >
		
            <select name="Dept_id" id="Dept_id" class="form-control" onChange="getguide(this.value);" required>
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
<select name="Guide-list" id="Guide-list" class="form-control"  required  >
<option value="">SELECT GUIDE</option>

</select>
            </div>

<div class="form-group">
<textarea name="topic" id="topic" class="form-control" placeholder="Research Title"></textarea>

</div>


              <div class="form-group" >
		
            <select name="Cat_id" id="Cat_id" class="form-control"  required>
	    <option value="">SELECT CATEGORY</option>
		<option value="1">SC</option>
		<option value="2">ST</option>
		<option value="3">OBC</option>
		<option value="4">GM</option>
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
<?php 
include_once("db.php");
if(isset($_POST['btn-save'])){
	//$pass_wd=rand();
	$pass_wd='1234';
	$user=$_SESSION['auser'];

$insert= "INSERT INTO `student`(`Stud_id`, `Stud_name`, `Email-id`, `Contact_Number`, `Dept_id`, `Guid_id`, `Topic`, `Fello_category`, `Password`, `user`) VALUES('".$_POST['stu_id']."','".$_POST['stu_name']."','".$_POST['stu_mail']."','".$_POST['stu_num']."','".$_POST['Dept_id']."','".$_POST['Guide-list']."','".$_POST['topic']."','".$_POST['Cat_id']."','".$pass_wd."','".$user."')";
//print_r($insert);
mysqli_query($con,$insert);
	if(mysqli_affected_rows($con)>0) {
		echo "<script>alert('Student Registered'); location(href='scholar_app.php');</script>";
		header('location:scholar_app.php');
	}
	else {
		echo "<script>alert('Failed');</script>";
    }
	}
?>
 


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