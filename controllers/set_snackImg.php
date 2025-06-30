<?php 
require("../models/snack.php");
require("../connection/connection.php");
require("./header.php");
$response = [];
$response["status"] = 200;



$id = $_GET["snacksId"];
$snack = Snack::find($mysqli, $idID);

if($response){
$response["snacks"] = $snack->toArray();
echo json_encode($response);
return;}