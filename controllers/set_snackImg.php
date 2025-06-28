<?php 
require("../models/snack.php");
require("../connection/connection.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$response = [];
$response["status"] = 200;



$id = $_GET["id"];
$snack = Snack::find($mysqli, $id);
$response["snack"] = $snack->toArray();

echo json_encode($response);
return;