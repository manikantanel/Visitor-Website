<?php
$host = 'localhost';
$user = 'me2083'; 
$pass = 'Hook-nosed1&obduction'; 
$dbname = 'me2083'; 

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
