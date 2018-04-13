<?php
  #dimention1 = (Album name, Artist, Year, Songnames, Songlengths, AlbumPictureName;)
  $album = array(0,1,2);
  //Hollow Knight
  $album[0] = array("Hollow Knight OST","Christopher Larkin - Team Cherry", "2017", "", "", "Hollow Knight Album");
  $album[0][3] = array("Enter Hallownest","Greenpath","City Of Tears");
  $album[0][4] = array("1:29","2:28","2:58");
  //Lazy Town
  $album[1] = array("Lazy Town","Lazy Town", "2005", "", "", "Lazy Town Album");
  $album[1][3] = array("You are a Pirate","Cooking by the Book","The Mine Song");
  $album[1][4] = array("1:54","1:39","0:59");
  //Rock of Ages 2
  $album[2] = array("Rock of Ages 2 OST","ACE Team - Atlus", "2017", "", "", "Rock of Ages 2 Album");
  $album[2][3] = array("How to Train your Boulder","Impressionist Fields","Towers of Eden");
  $album[2][4] = array("1:59","1:40","2:16");

  for ($i=0; $i < 3; $i++) {
    //echo the album information
    echo "<div id='title $i'>". $album[$i][0] ."</div>";
    echo "<div id='artist $i'>". $album[$i][1] ."</div>";
    echo "<div id='year $i'>". $album[$i][2] ."</div>";
    echo "<div id='picture $i'>". $album[$i][5] ."</div>";

    //echo the song information
    for ($j=0, $k=1; $j < 4; $j++, $k++) {
      echo "<div id='songName$i$k'>". $album[$i][3][$j] ."</div>";
      echo "<div id='time$i$k'>". $album[$i][4][$j] ."</div>";
    }
  }
 ?>
