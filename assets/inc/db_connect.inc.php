<?php

// Start Session for all pages
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

// Database connection
$host = 'localhost';
$user = 'me2083'; 
$pass = 'Hook-nosed1&obduction'; 
$dbname = 'me2083'; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
