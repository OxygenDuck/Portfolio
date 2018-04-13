<?php
include "connectToDatabase.php";

//Project name
foreach ($projects as $value) {
  echo "<h3 class='projectName'>" . $value['name'] . "</h3>";
}

//Images
echo "<div id='sliderContainer' onload='getHeight()'>";

foreach ($projects as $value) {
  echo "<img class='mySlides' src='Media/Img/Projects/" . $value['image'] . ".jpg' alt='" . $value['name'] . "'></img>";
}
echo "<button class='sliderButton' id='sliderLeft' onclick='plusDivs(-1)'>&#10094;</button>
      <button class='sliderButton' id='sliderRight' onclick='plusDivs(+1)'>&#10095;</button>
      </div>";

//Description
foreach ($projects as $value) {
  echo "<p class='projectInfo'>" . $value['description'] . "</p>";
}

//link
foreach ($projects as $value) {
  echo "<a class='projectLink externalLink' href='Pages/Projects/" . $value['image'] . "'>View This Project</a>";
}
 ?>
