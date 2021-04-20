<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/assets/stylee1.css">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
  <link rel="shortcut icon" href="/assets/favicon.ico">
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
        <div class="con">
</div>
   <div class="nav">
   </br>
   </br>
</br>
</div>

<?php
include("../menu.php");
include("../notion.php");
?>
<?php
echo("<h1>ORGANIZACJA I PRACOWNICY</h1>");
?>
    
  <?php
  require_once("../conn.php");
echo("<h2>Pracownicy z nazwa dzialu</h2>");
$sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$result=$conn->query($sql);  

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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
  </div>