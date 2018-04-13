<?php
if (isset($_GET["number1"])) {

  #Set the right symbol
  $symbol = "";
  switch ($_GET["calcuType"]) {
    case 'plus':
      $symbol = '+';
    break;
    case 'minus':
      $symbol = '-';
    break;
    case 'multiply':
      $symbol = '*';
    break;
    case 'divide':
      $symbol = '/';
    break;
    case 'power':
      $symbol = '^';
    break;
    case 'root':
      $symbol = '√';
    break;
    case 'kmToMile':
      $symbol = ' Converted from KM to Mile ';
    break;
    case 'mileToKm':
      $symbol = ' Converted from Mile to KM ';
    break;
  }

  #Get the Log Lines
  if (isset($_SESSION["logLine4"])) {
    $_SESSION["logLine5"] = $_SESSION["logLine4"];
  }
  else {
    $_SESSION["logLine5"] = "";
  }
  if (isset($_SESSION["logLine3"])) {
    $_SESSION["logLine4"] = $_SESSION["logLine3"];
  }
  else {
    $_SESSION["logLine4"] = "";
  }
  if (isset($_SESSION["logLine2"])) {
    $_SESSION["logLine3"] = $_SESSION["logLine2"];
  }
  else {
    $_SESSION["logLine3"] = "";
  }
  if (isset($_SESSION["logLine1"])) {
    $_SESSION["logLine2"] = $_SESSION["logLine1"];
  }
  else {
    $_SESSION["logLine2"] = "";
  }

  //Get the Correct line

  $_SESSION["logLine1"] = "";
  switch ($_GET["calcuType"]) {
    case 'root':
      $_SESSION["logLine1"] = $symbol . $_GET["number1"] . " = " . $result;
    break;
    case 'kmToMile':
      $_SESSION["logLine1"] = $_GET["number1"] . $symbol . " = " . $result . " Miles";
    break;
    case 'mileToKm':
      $_SESSION["logLine1"] = $_GET["number1"] . $symbol . " = " . $result . "km";
    break;

    default:
      $_SESSION["logLine1"] = $_GET["number1"] . " " . $symbol . " " . $_GET["number2"] . ' = ' . $result;
    break;
  }
}
 ?>
