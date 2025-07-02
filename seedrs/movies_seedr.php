<?php
require("../connection/connection.php");

function insertMovie($mysqli, $title, $description, $imagePath, $trailer) {
    $imageData = file_get_contents($imagePath);

    $query = "INSERT INTO movies (title, description, image, trailer) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssss", $title, $description, $imageData, $trailer);
    $stmt->send_long_data(2, $imageData);
    
    $stmt->execute();
    echo "Inserted: $title\n";
}

// Example movies
$movies = [
    [
        "title" => "F1: Drive to Survive",
        "description" => "An inside look at the high-octane world of Formula 1.",
        "image" => "../assets/movies/f1.jpg",
        "trailer" => "https://www.youtube.com/embed/2vT3y6lR_nA"
    ],
    [
        "title" => "The Batman",
        "description" => "Bruce Wayne uncovers corruption in Gotham.",
        "image" => "../assets/movies/batman.jpg",
        "trailer" => "https://www.youtube.com/embed/mqqft2x_Aa4"
    ],
    [
        "title" => "Inside Out 2",
        "description" => "Emotions return in this animated sequel.",
        "image" => "../assets/movies/insideout2.jpg",
        "trailer" => "https://www.youtube.com/embed/LEjhY15eCx0"
    ]
];

// Insert each movie
foreach ($movies as $movie) {
    insertMovie($mysqli, $movie["title"], $movie["description"], $movie["image"], $movie["trailer"]);
}
