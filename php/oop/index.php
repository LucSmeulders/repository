<?php

require_once 'db_connect.class.php';

$conn = new db_connect_alternative;

$conn->host = 'localhost';
$conn->setDb("test");

echo $conn->host;
echo "<br>";
echo $conn->getDb();

 ?>
