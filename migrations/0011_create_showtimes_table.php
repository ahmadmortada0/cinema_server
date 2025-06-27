<?php 
require("../connection/connection.php");


$query = "CREATE TABLE showtimes(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          time VARCHAR(255) NOT NULL, 
          date VARCHAR(255) NOT NULL, 
          moviesId INT(11) NOT NULL,
          FOREIGN KEY (moviesId) REFERENCES movies(id)
          )";

$execute = $mysqli->prepare($query);
$execute->execute();