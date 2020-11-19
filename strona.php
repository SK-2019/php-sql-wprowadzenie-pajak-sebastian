<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<?php
 echo("jesteś na stronie.php");
  echo("<ul>");
  echo("<table border=1>");
echo("<li> imie: ".$_POST['firstname']."</li>");
echo("<li> nazwisko: ".$_POST['lastname']."</li>");
echo("<li> miasto: ".$_POST['city']."</li>");
echo("<li> telefon: ".$_POST['phone']."</li>");
  echo("<ul>");
  echo("</table>");        
?>
