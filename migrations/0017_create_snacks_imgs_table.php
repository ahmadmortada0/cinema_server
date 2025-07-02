<?php 
require("../connection/connection.php");


$query = "CREATE TABLE snacks_images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  snacksId INT ,
  image LONGBLOB NOT NULL,
  FOREIGN KEY (snacksId) REFERENCES snacks(id)
)";
$execute = $mysqli->prepare($query);
$execute->execute();