<?php 
require("./header.php");
require("../connection/connection.php");
require("../models/snackImg.php");


$response = [];
$response["status"] = 200;

if(isset($_GET["snacksId"])){
$snacksId = $_GET["snacksId"];
$snackImg = SnackImg::getImg($mysqli,$snacksId);

    if ($snackImg) {
        $response["image"] = $snackImg->toArrayImageJson();

    echo json_encode($response);
    echo("hello");
 
    return;
}
}
$response["status"] = 404;
echo($response);
// echo($snackId);
// echo($snackImg);

