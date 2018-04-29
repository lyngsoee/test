<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 29-04-2018
 * Time: 12:10
 */

class Modules {
    static function Load($array) {
        foreach ($array as $index) {
            include_once "../modules/$index/index.php";
        }
    }
}