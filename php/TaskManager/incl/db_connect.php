<?php

$host = "localhost";
$db = "todo";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully <br><br>";

 ?>
