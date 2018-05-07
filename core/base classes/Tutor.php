<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 08:43
 */


class Tutor {

    // Contains a set of invisible variables. Those are set in the constructor with the parameter $data.
    // The variable names are matches the column titles of the database tutor table. I.e name, id and so on.

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }

        if (strlen($this->latitude) == 0) {
            echo "Not set";
            $this->SetCoordinates();
        }


    }

    private function SetCoordinates() {

        $searchAddress = $this->address . " " . $this->address_number . " " . $this->zip_code . " Denmark";
        $coordinates = Geocode::Coordinates($searchAddress);
        $id = $this->id;
        $sql = "UPDATE tutors SET latitude='$coordinates[0]', longitude='$coordinates[1]' WHERE id='$id'";
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