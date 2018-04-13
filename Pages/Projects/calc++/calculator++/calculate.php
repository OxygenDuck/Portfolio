<?php
  # Warning Checker
  if ($_GET["calcuType"] == 'divide' && ($_GET["number1"] == 0 || $_GET["number2"] == 0)) {
    $result = 'Can not Divide by 0';
  }

  # Normal Calculation
if (!isset($result)) {
switch ($_GET["calcuType"]) {
  case 'plus':
    $result = $_GET["number1"] + $_GET["number2"];
      break;
  case 'minus':
    $result = $_GET["number1"] - $_GET["number2"];
      break;
  case 'multiply':
    $result = $_GET["number1"] * $_GET["number2"];
      break;
  case 'divide':
    $result = $_GET["number1"] / $_GET["number2"];
      break;
  case 'power':
    $result = $_GET["number1"] ** $_GET["number2"];
      break;
  case 'root':
    $result = sqrt($_GET["number1"]);
      break;
  case 'mileToKm':
    $result = $_GET["number1"] * 1.609344;
      break;
  case 'kmToMile':
    $result = $_GET["number1"] * 0.621371192;
      break;
  }
  if (isset($_GET["decimals"])) {
    $result = round($result,$_GET["decimals"],PHP_ROUND_HALF_UP);
  }
}
?>
