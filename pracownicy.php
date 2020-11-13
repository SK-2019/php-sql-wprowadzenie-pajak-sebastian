<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
  <div class="nav"> 
    <h2>Linki</h2>
    <h4><a href="https://sebol.herokuapp.com/"><b>STRONA GLOWNA</b></a></h4>
    <h6> | </h6>
    <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a></h4>
    <h6> | </h6>
    <a href="orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> |
      
    <a href="agregat.php">FUNKCJE AGREGUJĄCE</a> |
     
    <a href="pracownicy.php">PRACOWNICY</a> |
   
  <a href="dataiczas.php">DATA I CZAS</a> |
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