<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
   <div class="nav"> 
    <h2>Linki</h2>
    <h4><a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a></h4>
    <a href="orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> |
      
    <a href="agregat.php">FUNKCJE AGREGUJĄCE</a> |
     
    <a href="pracownicy.php">PRACOWNICY</a> |
    
      <a href="dataiczas.php">DATA I CZAS</a> |
</div>    
 <?php

echo("<h2>Wiek poszczególnych pracowników (w latach)</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
   echo("<h2>Wiek poszczególnych pracowników (w latach) z działu serwis</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org) and (nazwa_dzial = 'serwis')";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>zarobki</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["wiek"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
   echo("<h2>Suma lat wszystkich pracownikow</h2>");
 $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        
        echo("<th>suma</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>");
                echo("</tr>");
            }
        echo("</table>");

        echo("<h2>Suma lat pracowników z działu handel</h2>");
 $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (dzial = id_org) and (nazwa_dzial = 'handel')";
echo("<h3>".$sql."</h3>");
$conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
 $result=$conn->query($sql);
        echo("<table border=1>");
        
        echo("<th>suma</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["suma"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
        echo("<h2>Suma lat kobiet</h2>");
        $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie not like '%a')";
       echo("<h3>".$sql."</h3>");
       $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
        $result=$conn->query($sql);
               echo("<table border=1>");
               
               echo("<th>suma</th>");
                   while($row=$result->fetch_assoc()) {
                       echo("<tr>");
                           echo("<td>".$row["suma"]."</td>");
                       echo("</tr>");
                   }
               echo("</table>");
   
               echo("<h2>Średnia lat pracowników w poszczególnych działach</h2>");
               $sql = "SELECT avg(YEAR(curdate())-YEAR(data_urodzenia)) AS avg FROM pracownicy, organizacja WHERE (dzial = id_org)";
              echo("<h3>".$sql."</h3>");
              $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
               $result=$conn->query($sql);
                      echo("<table border=1>");
                      
                      echo("<th>avg</th>");
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["avg"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");   


echo("<h2>Suma lat pracowników w poszczególnych działach</h2>");
        $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (dzial = id_org)";
       echo("<h3>".$sql."</h3>");
       $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
        $result=$conn->query($sql);
               echo("<table border=1>");
               
               echo("<th>suma</th>");
                   while($row=$result->fetch_assoc()) {
                       echo("<tr>");
                           echo("<td>".$row["suma"]."</td>");
                       echo("</tr>");
                   }
               echo("</table>");

        echo("<h2>Najstarsi pracownicy w każdym dziale (nazwa_dział, wiek)</h2>");
               $sql = "SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Wiek, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
              echo("<h3>".$sql."</h3>");
              $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
               $result=$conn->query($sql);
                      echo("<table border=1>");
                      echo("<th>Wiek</th>");
                      echo("<th>nazwa_dzial</th>");
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["Wiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");

                      echo("<h2>Najmłodsi pracownicy z działu: handel i serwis (Imię, nazwa_dział, wiek)</h2>");
                      $sql = "Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by nazwa_dzial";
                     echo("<h3>".$sql."</h3>");
                     $conn = new mysqli("remotemysql.com","F1aJmbwBvG","cmCvZxLITd","F1aJmbwBvG");
                      $result=$conn->query($sql);
                             echo("<table border=1>");
                             echo("<th>minwiek</th>");
                             echo("<th>nazwa_dzial</th>");
                             echo("<th>imie</th>");
                             
                        
                             
                                 while($row=$result->fetch_assoc()) {
                                     echo("<tr>");
                                         echo("<td>".$row["minwiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                     echo("</tr>");
                                 }
                             echo("</table>");
  
  ?>
