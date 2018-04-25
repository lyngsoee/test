<?php


// Function to generate random image for header
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
