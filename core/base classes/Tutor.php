<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 08:43
 */


class Tutor {


    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }

        var_dump($this);
        if (strlen($this->latitude) == 0) {
            echo "Not set";
            $this->SetCoordinates();
        }


    }

    public function SetCoordinates() {

        $searchAddress = $this->address . " " . $this->address_number . " " . $this->zip_code . " Denmark";
        $coordinates = Geocode::Coordinates($searchAddress);
        $id = $this->i;
        $id = $this->id;
        var_dump($id);
        $sql = "UPDATE tutors SET latitude='$coordinates[0]', longitude='$coordinates[1]' WHERE id='$id'";
        var_dump($sql);
        $result = (new Database())->GetConnection()->query($sql);
        if (!$result) {
            throw new Exception("Could not add coordinates");
        }
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
}