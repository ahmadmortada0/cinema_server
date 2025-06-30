<?php 
require("./header.php");
require("../models/Seat.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $showtimseat = Seat::all($mysqli); 

    $response["seat"] = []; 
    foreach($Seat as $m){
        $response["seat"][] = $m->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$seat = Seat::find($mysqli, $id);
$response["seat"] = $seat->toArray();

echo json_encode($response);
return;