<?php
include "connectToDatabase.php";

//Project name
foreach ($projects as $value) {
  echo "<h3 class='projectName'>" . $value['name'] . "</h3>";
}

//Images
foreach ($projects as $value) {
  echo "<img class='mySlides' src='Media/Img/Projects/" . $value['image'] . ".jpg' alt='" . $value['name'] . "'></img>";
}
echo "<button id='sliderLeft' onclick='plusDivs(-1)'>&#10094;</button>
      <button id='sliderRight' onclick='plusDivs(+1)'>&#10095;</button>";

//Description
foreach ($projects as $value) {
  echo "<p class='projectInfo'>" . $value['description'] . "</p>";
}

//link
foreach ($projects as $value) {
  echo "<a class='projectLink' href='Pages/Projects/" . $value['image'] . "'>View This Project</a>";
}
 ?>
