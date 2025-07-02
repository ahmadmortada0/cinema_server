<?php 
require("./header.php");
require("../connection/connection.php");
require("../models/snack.php");


$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $snack = Snack::all($mysqli); 

    $response["snack"] = []; 
    foreach($snack as $m){
        $response["snack"][] = $m->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$snack = Snack::find($mysqli, $id);
$response["snack"] = $snack->toArray();

echo json_encode($response);
return;
//worked