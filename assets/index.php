<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="stylee.css">
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
      
    <a href="/pracownicy/orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> 
     
    <a href="/pracownicy/agregat.php">FUNKCJE AGREGUJĄCE</a> 
      
    <a href="/pracownicy/pracownicy.php">PRACOWNICY</a> 
     
      <a href="/pracownicy/dataiczas.php">DATA I CZAS</a> 
      
      <a href="/pracownicy/formularz.html">FORMULARZ</a>

      <a href="/pracownicy/danedobazy.php">DANE DO BAZY</a> 
      
      <a href="/pracownicy/ksiazki.php">KSIAZKI</a>

    

      </br>
   </br>
</br>
</div>    
     
   
   <?php
 

 echo("<h2>Tabela pracownicy</h2>");

 $sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org)";
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
  require("conn.php");
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
        
        
       
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
            
?>
