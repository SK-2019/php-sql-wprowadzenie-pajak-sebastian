<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="/assets/stylee1.css">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
  <link rel="shortcut icon" href="/assets/favicon.ico">
<style>
        body {
        background-image:url(https://get.wallhere.com/photo/The-Witcher-3-Wild-Hunt-The-Witcher-3-Wild-Hunt-Blood-and-Wine-The-Witcher-3-Wild-Hunt-Hearts-of-Stone-Geralt-of-Rivia-1694285.jpg);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    background-attachment: fixed;
  
        }
    </style>
    </head>

  <div class="nav"> 
  <?php
    include("../header.php");
    include("../back.php");
?>
</br>
  <?php
    include("../menuwieledowielu.php");
?>
</div>
    <div class="con">
<?php
echo("<h1>Przychodnia</h1>");
  require_once("../conn.php");
  
        $sql = ("SELECT * FROM lekarz");
    echo("<h2>".$sql."</h2>");
        $result=$conn->query($sql);

    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>lekarz</th>");

        while($row=$result->fetch_assoc()) {
      echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["lekarz"]."</td>");
      echo("</tr>");
   }
      echo("</table>");


      $sql = ("SELECT * FROM pacjent");
        echo("<h2>".$sql."</h2>");
      $result=$conn->query($sql);

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>pacjent</th>");

      while($row=$result->fetch_assoc()) {
          echo("<tr>");
            echo("<td>".$row["id"]."</td><td>".$row["pacjent"]."</td>");
          echo("</tr>");
          }
          echo("</table>");


        $sql = ("SELECT * FROM lekarz, pacjent, lekarz_pacjent  where lekarz_id = lekarz.id and pacjent_id = pacjent.id");
          echo("<h2>".$sql."</h2>");
        $result=$conn->query($sql);
                
        echo("<table border=1>");
        echo("<th>lekarz</th>");
        echo("<th>pacjent</th>");

          while($row=$result->fetch_assoc()) {
            echo("<tr>");
              echo("<td>".$row["lekarz"]."</td><td>".$row["pacjent"]."</td>");
            echo("</tr>");
             }
            echo("</table>");
?>
</div>