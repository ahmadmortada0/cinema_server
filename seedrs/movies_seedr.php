<?php
require("../connection/connection.php");

$movies = [
    [
        "img" => "poster1.jpg",
        "title" => "Inception",
        "description" => "A mind-bending thriller by Christopher Nolan."
    ],
    [
        "img" => "poster2.jpg",
        "title" => "The Godfather",
        "description" => "Crime saga of the Corleone family."
    ],
    [
        "img" => "poster3.jpg",
        "title" => "Interstellar",
        "description" => "A journey through space and time."
    ],
    [
        "img" => "poster4.jpg",
        "title" => "The Dark Knight",
        "description" => "Batman faces off against the Joker."
    ]
];

foreach ($movies as $movie) {
    $stmt = $mysqli->prepare("INSERT INTO movies (img, title, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $movie['img'], $movie['title'], $movie['description']);
    $stmt->execute();
}

echo "Movies seeded successfully!";
?>
