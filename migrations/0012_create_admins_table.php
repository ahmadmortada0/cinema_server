<?php 
require("../connection/connection.php");


$query = "CREATE TABLE admins(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          email VARCHAR(255) NOT NULL, 
          password TEXT NOT NULL,
          )";
         

$execute = $mysqli->prepare($query);
$execute->execute();