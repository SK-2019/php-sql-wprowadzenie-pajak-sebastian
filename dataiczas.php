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
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  ?>
