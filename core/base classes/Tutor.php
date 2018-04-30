<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 08:43
 */


class Tutor {

    var $coordinates;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        $searchAddress = $this->address . " " . $this->address_number . " " . $this->zip_code . " Denmark";

        $this->coordinates = Geocode::Coordinates($searchAddress);

    }


    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
}