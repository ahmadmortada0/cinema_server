<?php 
require("../connection/connection.php");


$query = "CREATE TABLE notifcations(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
        
          userId INT(11) NOT NULL,
          FOREIGN KEY (userId) REFERENCES users(id)
          )";
         

$execute = $mysqli->prepare($query);
$execute->execute();