<?php
header('Content-Type: application/json');

$user_data = [
    "status" => "success",
    "userinfo" => [
        "name" => "Youssef Ahmed",
        "age" => 23,
        "country" => "EG",
        "email" => "yousef.ahmed.dev@outlook.com",
        "phone" => "+20 102 501 5179",
        "profile" => "https://youssef-ahmed.me",
        "education" => "Computers and Artificial Intelligence, Benha University",
        "role" => "Backend Developer | Cloud Engineer | DevOps",
        "github" => "https://github.com/youssef-ahmed-cs"
    ]
];

echo json_encode($user_data);