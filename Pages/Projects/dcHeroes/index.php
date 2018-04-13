<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DC Heroes</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--Header-->
    <?php include 'connectToDatabase.php';
          include 'header.php'; ?>
    <div id="mainPage">
      <!--Navigation-->
      <section id="team-nav">
        <div id="navigation">
          <nav>
            <h2>Teams</h2>
            <ul>
              <?php foreach ($teams as $value) {
                echo "<li><a href='index.php?TeamId=" . $value["TeamId"] . "'>" . $value["Name"] . "</a></li>";
              } ?>
            </ul>
          </nav>
        </div>
      </section>

      <!--Team Members-->
      <section id="team-members">
        <div id="content">
          <?php include 'members.php'; ?>
        </div>
      </section>

      <!--Details-->
      <section id="hero-details">
        <div id="container-hero_description">
          <div id="bannerContainer">
            <img id="banner" src="Media/Images/wallpaper.jpg" alt="banner">
          </div>
          <?php include 'heroPage.php';?>
        </div>
      </section>
      <div style="clear: both;"></div>
    </div>
  </body>
</html>
