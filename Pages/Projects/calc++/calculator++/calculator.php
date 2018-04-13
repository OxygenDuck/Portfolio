<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculator ++</title>
    <link rel="stylesheet" href="css/main.css">
    <!--Scripts-->
    <script type="text/javascript">
    // Disable Second Field
      function disableField() {
        if (document.getElementById('calcu').selectedIndex >= 5) {
          document.getElementById('second').disabled = true;
        }
        else {
          document.getElementById('second').disabled = false;
        }
      }

    //Slider Number
    function changeNumber() {
      var sliderValue = document.getElementById('decimals').value;
      document.getElementById('decimalsNumber').innerHTML = sliderValue;
    }

    //Open or Close log
    function toggleLog() {
      if (document.getElementById('log').style.display == 'none') {
      document.getElementById('log').style.display = 'block';
      document.getElementById('showLogBttn').textContent = 'Hide Log';
      }
      else {
        document.getElementById('log').style.display = 'none';
        document.getElementById('showLogBttn').textContent = 'Show Log';
      }
    }
    </script>

    <!--Log Variable Storage-->
    <?php
    session_start();
    if (isset($_GET["number1"])) {
      include 'calculate.php'; include 'log.php';
    }
    ?>

  </head>

  <body>
    <!--top-->
    <div class="top">
      <div class="header">
        <h1>Calculator ++</h1>
      </div>
    </div>
    <!--Field of Content-->
    <div class="input">
      <!--result-->
      <div class="result">
        <?php
        if (isset($_GET["calcuType"])) {
          include 'calculate.php';
        }
        else {$result = 0;}
        print $result;
        ?>
      </div>
      <!--Input Form-->
      <form action="calculator.php" method="get">
        <!--First Number-->
        <div class="inputField">
          <p>First Number</p>
          <input type="text" name="number1" value="" required>
        </div>
        <!--Calculation Type-->
        <div class="inputField">
          <p>Type of Calculation</p>
          <select id="calcu" class="calcuType" name="calcuType" onchange="disableField()">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="power">^</option>
            <option value="root">√</option>
            <option value="kmToMile">Kilometre to Mile</option>
            <option value="mileToKm">Mile to Kilometre</option>
          </select>
        </div>
        <!--Second Number-->
        <div class="inputField">
          <p>Second Number</p>
          <input id="second" type="text" name="number2" value="" required>
        </div>
        <!--Slider-->
        <p>Decimals:</p>
        <p id="decimalsNumber">5</p>
        <input type="range" id="decimals" name="decimals" value="5" min="0" max="10" onchange="changeNumber()">
        <!--Submit Button-->
        <input type="submit" value="Submit">
        <!--Reset Button-->
        <input type="reset" value="Reset">
      </form>
    </div>
    <!--Log-->
    <div class="showLogBttn">
      <button type="button" id="showLogBttn" name="showLogBttn" onclick="toggleLog()">Show Log</button>
    </div>
    <div id="log">
      <?php
      if (isset($_SESSION["logLine1"]) && $_SESSION["logLine1"] != "") {
      echo '<p>' . $_SESSION["logLine1"] . '</p>';
      if (isset($_SESSION["logLine2"])) {
        echo '<p><br />' . $_SESSION["logLine2"] . '</p>';
      }
      if (isset($_SESSION["logLine3"])) {
        echo '<p><br />' . $_SESSION["logLine3"] . '</p>';
      }
      if (isset($_SESSION["logLine4"])) {
        echo '<p><br />' . $_SESSION["logLine4"] . '</p>';
      }
      if (isset($_SESSION["logLine5"])) {
        echo '<p><br />' . $_SESSION["logLine5"] . '</p>';
      }
      }
      else {
      echo 'Nothing has been calculated yet';
      }
       ?>
    </div>
  </body>
</html>
