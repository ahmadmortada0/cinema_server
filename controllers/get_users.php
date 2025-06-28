<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

require("../models/User.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $user = User::all($mysqli); 

    $response["user"] = []; 
    foreach($user as $a){
        $response["user"][] = $a->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$user = User::find($mysqli, $id);
$response["user"] = $user->toArray();

echo json_encode($response);
return;
//worked
