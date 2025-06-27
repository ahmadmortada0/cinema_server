<?php 
require("../connection/connection.php");


$query = "CREATE TABLE autobookings(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
        
          )";

$execute = $mysqli->prepare($query);
$execute->execute();