<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<?php
 echo("jesteś na stronie.php");
  echo("<ul>");
echo("<li> imie: ".$_POST['firstname']."</li>");
echo("<li> nazwisko: ".$_POST['lastname']."</li>");
echo("<li> miasto: ".$_POST['city']."</li>");
echo("<li> telefon: ".$_POST['phone']."</li>");
  echo("<ul>");

 $sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);
?>
