<?php
require_once("../connection/connection.php");

$snacks = [
    ['Popcorn (Small)', 30000],
    ['Popcorn (Medium)', 45000],
    ['Popcorn (Large)', 60000],
    ['Nachos with Cheese', 50000],
    ['Hotdog', 40000],
    ['Soft Drink (Small)', 15000],
    ['Soft Drink (Large)', 25000],
    ['Water Bottle', 10000],
    ['Candy Mix', 20000],
    ['Ice Cream', 35000],
];

$stmt = $mysqli->prepare("INSERT INTO snacks (name, price) VALUES (?, ?)");

foreach ($snacks as $snack) {
    $stmt->bind_param("si", $snack[0], $snack[1]);
    $stmt->execute();
}

echo "Snack seed data inserted successfully.";
