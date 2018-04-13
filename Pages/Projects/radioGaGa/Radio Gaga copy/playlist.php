<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Radio Gaga - Playlist</title>
    <link rel="stylesheet" href="css/main.css">

    <!--Get the PHP-->
    <div class="phpHide">
     <?php include 'array.php' ;?>
    </div>
  </head>
  <body>
    <script src="Javascript/scripts.js"></script>
    <?php include 'header.php';?>
    <div class="collection">
      <div id="albums">
        <ul>
          <li><img onclick="album1()" src="Media/Images/HollowKnightAlbum.jpg" alt="Hollow Knight OST"></li>
          <li><img onclick="album2()" src="Media/Images/LazyTownAlbum.jpg" alt="Lazy Town"></li>
          <li><img onclick="album3()" src="Media/Images/RockOfAges2Album.jpg" alt="Rock of Ages 2 OST"></li>
        </ul>
      </div>
      <div id="media">
        <h1 id="title">Title</h1>
        <h2 id="artist">Artist</h2>
        <h2 id="year">Year</h2>
        <h3 id="pictureName">Picture Name</h3>
        <!--Video-->
        <video id="video" src="Media/Movies/HollowKnightMainTheme.mp4" controls width="100%" poster="Media/Images/HollowKnightPoster.jpg"></video>
        <!--Table-->
        <table>
          <thead>
            <tr>
              <th>TRACK</th>
              <th>TITLE</th>
              <th>TIME</th>
              <th>PLAY</th>
              <th>DOWNLOAD</th>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i=1, $j=0; $i < 4; $i++, $j++) {
                echo "<tr>
                  <td align='center'>$i</td>
                  <td align='center' id='tableSongName$j'>". $album[0][3][$j] ."</td>
                  <td align='center' id='tableTime$j'>". $album[0][4][$j] ."</td>
                  <td align='center' align='center' class='play'><button type='button' class='playBttn' onclick='playSong$i()' name='button'>Play</button></td>
                  <td align='center'><a id='download$j' class='download' href='Media/Songs/EnterHallownest.mp3' download><img src='Media/Images/download.png' alt='download'></a></td>
                  </tr>";
                }
                ?>
          </tbody>
       </table>
        <!--audio-->
        <audio id="song" src="Media/Songs/EnterHallownest.mp3" controls></audio>
      </div>
      <div id="clearfix"></div>
    </div>
  </body>
</html>

<script type="text/javascript">
  album1();
</script>
