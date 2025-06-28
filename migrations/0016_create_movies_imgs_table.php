<?php 
require("../connection/connection.php");


$query = "CREATE TABLE movie_images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  moviesId INT NOT NULL,
  image LONGBLOB NOT NULL,
  mime_type VARCHAR(50) NOT NULL,
  FOREIGN KEY (moviesId) REFERENCES movies(id)
)";
$execute = $mysqli->prepare($query);
$execute->execute();