<?php 
require("../connection/connection.php");


$query = "CREATE TABLE payments(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          typename VARCHAR(255) NOT NULL, 
          userId INT(11) NOT NULL,
          FOREIGN KEY (userId) REFERENCES users(id)
          )";

$execute = $mysqli->prepare($query);
$execute->execute();