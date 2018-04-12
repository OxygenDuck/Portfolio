<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "portfolio";

$connect = mysqli_connect($servername,$username,$password,$dbName);

//see if connection is succesful or not
if (!$connect) {
  die('error connecting to database');
}

//sql
$query = "SELECT * FROM projects;";
//get the data from the database
$result = $connect->query($query);

//create the PHP array
$projects = array();

while ($row = $result->fetch_assoc()) {
  $projects[] = $row;
}

//close the connection to the Database
mysqli_close($connect);

//dump all the data !DEBUG!
function myDump($var, $varname = false)
{
	echo "<pre id=\"dump\">";
	if($varname)
	{
		echo "<h2>" . $varname . "</h2>";
	}
	var_dump($var);
	echo "</pre>";
}

//myDump($items, "Data:");
 ?>
