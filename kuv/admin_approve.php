

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


$adm_id=$_SESSION['auser'];



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
			<div id="onx">
 <div class="form-group">
 <table border=1 width="100%"  style="color: black;">
 <tr><td>Name</td><td>Reg_NO</td><td>Guide</td><td>Dept</td><td>Period</td><td>App Date</td><td>Response</td></tr>
 <?php
 
 $select = "SELECT fel_id, fellow_id, s.Stud_name,d.Dept_name, f.Emp_name,Fell_time, Req_with, Applied_Date FROM tbl_fellowship_metadata m inner join student s inner join faculty f inner join department d on m.fellow_id=s.Stud_id and s.Guid_id=f.Emp_id and s.Dept_id=d.Dept_id WHERE m.Req_with='4'";

$result=mysqli_query($con,$select);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	?>
	
 <tr><td><input type="hidden"   name="f_id" id="f_id" value="<?php echo $row['fel_id'] ?>" required  /> <?php echo $row['Stud_name']."</td><td>".$row['fellow_id']."</td><td>".$row['Emp_name']."</td><td>".$row['Dept_name']."</td><td>".$row['Fell_time']."</td><td>".$row['Applied_Date']."</td><td>"; ?>
  <button   name="Approve" id="<?php echo $row['fel_id']; ?> " value="<?php echo $row['fel_id']; ?>" onclick="get_forms(this.value);">Fetch</button></td></tr></form>
<?php 	
}
?>

			<hr />

     
     
	 </div>
</div>
   </div>
           <div id="error">
        <!-- error will be showen here ! -->
        </div>
		
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
function get_forms(id) {
	
	
	$.ajax({
	type: "POST",
	url: "get_forms.php",
	data:'f_id='+id,
	success: function(data){
		
		$("#onx").html(data);
	}
	});
}
function get_bill(id) {
	
	
	$.ajax({
	type: "POST",
	url: "get_bill.php",
	data:'f_id='+id,
	success: function(data){
		
		$("#error").html(data);
	}
	});
}
function get_attend(id) {
	
	
	$.ajax({
	type: "POST",
	url: "get_attends.php",
	data:'f_id='+id,
	success: function(data){
		
		$("#error").html(data);
	}
	});
}
function get_progress(id) {
	
	
	$.ajax({
	type: "POST",
	url: "get_prog.php",
	data:'f_id='+id,
	success: function(data){
		
		$("#error").html(data);
	}
	});
}
function get_accept(id) {
	
	
	$.ajax({
	type: "POST",
	url: "get_per.php",
	data:'f_id='+id,
	success: function(data){
		
		location.reload();
	}
	});
}
function func() {
//alert('hai');
var yr=document.getElementById('prd').value;

alert(yr);
}

function printDiv() {
     var printContents = document.getElementById('error').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>


</body>
</html>