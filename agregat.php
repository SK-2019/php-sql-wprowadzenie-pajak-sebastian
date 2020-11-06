<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
 <div class="nav"> 
    <h2>Linki</h2>
  <h4><a href="https://sebol.herokuapp.com/"><b>STRONA GLOWNA</b></a></h4>  
  <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a></h4>
    <a href="orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a>
      <h6>   </h6>
    <a href="agregat.php">FUNKCJE AGREGUJĄCE</a>
      <h6>   </h6>
    <a href="pracownicy.php">PRACOWNICY</a>
</div>    
<?php
echo("<h2>Suma zarobkow wszystkich pracownikow</h2>");
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
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
 $sql = "SELECT sum(zarobki) as sum FROM pracownicy, organizacja WHERE (dzial = id_org) GROUP BY dzial";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>sum</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["sum"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Ilość pracowników w poszczególnych działach</h2>");
 $sql = "SELECT count(imie) as count FROM pracownicy, organizacja WHERE (dzial = id_org) GROUP BY dzial";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>count</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["count"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Średnie zarobków w poszczególnych działach</h2>");
 $sql = "SELECT avg(zarobki) as avg FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie not like '%a') GROUP BY dzial";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
     echo("<th>nazwa_dzial</th>");
        echo("<th>avg</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["avg"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 echo("<h2>Jak wyłączyć 'ONLY_FULL_GROUP_BY'</h2>");
 $sql = "SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''))SELECT count(id_pracownicy),nazwa_dzial from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 1";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
     echo("<th>nazwa_dzial</th>");
        echo("<th>count</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["avg"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 
 
?>
