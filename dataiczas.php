<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
   <div class="nav"> 
    <h2>Linki</h2>
    <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a></h4>
    <a href="orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a>
      <h6>   </h6>
    <a href="agregat.php">FUNKCJE AGREGUJĄCE</a>
      <h6>   </h6>
    <a href="pracownicy.php">PRACOWNICY</a>
      <h6>   </h6>
      <a href="dataiczas.php">DATA I CZAS</a>
</div>    
 <?php

echo("<h2>Wiek poszczególnych pracowników (w latach)</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
   echo("<h2>Wiek poszczególnych pracowników (w latach) z działu serwis</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org) and (nazwa_dzial = 'serwis')";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
   echo("<h2>Suma lat wszystkich pracownikow</h2>");
 $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        
        echo("<th>suma</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
   
   
   
  
  ?>
