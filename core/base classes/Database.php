<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 07:55
 */

class Database {

    protected $host;
    protected $user;
    protected $password;
    protected $name;
    protected $port;

    protected $connection;


    public function __construct()
    {
        $file = "../core/dbSettings.json";
        $rawSettings = file_get_contents($file);
        $jsonSettings = json_decode($rawSettings);
        $this->host     = $jsonSettings->host;
        $this->name     = $jsonSettings->database;
        $this->user     = $jsonSettings->user;
        $this->password = $jsonSettings->password;
        $this->port     = $jsonSettings->port;
        $this->connection = $this->Connection();
    }

    public function Tutors() {
        // Create connection
        $conn = $this->connection;

        $sql = "SELECT * FROM tutors WHERE 1";
        $result = $conn->query($sql)->fetch_all();

        $i = 0;
        $tutors = null;
        foreach ($result as $val) {
            $tutors[$i] = new Tutor($val);
            $i++;
        }

        return $tutors;
    }

    public function TutorWithID($id) {
        // Create connection
        $conn = $this->connection;

        $sql = "SELECT * FROM tutors WHERE id = '$id'";
        $result = $conn->query($sql)->fetch_assoc();

        return new Tutor($result);
    }


    private function Connection() {
        // Create connection
        $conn = new mysqli($this->host, $this->user, $this->password,$this->name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}