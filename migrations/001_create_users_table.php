<?php 
require("../connection/connection.php");


$query = "CREATE TABLE users(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          name VARCHAR(255) NOT NULL, 
          email VARCHAR(255) NOT NULL, 
          password TEXT NOT NULL)";

$execute = $mysqli->prepare($query);
$execute->execute();
