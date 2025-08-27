<?php
// Show all errors if anything goes wrong
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Database connection
$host = "localhost";
$user = "upknjbhg8vsv8";
$password = "yz88ljtio3sf";
$database = "dbncj3tuxvuqvo";
 
// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}
 
// If you want to test, uncomment below:
// echo "✅ Connected to database!";
?>
 
