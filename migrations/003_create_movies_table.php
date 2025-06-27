<?php 
require("../connection/connection.php");


$query = "CREATE TABLE movies(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          img text not null,
          title VARCHAR(255) NOT NULL, 
          description VARCHAR(255) NOT NULL )";

$execute = $mysqli->prepare($query);
$execute->execute();