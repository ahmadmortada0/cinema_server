<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

require("../models/User.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;
$data = json_decode(file_get_contents("php://input"), true);
$user = new User([
   
     "name" => $data["name"],
    "email" => $data["email"],
    "password" => $data["password"]
]);



    $columns = ["name", "email", "password"];
    $values = [$user->getName(), $user->getEmail(), $user->getPassword()];
    echo ("vahello");
    User::add($mysqli,$columns,$values); 
    if(!$user){
        $response["status"] = 404;
    }
//worked