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
require_once("../conn.php");
    echo("<h1>Szkoła</h1>");

    $sql = ("SELECT * FROM nauczyciel");
    echo("<h2>".$sql."</h2>");
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>nauczyciel</th>");

            while($row=$result->fetch_assoc()) {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["nauczyciel"]."</td>");
                    echo("</tr>");
                }
            echo("</table>");

    
    $sql = ("SELECT * FROM klasa");
    echo("<h2>".$sql."</h2>");
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>klasa</th>");

            while($row=$result->fetch_assoc()) {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["klasa"]."</td>");
                    echo("</tr>");
                }
            echo("</table>");


            $sql = ("SELECT * FROM nauczyciel, klasa, nauczyciel_klasa where nauczyciel_id = nauczyciel.id and klasa_id = klasa.id");
            echo("<h2>".$sql."</h2>");
            $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<th>klasa</th>");
                    echo("<th>nauczyciel</th>");

                    while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                echo("<td>".$row["klasa"]."</td><td>".$row["nauczyciel"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");

?>
</div>