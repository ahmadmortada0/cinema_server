<?php 
require("../models/Movie.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $movie = Movie::all($mysqli); 

    $response["movie"] = []; 
    foreach($movie as $m){
        $response["movie"][] = $m->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$movie = Movie::find($mysqli, $id);
$response["movie"] = $movie->toArray();

echo json_encode($response);
return;

