<?php
  //Variable
  $review = $_POST["comment"];
  $hero = $_POST["Hero"];
  $team = $_POST["Team"];

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

  $query = "INSERT INTO comments(CommentId, HeroId, Comment) VALUES(null, $hero,'$review');";
  //get the data from the database
  $result = $connect->query($query);

  mysqli_close($connect);

  header("Location: index.php?Team=$team&Hero=$hero");
 ?>
