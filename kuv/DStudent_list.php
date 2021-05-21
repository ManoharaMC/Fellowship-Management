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
if(!isset($_SESSION['duser'] ) OR !isset($_SESSION['dept'])){
header("Location: login.php");

}
include('db.php');
include('menu_dept.html');

$dept=$_SESSION['dept'];
$emp_id=$_SESSION['duser'];
	$sel = "SELECT `Stud_id`, `Stud_name`, `Email-id`, `Contact_Number`, s.Dept_id, f.Emp_name, `Topic`, `Fello_category`, `user`, `cr_date` FROM student s inner join faculty f on s.Guid_id=f.Emp_id WHERE s.Dept_id='$dept'";
	
	$result=mysqli_query($con,$sel);
	
?>

<!--<div >
</div>-->


	<div class="container" >

   
       <form class="form-signin" id="register-form"  method="post" action=""   enctype="multipart/form-data" >
      
        <center><h2 class="form-signin-heading">Student List</h2></center>
<hr />
       <b> 



<div style="color: black;">
<?php
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
Echo "Name :".$row['Stud_name']."<br>";
Echo "Reg. NO :".$row['Stud_id']."<br>";
Echo "Guide Name :".$row['Emp_name']."<br>";
Echo "Contact :".$row['Contact_Number']."  -  ".$row['Email-id']."<br>";
Echo "Topic  :".$row['Topic']."<br>";
echo "<hr>";
}
?>
 
     </form>
	 </div>
</div>
   
<script src="../bootstrap/js/bootstrap.min.js"></script>



</body>
</html>