<?php
$servername = "nilam";
$username = "nilam";
$password = "";
$dbname = "Admission";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>