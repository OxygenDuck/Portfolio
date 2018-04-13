<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dcheroes";

$connect = mysqli_connect($servername,$username,$password,$dbName);

//see if connection is succesful or not
if (!$connect) {
  die('error connecting to database');
}

//heroes
$query = "SELECT * FROM heroes;";
//get the data from the database
$result = $connect->query($query);

//create the PHP array
$heroes = array();

while ($row = $result->fetch_assoc()) {
  $heroes[] = $row;
}

//Powers
$query = "SELECT * FROM powers;";
//get the data from the database
$result = $connect->query($query);

//create the PHP array
$powers = array();

while ($row = $result->fetch_assoc()) {
  $powers[] = $row;
}

//teams
$query = "SELECT * FROM teams;";
//get the data from the database
$result = $connect->query($query);

//create the PHP array
$teams = array();

while ($row = $result->fetch_assoc()) {
  $teams[] = $row;
}

//comments
$query = "SELECT * FROM comments;";
//get the data from the database
$result = $connect->query($query);

//create the PHP array
$comments = array();

while ($row = $result->fetch_assoc()) {
  $comments[] = $row;
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

//myDump($teams, "Data:");
 ?>
