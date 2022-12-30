<?php

include 'connect.php';
include 'index.php';

$servername = "localhost";
$username = "admin";
$password = "ironman";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Send failed: " . $conn->connect_error);
}

$sql = "INSERT INTO comment (email, mot, text)
VALUES ('$email', '$mot', '$text')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>