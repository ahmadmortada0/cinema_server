<?php 
require("../connection/connection.php");


$query = "CREATE TABLE invites(
          id INT(11) AUTO_INCREMENT PRIMARY KEY, 
          usersId INT(11) NOT NULL,
          usersinvitedId INT(11) NOT NULL,
          FOREIGN KEY (userId) REFERENCES users(id)
          )";

$execute = $mysqli->prepare($query);
$execute->execute();