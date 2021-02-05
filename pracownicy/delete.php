<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="/assets/stylee.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastian Pajak</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">

</head>
<body>
    
</body>
</html>
<?php
require_once("pracownicy/conn.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM pracownicy WHERE id_pracownicy= '".$_POST['id']."';";


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Pracownik usunięty";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: /pracownicy/danedobazy.php");
?>