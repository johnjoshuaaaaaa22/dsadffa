<?php
$host = "localhost";
$user = "root";  
$pass = "";      
$dbname = "nap_dashboard";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
