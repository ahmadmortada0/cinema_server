<?php 
require("./header.php");
require("../models/Showtime.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $showtime = Showtime::all($mysqli); 

    $response["showtime"] = []; 
    foreach($Showtime as $m){
        $response["showtime"][] = $m->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$showtime = Showtime::find($mysqli, $id);
$response["showtime"] = $showtime->toArray();

echo json_encode($response);
return;