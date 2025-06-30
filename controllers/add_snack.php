<?php 
require("./header.php");
require("../models/Snack.php");
require("../connection/connection.php");


$data = json_decode(file_get_contents("php://input"), true);
$snack = new Snack([
    "name" => $data["name"],
    "price" => $data["price"]
]);

$snack->insertSnack($mysqli);
//worked