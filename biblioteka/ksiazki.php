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
    <a href="/index.php"><b>STRONA GŁOWNA</b></a></h4>
</br>
</br>
</br>   
    

      </br>
   </br>
</br>
</div>    
<div class="con">
<?php
include("../menu.php");
include("../notion.php");
?>
<?php
 

 echo("<h2>SELECT * FROM biblAutor</h2>");
require_once("../conn.php");
 $sql = "SELECT * FROM biblautor";
 echo("<h3>".$sql."</h3>");
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
 $result=$conn->query($sql);
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
</div>