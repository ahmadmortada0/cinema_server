<?php 
require("../connection/connection.php");


$query = "CREATE TABLE seats(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          row INT(11) NOT NULL, 
          )";
         

$execute = $mysqli->prepare($query);
$execute->execute();