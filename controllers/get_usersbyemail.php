<?php
require("./header.php");
require("../models/User.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;


if(isset( $_GET["email"])){
$email = $_GET["email"];
$user = User::findbyemail($mysqli,$email);
if($user){
    $response["user"] = $user->toArray();
    echo json_encode($response);
return;}
}
$response["status"] = 404;
//worked