<?php 
require("../models/SnackImg.php");
require("../connection/connection.php");
require("./header.php");
$response = [];
$response["status"] = 200;


$data = json_decode(file_get_contents("php://input"), true);


$snackImage = new SnackImg([
   
     "snacksId" => $data["snacksId"],
    "image" => $data["image"],
 
]);
$snackImage->insertSnackImage($mysqli);
// if($response){
// $response["snackImage"] = $snackImage-> toArrayImageJson();
// echo json_encode($response);
// return;}