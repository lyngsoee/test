<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 30-04-2018
 * Time: 07:33
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "tutors";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

