<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<?php
echo("<h1>Sebastian Pająk</h1>");
echo("<h2>Tabela pracownicy</h2>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org');
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

echo("<h2>Zadanie 1</h2>");
echo("<h3>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and  (dzial = 1)</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and  (dzial = 1)');
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


echo("<h2>Zadanie 2</h2>");
echo("<h3>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (dzial=1 or dzial=2)</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (dzial=1 or dzial=2)');
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

echo("<h2>Zadanie 3</h2>");
echo("<h3>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (dzial=1 or dzial=2) and (imie like '%a')</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (dzial=1 or dzial=2) and (imie like '%a')');
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

echo("<h2>Zadanie 4</h2>");
echo("<h3>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like '%a')</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like '%a')');
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

echo("<h2>Zadanie 5</h2>");
echo("<h3>SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (zarobki>50)</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (zarobki>50)');
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
