<?php
$servername = "localhost";
$username = "root";
// $password = ""; if you dont have any password
$password = "belcaid";
$dbname = "gestion_reservations";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";










?>