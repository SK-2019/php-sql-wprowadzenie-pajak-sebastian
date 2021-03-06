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
include("../menu.php");
?>
</div>
<?php
echo("<h1>FUNKCJE AGREGUJĄCE</h1>");
?>
<div class="con">
<?php
require_once("../conn.php");
echo("<h2>Suma zarobkow wszystkich pracownikow</h2>");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobkow wszystkich kobiet</h2>");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like 'a%')";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobkow mezczyzn pracujacych w dziale 2 i 3</h2>");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like 'a%') and (dzial = 2 or dzial = 3)";
echo("<h3>".$sql."</h3>");
$result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobkow mezczyzn</h2>");
 $sql = "SELECT avg(zarobki) as avg FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like 'a%')";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>avg</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["avg"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Srednia zarobkow pracownikow z dzialu 4</h2>");
 $sql = "SELECT avg(zarobki) as avg FROM pracownicy, organizacja WHERE (dzial = id_org and dzial = 4)";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>avg</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["avg"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Średnia zarobków mężczyzn z działu 1 i 2</h2>");
 $sql = "SELECT avg(zarobki) as avg FROM pracownicy, organizacja WHERE (dzial = id_org) and (dzial = 1 or dzial =2)";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>avg</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["avg"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Ilu jest wszystkich pracowników</h2>");
 $sql = "SELECT count(imie) as count FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>count</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["count"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Ile kobiet pracuje łącznie w działach 1 i 3</h2>");
 $sql = "SELECT count(imie) as count FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like '%a') and (dzial = 1 or dzial = 3)";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
     
        echo("<th>count</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["count"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobków w poszczególnych działach</h2>");
 $sql = "SELECT nazwa_dzial, sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org) GROUP BY dzial";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Ilość pracowników w poszczególnych działach</h2>");
 $sql = "SELECT nazwa_dzial, count(imie) as count FROM pracownicy, organizacja WHERE (dzial = id_org) GROUP BY dzial";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>count</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["count"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Suma zarobków w poszczególnych działach mniejsza od 28</h2>");
 $sql = "SELECT nazwa_dzial, sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org) GROUP BY dzial HAVING sum(zarobki)<28";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sum"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Średnie zarobków mężczyzn w poszczególnych działach większe od 30</h2>");
 $sql = "SELECT nazwa_dzial, avg(zarobki) as avg FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie not like '%a') GROUP BY dzial HAVING avg(zarobki)>30";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>avg</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["avg"]."</td>");
                echo("</tr>");
            }
        echo("</table>");

 
echo("<h2>Ilość pracowników w poszczególnych działach większa od 2</h2>");
 $sql = "SELECT nazwa_dzial, count(imie) as count FROM pracownicy, organizacja WHERE (dzial = id_org) GROUP BY dzial HAVING count(imie)>2";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>count</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["count"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
</div>
