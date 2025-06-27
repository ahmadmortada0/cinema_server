<?php 
require("../models/Orderedsnack.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $Orderedsnack = Orderedsnack::all($mysqli); 

    $response["or$Orderedsnack"] = []; 
    foreach($Orderedsnack as $m){
        $response["or$Orderedsnack"][] = $m->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$Orderedsnack = Orderedsnack::find($mysqli, $id);
$response["or$Orderedsnack"] = $Orderedsnack->toArray();

echo json_encode($response);
return;