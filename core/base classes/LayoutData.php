<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 28-04-2018
 * Time: 09:42
 */


class LayoutData {

    var $template = "home";
    var $jumbotron = ["2","3"];
    var $mainContent = ["1","2"];
    var $lowerContent;
    function __construct($array)
    {
        if ($array != null) {
            $this->template = $array["template"];
            $this->jumbotron = $array["jumbotron"];
            $this->mainContent = $array["mainContent"];
            $this->lowerContent = $array["lowerContent"];
        }
    }

}