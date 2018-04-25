<?php

function getSearchResults($value) {

  // Empty variables to store data
  $driver = "";
  $zip    = "";
  $radius = "";
  $min    = "";
  $max    = "";

  // Checks url if any data is given
  // If data is given - Then store these data i varialbes
  if (isset($_GET['driver'])) {
    $driver .= $_GET['driver'];
  }
  if (isset($_GET['zip'])) {
    $zip .= $_GET['zip'];
  }
  if (isset($_GET['radius'])) {
    $radius .= $_GET['radius'];
  }
  if (isset($_GET['min'])) {
    $min .= $_GET['min'];
  }
  if (isset($_GET['max'])) {
    $max .= $_GET['max'];
  }

  // When calling function determain what data you need
  // Switch to return the needed data
  switch ($value) {
    case 'driver':
      return $driver;
    break;
    case 'zip':
      return $zip;
    break;
    case 'radius':
      return $radius;
    break;
    case 'min':
      return $min;
    break;
    case 'max':
      return $max;
    break;
  }

}
