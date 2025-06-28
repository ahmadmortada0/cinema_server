<?php 
require("../models/Snack.php");
require("../connection/connection.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$data = json_decode(file_get_contents("php://input"), true);
$snack = new Snack([
    "name" => $data["name"],
    "price" => $data["price"]
]);

$snack->insertSnack($mysqli);
//worked