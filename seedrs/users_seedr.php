<?php
require_once("../connection/connection.php");

// Sample users with plain passwords
$users = [
    ['Alice Smith', 'alice@example.com', 'password123'],
    ['Bob Johnson', 'bob@example.com', 'securepass'],
    ['Charlie Brown', 'charlie@example.com', 'mypassword'],
    ['Diana Prince', 'diana@example.com', 'wonderwoman'],
    ['Ethan Hunt', 'ethan@example.com', 'mission123'],
];

$stmt = $mysqli->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

foreach ($users as $user) {
    $stmt->bind_param("sss", $user[0], $user[1], $user[2]);
    $stmt->execute();
}

echo " users inserted successfully.";
