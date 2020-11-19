<html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
  
</html> 
  
<?php
include("conn.php");
    echo("<li> imie: ".$_POST['firstname']."</li>");
    echo("<li> nazwisko: ".$_POST['lastname']."</li>");
    echo("<li> miasto: ".$_POST['city']."</li>");
    echo("<li> numer tel: ".$_POST['phone']."</li>");
$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);

?>
<img class="obraz3" src="obraz3.png">