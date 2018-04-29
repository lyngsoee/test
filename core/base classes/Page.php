<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 25-04-2018
 * Time: 12:03
 */


class Page {

    protected $content; // PageContent
    protected $title;    // String

    function __construct($_title) {
        $_title = strtolower($_title);
        if (!file_exists("../layouts/$_title.json")) {
            $_title = "home";
        }
        $this->title = $_title;

        $this->content = new PageContent($this->title);
    }

    public function Display() {
        include "../templates/$this->title.php";
    }

    public function Title() {
        return $this->title;
    }

    public function Content() {
        return $this->content;
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



