<?php
header('Content-Type: application/json');

$userProfile = [
    "id" => 1,
    "name" => "Oebanda, Tricia jean ",
    "email" => "oebandatriciajean@gmail.com",
    "status" => "active"
];

echo json_encode($userProfile);
?>
