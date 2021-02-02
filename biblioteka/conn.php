<?php
$servername = "remotemysql.com";
$username = "F1aJmbwBvG";
$password = "cmCvZxLITd";
$dbname = "F1aJmbwBvG";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>