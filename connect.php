<?php
$servername = "localhost";
$username = "admin";
$password = "ironman";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Send failed: " . $conn->connect_error);
}
echo "Comment Sended successfully";
?>