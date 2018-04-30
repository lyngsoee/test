<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 07:33
 */


$database = new Database();

$n1 = $database->TutorWithID(0);

$n2 = $database->TutorWithID(1);

var_dump(Geocode::Distance($n1->coordinates[0],$n1->coordinates[1],$n2->coordinates[0],$n2->coordinates[1],"K"));