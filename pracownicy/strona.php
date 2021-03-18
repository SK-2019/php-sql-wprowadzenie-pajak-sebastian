<html>
        <head>
        <meta charset="utf-8">
  <link rel="stylesheet" href="/assets/stylee.css">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
  <link rel="shortcut icon" href="/assets/favicon.ico">
        </head>
  
</html> 
<style>
  body {
  background-image:url(http://avante.biz/wp-content/uploads/The-Witcher-3-Wallpaper/The-Witcher-3-Wallpaper-040.jpg);
background-size:cover;
background-repeat:no-repeat;
background-position:center;
background-attachment: fixed;

  }
</style>
  
<?php
require_once("../conn.php");
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$_POST['data_']); 
      $sql =  "INSERT INTO pracownicy(id_pracownicy, imie, dzial, zarobki, data_urodzenia) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    ?>
