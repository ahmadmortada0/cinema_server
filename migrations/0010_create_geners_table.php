<?php 
require("../connection/connection.php");


$query = "CREATE TABLE genres(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          genretype VARCHAR(255) NOT NULL, 
          )";

$execute = $mysqli->prepare($query);
$execute->execute();