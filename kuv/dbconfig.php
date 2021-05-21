<?php
/*$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "fellowship1";*/
	
ini_set('error_reporting',0);
$host="localhost";
$user="root";
$password="";
$db="fellowship1";
	try
	{
		$db_con = new PDO("mysql:host={$host};dbname={$db}",$user,$password);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
//$con=mysqli_connect($host,$user,$password,$db);
?>