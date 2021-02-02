<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="/nauka/pracownicy/stylee.css">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
</head>

<style>
        body {
        background-image:url(https://images6.alphacoders.com/706/thumb-1920-706735.png);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    background-attachment: fixed;
  
        }
    </style>
<?php
echo("<h5>Sebastian Pająk</h5>");
?>

   <div class="nav"> 
    
   
    <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a></h4></br>
    <a href="index.php"><b>STRONA GŁOWNA</b></a></h4>
</br>
</br>
</br>   
    <a href="/pracownicy/orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> 
     
    <a href="/pracownicy/agregat.php">FUNKCJE AGREGUJĄCE</a> 
      
    <a href="/pracownicy/pracownicy.php">PRACOWNICY</a> 
     
      <a href="/pracownicy/dataiczas.php">DATA I CZAS</a> 
      
      <a href="/pracownicy/formularz.html">FORMULARZ</a>

      <a href="/pracownicy/danedobazy.php">DANE DO BAZY</a> 

      <a href="/biblioteka/ksiazki.php">KSIAZKI</a>

      </br>
   </br>
</br>
</div>    
<?php
 

 echo("<h2>SELECT * FROM biblAutor</h2>");

 $sql = "SELECT * FROM biblautor";
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Imie</th>");
        
        
        
        
       
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["autor_id"]."</td><td>".$row["autor"]."</td>");
                echo("</tr>");
            }
        echo("</table>");

        echo("<h2>SELECT * FROM biblTytul</h2>");

 $sql = "SELECT * FROM bibltytul";
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Tytul</th>");
        
        
        
        
       
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["tytul_id"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
            

        $sql = "SELECT * from biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=autor_id and biblTytul_id=tytul_id";
echo("<h3>".$sql."</h3>");
  $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>autor</th>");
        echo("<th>tytul</th>");
        
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
