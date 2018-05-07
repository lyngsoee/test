<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 07:33
 */


$database = new Database();

$n1 = $database->TutorWithID(0);
var_dump(new Tutor($n1));
//$n2 = $database->TutorWithID(1);

