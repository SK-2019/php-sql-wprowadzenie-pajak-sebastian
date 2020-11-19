<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<?php
echo("<h1>PRACOWNICY</h1>");
?>
<div class="nav"> 
    </br>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a>
    <a href="index.php"><b>STRONA GŁOWNA</b></a></h4>
    </br>
    </br>
    </br>
    <a href="orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> 
     
    <a href="agregat.php">FUNKCJE AGREGUJĄCE</a> 
      
    <a href="pracownicy.php">PRACOWNICY</a> 
     
      <a href="dataiczas.php">DATA I CZAS</a> 
      
      <a href="formularz.html">FORMULARZ</a> 
      </br>
   </br>
</br>
</div>    
  
  <?php

echo("<h2>Pracownicy z działu 2</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (dzial = 2)";
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
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
  <img class="pracownicy" src="pracownicy.png">