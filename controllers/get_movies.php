<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

require("../models/Movie.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $movie = Movie::all($mysqli); 

    $response["movie"] = []; 
    foreach($movie as $m){
        $response["movie"][] = $m->toArrayjson(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$movie = Movie::find($mysqli, $id);
$response["movie"] = $movie->toArrayjson();

echo json_encode($response);
return;

