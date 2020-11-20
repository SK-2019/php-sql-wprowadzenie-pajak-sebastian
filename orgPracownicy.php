<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylee.css">
</head>


        <style>
        body {
        background-image:url(https://get.wallhere.com/photo/1920x1080-px-blood-and-wine-CD-Projekt-RED-The-Witcher-The-Witcher-3-Wild-Hunt-video-games-1520999.jpg);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    background-attachment: fixed;
  
        }
    </style>
        

<?php
echo("<h1>ORGANIZACJA I PRACOWNICY</h1>");
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
      
      <a href="danedobazy.html">DANE DO BAZY</a>
      </br>
   </br>
</br>
</div>    
  
  <?php
  
echo("<h2>Pracownicy z nazwa dzialu</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org)";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Pracownicy tylko z dzialu 1 i 4</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (dzial = 1 or dzial = 4)";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Lista kobiet z nazwami działow</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (imie like 'a%')";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Lista mezczyzn z nazwami dzialow</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (imie not like 'a%')";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Pracownicy posortowani malejaco</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) order by imie desc";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Pracownicy z dzialu 3 posortowani rosnaco po imieniu</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) order by imie asc";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Kobiety posortowane rosnaco po imieniu</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org) and (imie like '%a') order by imie asc";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Kobiety z dzialu 1 i 3 posortowane rosnaco po zarobkach</h2>");
 $sql = "SELECT * FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like '%a') and (dzial = 1 or dzial = 3) order by zarobki asc";
echo("<h3>".$sql."</h3>");
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
  
  echo("<h2>Mezczyzni posortowani rosnaco: po nazwie dzialu a nastepnie po wysokosci zarobkow</h2>");
 $sql = "SELECT * FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie not like '%a') order by nazwa_dzial asc, zarobki asc";
echo("<h3>".$sql."</h3>");
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
  