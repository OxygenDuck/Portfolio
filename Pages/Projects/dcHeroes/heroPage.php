<?php
  if (isset($_GET["Hero"])) {
    $hero = $_GET["Hero"];
  }
  else {
    $hero = 0;
  }

  foreach ($heroes as $value) {
    if ($value["Id"] != $hero) {
      continue;
    }
    echo '<div id="mugshot">
            <a href="Media/Images/Heroes/' . $value["Image"] . '.png"><img src="Media/Images/Heroes/' . $value["Image"] . '.png" alt="mugshot"></a>
          </div>
          <h1 id="heroName">' . $value["Name"] . '</h1>
          <p id="heroDesc">' . $value["Description"] . '</p>
          <h2>Powers</h2>
          <ul>';
          foreach ($powers as $value2) {
            if ($value2["HeroId"] == $hero) {
              echo "<li>" . $value2["Power"] . "</li>";
            }
          } echo '
          </ul>
          <h2>Reviews</h2>
          <p>Write your own comment!</p>
          <form id="makeComment" action="redirect.php" method="post">
            <input id="textfield" required type="text" name="comment" value="">
            <input type="hidden" name="Hero" value="' . $hero . '">
            <input type="hidden" name="Team" value="' . $team . '">
            <input id="submitRating" type="submit" name="Submit" value="Submit">
          </form>';
          foreach ($comments as $value2) {
            if ($value2["HeroId"] == $hero) {
              echo "<p class='comment'>" . $value2["Comment"] . "</p>";
            }
          };
      }

    if ($hero == 0) {
      echo '<img id=mainPageLogo src="Media/Images/Logos/headerlogo.png" alt="DC">
            <h3 id="noHeroPage">Pick some cards to read about some of our awesome heroes!</h3>';
    }
 ?>
