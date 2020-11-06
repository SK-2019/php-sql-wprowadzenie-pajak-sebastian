<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
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
?>
