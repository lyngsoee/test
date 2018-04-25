<?php


// header("refresh: 5");

// Check what page the user is on
// Load according to page
if(isset($_GET['page'])) {

  // Saving page name
  $page = $_GET['page'];

  // Including file according to page name
  $path = "../views/".$page."/".$page;

  if (file_exists($path.".php")) {

  } else {

    exit;
  }
} else {

  // If no page defined
  // Load frontpage

  $path = "../views/home/home";
  $page = "home";

}
echo "lol";
?>

<!DOCTYPE HTML>

<html>

  <head>

    <!-- Page title -->
    <title><?php echo $page; ?></title>

    <!-- Bootstrap required tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link to bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Lionk to bootstrap JS -->


    <!-- Link to default css -->
    <link rel="stylesheet" type="text/css" href="css/default.css">

    <!-- Link to specific stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/costum/<?php echo $page.".css" ?>">


  </head>

  <body>

    <?php include $path.".php"; ?>


    <!-- Default footer on every page -->
    <div class="footer">

      <div class="container">

        <div class="row">

          <!-- Contact info -->
          <div class="col-5 contactInformation">


            <!-- Rows of information -->
            <!-- Row 1 - Email adress -->
            <div class="row info">
              <div class="col-2">
                <img class="contactImage" src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/81-256.png">
              </div>
              <div class="col-10">
                <p class="contactInfo">
                  Trafikskolen@kontant.dk
                </p>
              </div>
            </div>
            <!-- Row 1 - phone -->
            <div class="row info">
              <div class="col-2">
                <img class="contactImage" src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/81-256.png">
              </div>
              <div class="col-10">
                <p class="contactInfo">
                  5131 5899
                </p>
              </div>
            </div>
            <!-- Row 1 - Location -->
            <div class="row info">
              <div class="col-2">
                <img class="contactImage" src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/81-256.png">
              </div>
              <div class="col-10">
                <p class="contactInfo">
                  8800, Viborg
                </p>
              </div>
            </div>
            <!-- Row 1 - Abaout -->
            <div class="row info">
              <div class="col-2">
                <img class="contactImage" src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/81-256.png">
              </div>
              <div class="col-10">
                <p class="contactInfo">
                  Mændende bag
                </p>
              </div>
            </div>
            <!-- Row 1 - Copyright -->
            <div class="row info">
              <div class="col-2">
                <img class="contactImage" src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/81-256.png">
              </div>
              <div class="col-10">
                <p class="contactInfo">
                  Simon Eliasen & Nicklas Nyrup Lyngsøe
                </p>
              </div>
            </div>


          </div>

          <div class="col-1 spacer">

          </div>
          <div class="col-6">

          </div>

        </div>

      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
