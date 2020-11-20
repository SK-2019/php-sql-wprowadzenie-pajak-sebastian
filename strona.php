<html>
        <head>
        <link rel="stylesheet" href="stylee.css">
        </head>
  
</html> 
  
<?php
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$_POST['data_']); 
      require_once("conn.php");
      $sql =  "INSERT INTO pracownicy(id_pracownicy, imie, dzial, zarobki, data_urodzenia) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    ?>
<img class="obraz3" src="obraz3.png">