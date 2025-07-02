<?php 

require("./header.php");
require("../models/Movie.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;
$data = json_decode(file_get_contents("php://input"), true);
$movie = new Movie([
   
     "title" => $data["title"],
    "description" => $data["description"],
    "image" => $data["image"],
   "trailer"=>$data["trailer"]
]);



    // $columns = ["title", "description", "image","trailer"];
    // $values = [$movie->getTitle(), $movie->getDescription(), $movie->getImage(),$movie->getTrailer()];
    echo ("vahello");

    $movie->insertMovie($mysqli); 
    if(!$movie){
        $response["status"] = 404;
    }
//worked