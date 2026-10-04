<?php
header('Content-Type: application/json');

$user_data = [
    "status" => "success",
    "user" => [
        "id" => 101,
        "role" => "admin"
    ]
];

echo json_encode($user_data);
?>
