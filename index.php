<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio - Peter Janssen</title>
    <!--Bootstrap & CSS-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <!--Header-->
    <header id="header">
      <h1 class="display-4">Peter Janssen</h1>
      <hr id="headerLine">
      <p>On this website you can find information about Peter Janssen, a seventeen year old IT Student at ROC ter AA. This portfolio will mostly go in dept about his Web-Development progress.</p>
    </header>

    <!--Main Body Container-->
    <div class="container-fluid" id="mainContainer">

    <!--Includes-->
    <?php include "Pages/notification.php";
          include "Pages/about.html";
          include "Pages/Projects/index.php";
          include "Pages/contact.php";?>

    <!--Scripts for bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </div>
  </body>
</html>
