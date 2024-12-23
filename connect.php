<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "cattwo";

// Create a new connection
$conn = new mysqli($hostname, $user, $pass, $db,3307);

// Check connection
if ($conn->connect_error) {
    echo "Failed to connect to the database: " . $conn->connect_error;
} 
return $conn;
?>
