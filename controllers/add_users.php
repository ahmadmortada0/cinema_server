<?php 
require("../models/User.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;
echo("hey");

    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $columns = ["name", "email", "password"];
    $values = [$name, $email, $password];
    echo ("vahello");//reminder: this is an array of OBJECTS!!!!
    $user = User::add($mysqli,$columns,$values); 
    // json_encode($values);
    // echo ($columns);//reminder: this is an array of OBJECTS!!!!
    