<?php
include 'db_connect.php';

$sql = "SELECT * FROM info_systems";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
