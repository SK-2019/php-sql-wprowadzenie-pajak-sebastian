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
        background-image:url(https://get.wallhere.com/photo/The-Witcher-3-Wild-Hunt-The-Witcher-3-Wild-Hunt-Blood-and-Wine-The-Witcher-3-Wild-Hunt-Hearts-of-Stone-Geralt-of-Rivia-1694285.jpg);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    background-attachment: fixed;
  
        }
    </style>

<?php
echo("<h1>FUNKCJE AGREGUJĄCE</h1>");
?>
<div class="nav"> 
    </br>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a>
    <a href="/index.php"><b>STRONA GŁOWNA</b></a></h4>
    </br>
    </br>
    </br>
    <a href="/pracownicy/orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> 
     
    <a href="/pracownicy/agregat.php">FUNKCJE AGREGUJĄCE</a> 
      
    <a href="/pracownicy/pracownicy.php">PRACOWNICY</a> 
     
      <a href="/pracownicy/dataiczas.php">DATA I CZAS</a> 
      
      <a href="/pracownicy/formularz.html">FORMULARZ</a>

      <a href="/pracownicy/Danedobazy.php">DANE DO BAZY</a> 
      <a href="/biblioteka/ksiazki.php">KSIAZKI</a>
      </br>
   </br>
</br>
</div>    
<div class="con">
<?php
  require_once("../conn.php");
echo("<h2>Autorzy</h2>");
 $sql = "SELECT * FROM autor";
echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql) or die($conn->error);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>nazwisko</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    
        
                echo("<h2>tytuly</h2>");
                 $sql = "SELECT * FROM tytul";
                echo("<h3>".$sql."</h3>");
                 $result=$conn->query($sql) or die($conn->error);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>tytul</th>");
                            while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");  

                        echo("<h2>wiele do wielu</h2>");


                        $sql = ("SELECT * FROM autor, tytul, autor_tytul  where autor_id = autor.id and tytul_id = tytul.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                        
                                echo("<table border=1>");
                                echo("<th>autor</th>");
                                echo("<th>tytul</th>");
            
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                                        echo("</tr>");
                                    }
                                echo("</table>");

                        
                        
?>
</div>