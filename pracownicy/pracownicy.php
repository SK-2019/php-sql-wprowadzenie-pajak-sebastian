<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="/assets/stylee1.css">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
  <link rel="shortcut icon" href="/assets/favicon.ico">
</head>
<style>
        body {
        background-image:url(https://static.cdprojektred.com/thewitcher.com/media/wallpapers/witcher3/full/witcher3_pl_wallpaper_wallpaper_2_1920x1080_1433245773.jpg);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    background-attachment: fixed;
  
        }
    </style>

<div class="nav"> 
    </br>
    
      </br>
   </br>
</br>
</div>    
<div class="con">
<?php
include("../header.php");
include("../menu.php");
?>
<?php
echo("<h1>PRACOWNICY</h1>");
?>
  <?php

require_once("../conn.php");
echo("<h2>Pracownicy z działu 2</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (dzial = 2)";
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
echo("<h2>Pracownicy z działu 2 i z działu 3</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (dzial = 2 or dzial = 3)";
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
echo("<h2>Pracownicy tylko z zarobkami mniejszymi niz 30</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (zarobki<30)";
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
  ?>
 </div>