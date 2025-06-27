<?php 
require("../models/User.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $user = User::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["user"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($user as $a){
        $response["user"][] = $a->toArray(); //hence, we decided to iterate again on the user array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$user = User::find($mysqli, $id);
$response["user"] = $user->toArray();

echo json_encode($response);
return;