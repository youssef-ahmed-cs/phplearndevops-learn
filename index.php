<?php
header('Content-Type: application/json');

$user_data = [
    "status" => "success",
    "user" => [
        "id" => 101,
        "role" => "admin",
        "name" => "Youssef Ahmed",
        "age" => 23
    ]
];

echo json_encode($user_data);
?>
