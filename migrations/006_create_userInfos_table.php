<?php 
require("../connection/connection.php");


$query = "CREATE TABLE usersinfos(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          img text NOT NULL, 
          age VARCHAR(255) NOT NULL, 
          userId INT(11) NOT NULL,
          FOREIGN KEY (userId) REFERENCES users(id)
          )";

$execute = $mysqli->prepare($query);
$execute->execute();
