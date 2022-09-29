<?php

//connect to the database
$conn = mysqli_connect('localhost', 'laissi', 'admin123', 'ninja_pizza');

//check the connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

?>
