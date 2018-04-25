<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 25-04-2018
 * Time: 12:03
 */


class Page {


    protected $pageString;
    protected $dir;

    function __construct($page) {

        if (!file_exists("../views/$page/index.php")) {
            $page = "home";
        }

        $this->dir = "../views/$page/";

        $this->pageString = $page;
    }

    function load() {
        echo "loading " .$this->pageString;
        include_once $this->dir . "index.php";
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

?>



