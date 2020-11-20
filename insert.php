<?php

$servername = "remotemysql.com";
$username = "F1aJmbwBvG";
$password = "cmCvZxLITd";
$dbname = "F1aJmbwBvG";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (null, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

//zapisanie do bazy danych
$conn->query($sql);

$conn->close();
?>