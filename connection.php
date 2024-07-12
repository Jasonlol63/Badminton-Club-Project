<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "system";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($conn->connect_error) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
