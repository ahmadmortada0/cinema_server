<?php 
require("./header.php");
require("../models/Payment.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $payment=Payment::all($mysqli); 

    $response["payment"] = []; 
    foreach($payment as $m){
        $response["payment"][] = $m->toArray(); 
    }
    echo json_encode($response); 
    return;
}

$id = $_GET["id"];
$payment = Payment::find($mysqli, $id);
$response["payment"] = $payment->toArray();

echo json_encode($response);
return;