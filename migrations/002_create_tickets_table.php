<?php 
require("../connection/connection.php");


$query = "CREATE TABLE tickets(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          price VARCHAR(255) NOT NULL, 
          showtimesId int (11) not null
          FOREIGN KEY (showtimesId) REFERENCES showtimes(id))";
          

$execute = $mysqli->prepare($query);
$execute->execute();