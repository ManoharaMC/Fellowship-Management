<?php 
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fellowship1');
// ... 
	if (isset($_POST['login_user'])) {
  $Stud_name = mysqli_real_escape_string($db, $_POST['Stud_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($Stud_name)) {
  	array_push($errors, "Student name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
	
	if (count($errors) == 0) {
  	$query = "SELECT * FROM student WHERE Stud_name='$Stud_name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) 
	{
  	  $_SESSION['studentname'] = $Stud_name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: sucess.html');
  	}
	else 
	{
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>

