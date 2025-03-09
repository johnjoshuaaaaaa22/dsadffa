<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $url = $_POST['url'];
    $description = $_POST['description'];
    $logo = $_FILES['logo'];

    $targetDir = "uploads/";
    $logoName = basename($logo["name"]);
    $targetFilePath = $targetDir . $logoName;
    move_uploaded_file($logo["tmp_name"], $targetFilePath);

    $sql = "INSERT INTO info_systems (title, url, description, logo) 
            VALUES ('$title', '$url', '$description', '$logoName')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Info System added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
