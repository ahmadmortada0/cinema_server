<?php 
require("../connection/connection.php");


$query = "CREATE TABLE moviesandgenres(
          showtimesId INT(11) NOT NULL,
          moviesId INT(11) NOT NULL,
          FOREIGN KEY (showtimesId) REFERENCES showtimes(id),
          FOREIGN KEY (moviesId) REFERENCES movies(id))";

$execute = $mysqli->prepare($query);
$execute->execute();