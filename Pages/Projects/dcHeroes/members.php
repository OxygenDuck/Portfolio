<?php
  if (isset($_GET["TeamId"])) {
    $team = $_GET["TeamId"];
  }
  else {
    $team = 1;
  }

  $oddCards = 1;

  foreach ($heroes as $value) {
    if ($value["TeamId"] == $team) {
      echo '<div class="heroCard"';
      if ($oddCards == -1) {
        echo 'id="oddCard"';
      }
      echo    '>
              <img class="cardImg" src="Media/Images/Heroes/' . $value["Image"] . '.png" alt="hero">
              <div class="cardText">
                <h2 class="heroName">' . $value["Name"] . '</h2>
                <p class="heroDesc">' . $value["Description"] . '</p>
                <a href="index.php?TeamId=' . $value["TeamId"] . '&Hero=' . $value["Id"] . '" class="heroLink">Click for more Info</a>
                </div>
              </div>';
      $oddCards *= -1;
    }
  }
 ?>
