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


<div class="nav"> 
    </br>
    
    </br>
    </br>
    </br>
    
      </br>
   </br>
</br>
</div>    
<div class="con">
<?php
include("../header.php");
include("../menu.php");
?>
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