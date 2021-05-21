<html>

<style>
<table>

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<<!!?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("smart", $con);

 

$result = mysql_query("SELECT * FROM Form");

 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>Mobile</th>

<th>email</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>

</body>

