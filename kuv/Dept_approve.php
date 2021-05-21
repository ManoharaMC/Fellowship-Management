

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
if(isset($_POST['Approve'])){

$f_if=$_POST['f_id'];


$insert = "UPDATE `tbl_fellowship_metadata` SET Req_with='4' WHERE  fel_id='$f_if'";

mysqli_query($con,$insert);
	if(mysqli_affected_rows($con)>0)
	{
		
		$insert = "INSERT INTO tbl_dept_approve(`fel_id`, `Dept_id`, `Chairman_id`,c_action) VALUES ('$f_if','$dept',$emp_id,'1')";

mysqli_query($con,$insert);
		
		echo "<script>alert('Application Approved Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Problem in Portal Please Contact Admin');</script>";
		
	}
}
if(isset($_POST['Reject'])){


$f_if=$_POST['f_id'];

$insert = "UPDATE `tbl_fellowship_metadata` SET Req_with='2' WHERE  fel_id='$f_if'";

mysqli_query($con,$insert);
	if(mysqli_affected_rows($con)>0)
	{
				$insert = "INSERT INTO tbl_dept_approve(`fel_id`, `Dept_id`, `Chairman_id`,c_action) VALUES ('$f_if','$dept',$emp_id,'0')";

mysqli_query($con,$insert);
		echo "<script>alert('Application Rejected Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Problem in Portal Please Contact Admin');</script>";
		
	}
}


?>

<!--<div >
</div>-->


	<div class="container">

  <div class="form-signin">
       
      
        <center><h2 class="form-signin-heading">Dept Approve</h2></center>
<hr />
       <b> 
        <div id="error">
            </div>
 <div class="form-group">
 <table border=1 width="100%"  style="color: black;">
 <tr><td>Name</td><td>Reg_NO</td><td>Guide</td><td>Period</td><td>App Date</td><td>Response</td></tr>
 <?php
 
 $select = "SELECT fel_id, fellow_id, s.Stud_name,s.Dept_id, f.Emp_name,Fell_time, Req_with, Applied_Date FROM tbl_fellowship_metadata m inner join student s inner join faculty f on m.fellow_id=s.Stud_id and s.Guid_id=f.Emp_id WHERE s.Dept_id='$dept' and m.Req_with='3'";

$result=mysqli_query($con,$select);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	?>
	
 <tr><form name="respon" method="POST" action=""><td><input type="hidden"   name="f_id" value="<?php echo $row['fel_id'] ?>" required  /> <?php echo $row['Stud_name']."</td><td>".$row['fellow_id']."</td><td>".$row['Emp_name']."</td><td>".$row['Fell_time']."</td><td>".$row['Applied_Date']."</td><td>"; ?>
  <button type="submit"  name="Approve" >Approve</button> <button type="submit"  name="Reject" >Reject</button></td></tr></form>
<?php 	
}
?>

			<hr />
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
     
     
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
function func() {
//alert('hai');
var yr=document.getElementById('prd').value;

alert(yr);
}

</script>


</body>
</html>