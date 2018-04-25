<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 25-04-2018
 * Time: 12:06
 */

require_once '../core/base classes/page.php' ;

if (isset($_GET["page"]))
    $pageString = $_GET["page"];
else
    $pageString = "home";

$page = new Page($pageString);

echo $page->__get("pageString")
?>

<!DOCTYPE HTML>

<html>

<head>

    <!-- Page title -->
    <title>kørestole</title>

    <!-- Bootstrap required tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link to bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Lionk to bootstrap JS -->


    <!-- Link to default css -->
    <link rel="stylesheet" type="text/css" href="css/default.css">

    <!-- Link to specific stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/costum/<?php echo $page->__get("pageString").".css" ?>">


</head>

<body>

<?php
$page->load();
?>

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
