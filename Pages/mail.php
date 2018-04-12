<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$mail = "Name: $name\nPhone Number: $phone\nE-mail: $email\n\n$message";

mail("pcvl.janssen@gmail.com","Contact Form Message",$mail,"From: $email");

header("Location: ../index.php?notification=sent");
 ?>
