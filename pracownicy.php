<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
  
  <?php
  echo("<h1>Sebastian Pająk</h1>");
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
  ?>
  
  
