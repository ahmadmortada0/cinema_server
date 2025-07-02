<?php 
require("../connection/connection.php");


$query = "CREATE TABLE seats(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          seat INT(11) NOT NULL, 
          showtimesId INT(11) NOT NULL,
          FOREIGN KEY (showtimesId) REFERENCES showtimes(id)
          )";
         

$execute = $mysqli->prepare($query);
$execute->execute();