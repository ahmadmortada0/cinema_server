<?php 
require("../models/Movie.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;
echo("hey");

    $title = $_GET["title"];
    $description = $_GET["description"];
    $columns = ["title", "description"];
    $values = [$title, $description];
    echo ("vahello");//reminder: this is an array of OBJECTS!!!!
    $user = Movie::add($mysqli,$columns,$values); 
    // json_encode($values);
    // echo ($columns);//reminder: this is an array of OBJECTS!!!!
    