<?php 
require("../connection/connection.php");


$query = "CREATE TABLE orderedsnacks(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          seatsId INT(11) NOT NULL,
          FOREIGN KEY (seatsId) REFERENCES seats(id)
          )";
         

$execute = $mysqli->prepare($query);
$execute->execute();