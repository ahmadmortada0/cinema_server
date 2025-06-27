<?php 
require("../connection/connection.php");


$query = "CREATE TABLE images(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          userId INT(11) NOT NULL,
          moviesId INT(11) NOT NULL,
          path varchar(255) not null ,
          FOREIGN KEY (moviesId) REFERENCES movies(id) 
          FOREIGN KEY (userId) REFERENCES users(id)
)";
$execute = $mysqli->prepare($query);
$execute->execute();