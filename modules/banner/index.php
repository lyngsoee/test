<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 29-04-2018
 * Time: 19:29
 */

function randomImg() {


    // Links to images
    $img = array(
        "https://cn.pling.com/img/d/4/2/8/79779577f314302bbd285e2f858754ea0f04.jpg",
        "https://static.pexels.com/photos/490411/pexels-photo-490411.jpeg",
        "https://www.walldevil.com/wallpapers/a89/city-california-traffic-road.jpg  ",
    );

    // Counting images
    $count    = count($img);

    // Picking random number
    $rand     = rand(0, $count-1);

    // Choosing image
    $result   = $img[$rand];

    // Returning result
    return $result;
}

?>

<div class="header">

    <div class="logo" style="background-image: url('<?php echo randomImg() ?>')">

    </div>

    <div class="container">

        <div class="row justify-content-center">


            <!-- left side of header - search area -->
            <div class=" col-sm-8 search">

                <form method="post">

                    <!-- Headline and sub headline -->
                    <h1>Find kørerlærer i hele danmark</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pharetra, ipsum non </p>


                    <!-- Input for driver teacher -->
                    <input class="driver" type="text" name="driver" placeholder="Søg på kørelærer..." />



                    <!-- Filters -->


                    <!-- First row - labels for inputs in second -->
                    <div class="row">
                        <div class="col-6">
                            <label for="zip">Postnummer</label>
                        </div>
                        <div class="col-4">
                            <label for="radius">Radius</label>
                        </div>
                    </div>


                    <!-- Second row - input for zip-code and radius around it -->
                    <div class="row">
                        <div class="col-6">
                            <input class="filter" type="text" id="zip" maxlength="4" name="zip" placeholder="Postnummer" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                        </div>
                        <div class="col-6">
                            <input class="test" placeholder="Radius" name="radius" type="text" id="radius" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            <div class="test-icon">Km</div>
                        </div>
                        <!-- <div class="col-6">
                          <input class="filter" type="text" id="radius" name="radius" placeholder="Radius" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                        </div> -->
                    </div>

                    <!-- Third row - label for price -->
                    <div class="row">
                        <div class="col-6">
                            <label for="min">Prilejde</label>
                        </div>
                    </div>

                    <!-- Fourth row - input for price -->
                    <div class="row">
                        <div class="col-6">
                            <input class="test" placeholder="Min pris" name="min" type="text" id="min" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            <div class="test-icon">Kr</div>
                        </div>
                        <div class="col-6">
                            <input class="test" placeholder="Maks pris" name="max" type="text" id="max" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            <div class="test-icon">Kr</div>
                        </div>
                    </div>

                    <!-- Fifth row - submit button to send values -->
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" class="send" name="send" value="Søg" />
                        </div>
                    </div>

                    <?php

                    // Checking if someone pressed the button
                    if(isset($_POST['send'])) {

                        // Tjekker om alle felter er tomme
                        // if - then display error
                        // Else - then redirect to search page with credentials
                        if(empty($_POST['driver']) && empty($_POST['zip']) && empty($_POST['radius']) && empty($_POST['min']) && empty($_POST['max'])) {

                            // HTML for error message
                            echo
                            "
                  <div class='searchError'>
                  <div class='triangle1'></div>
                  <div class='triangle'></div>
                    <p>Udfyld midnst et felt!</p>
                  </div>
                ";

                        }else {

                            // Search data
                            $driver       = $_POST['driver'];
                            $zip          = $_POST['zip'];
                            $radius       = $_POST['radius'];
                            $min          = $_POST['min'];
                            $max          = $_POST['max'];

                            // Empty variable for storing data
                            $search_path  = "";

                            // Checking which inputs are empty and which arent
                            // Constructing a search query for url
                            if(!empty($driver)) {
                                if(!empty($search_path)) $search_path .= "&";
                                $search_path .= "driver=".$driver;
                            }
                            if(!empty($zip)) {
                                if(!empty($search_path)) $search_path .= "&";
                                $search_path .= "zip=".$zip;
                            }
                            if(!empty($radius)) {
                                if(!empty($search_path)) $search_path .= "&";
                                $search_path .= "radius=".$radius;
                            }
                            if(!empty($min)) {
                                if(!empty($search_path)) $search_path .= "&";
                                $search_path .= "min=".$min;
                            }
                            if(!empty($max)) {
                                if(!empty($search_path)) $search_path .= "&";
                                $search_path .= "max=".$max;
                            }

                            // Redirecting to the search path
                            echo "<script type='text/javascript'>window.location.href = 'http://pearlnicklas.dk/index.php?page=search&".$search_path."';</script>";
                        }

                    }

                    ?>

                </form>


            </div>
            <!-- Buffer - 1 collum -->
            <div class="col-1"></div>

            <!-- Right side of the header - ad area -->
            <div class="col-6 ad">


            </div>

        </div>

    </div>

</div>
