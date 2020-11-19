<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width">
  <title>strona glowna sebola</title>
</head>
<?php
echo("<h5>Sebastian Pająk</h5>");
?>
   <div class="nav"> 
    
   
    <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a></h4></br>
      
    <a href="orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> 
     
    <a href="agregat.php">FUNKCJE AGREGUJĄCE</a> 
      
    <a href="pracownicy.php">PRACOWNICY</a> 
     
      <a href="dataiczas.php">DATA I CZAS</a> 
      
      <a href="formularz.html">FORMULARZ</a> 
      </br>
   </br>
</br>
</div>    
     <form action="strona.php" method="POST">
        <input type="text" name="firstname" placeholder="Imie"></br>
        <input type="text" name="lastname" placeholder="Nazwisko"></br>
        <input type="text" name="city" placeholder="Miasto"></br>
        <input type="number" name="phone" placeholder="Telefon"></br>
        <input type="submit" value="wyślij w świat">
   </form>
   
   <?php
 

echo("<h2>Tabela pracownicy</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org)";
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
<img class="index" src="index.png">