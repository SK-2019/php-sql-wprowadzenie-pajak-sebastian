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
        background-image:url(https://images7.alphacoders.com/878/878080.png);
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    background-attachment: fixed;
  
        }
    </style>
<?php
echo("<h1>DATA I CZAS</h1>");
?>
<div class="nav"> 
    </BR>
    
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
echo("<h2>Wiek poszczególnych pracowników (w latach)</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org)";
echo("<h3>".$sql."</h3>");
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

                      echo("<h2>Wyświetl nazwy dni w dacie urodzenia</h2>");
               $sql = "SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as format from pracownicy";
              echo("<h3>".$sql."</h3>");
               $result=$conn->query($sql);
                      echo("<table border=1>");
                      echo("<th>imie</th>");
                      echo("<th>dzial</th>");
                      echo("<th>zarobki</th>");
                      echo("<th>format</th>");
                      
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["format"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");

                      
                      
                      echo("<h2>Wypisz dzisiejszą nazwę dnia po polsku (np. poniedziałek)</h2>");
               $sql1 = "SET lc_time_names = 'pl_PL'";
               $sql2 = "SELECT DATE_FORMAT(CURDATE(), '%W')as data";
              echo("<h3>".$sql2."</h3>");
               $result=$conn->query($sql1);
               $result=$conn->query($sql2);
                      echo("<table border=1>");
                      echo("<th>data</th>");
                      
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["data"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");

                      
                      echo("<h2>Wyświetl nazwy miesięcy w dacie urodzenia</h2>");
                      $sql = "SELECT *, DATE_FORMAT(data_urodzenia,'%W-%M-%Y') as format FROM pracownicy";
                     echo("<h3>".$sql."</h3>");
                      $result=$conn->query($sql);
                             echo("<table border=1>");
                            
                             echo("<th>imie</th>");
                             echo("<th>dzial</th>");
                             echo("<th>zarobki</th>");
                             echo("<th>format</th>");
                                 while($row=$result->fetch_assoc()) {
                                     echo("<tr>");
                                        echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["format"]."</td>");
                                     echo("</tr>");
                                 }
                             echo("</table>");
                      

                             echo("<h2>Obecna, dokładna godzina (z dokładnością do milisekund)</h2>");
                             $sql = "SELECT curtime(4)";
                            echo("<h3>".$sql."</h3>");
                             $result=$conn->query($sql);
                                    echo("<table border=1>");
                                    echo("<th>curtime(4)</th>");
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["curtime(4)"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");

                                    echo("<h2>Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ  (2012-styczeń-poniedziałek)</h2>");
                                        
                                    $sql = "SELECT *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as format from pracownicy";
                            echo("<h3>".$sql."</h3>");
                             $result=$conn->query($sql);
                                    echo("<table border=1>");
                                    echo("<th>data_urodzenia</th>");
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["format"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");

                                    
                                    
                                    echo("<h2>Ile godzin, minut już żyjesz</h2>");   
                                    $sql = "SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy";
                            echo("<h3>".$sql."</h3>");
                             $result=$conn->query($sql);
                                    echo("<table border=1>");
                                    echo("<th>imie</th>");
                                    echo("<th>dni</th>");
                                    echo("<th>godziny</th>");
                                    echo("<th>minuty</th>");
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["imie"]."</td><td>".$row["dni"]."</td><td>".$row["godziny"]."</td><td>".$row["minuty"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");
                                    
                                    
                                    echo("<h2>W którym dniu roku urodziłeś się / urodziłaś się</h2>");   
                                    $sql = "SELECT DATE_FORMAT('2003-10-11', '%j') as NrDniaRoku_Urodzenie";
                            echo("<h3>".$sql."</h3>");
                             $result=$conn->query($sql);
                                    echo("<table border=1>");
                                    echo("<th>NrDniaRoku_Urodzenie</th>");
                                    
                                    
                                        while($row=$result->fetch_assoc()) {
                                            echo("<tr>");
                                                echo("<td>".$row["NrDniaRoku_Urodzenie"]."</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");


                                    echo("<h2>Ilu pracowników urodziło się w poniedziałek</h2>");
               $sql1 = "SET lc_time_names = 'pl_PL'";
               $sql2 = "SELECT Count(DATE_FORMAT(data_urodzenia, '%W')) as IloscPracUr_Pon FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek'";
              echo("<h3>".$sql2."</h3>");
               $result=$conn->query($sql1);
               $result=$conn->query($sql2);
                      echo("<table border=1>");
                      echo("<th>IloscPracUr_Pon</th>");
                      
                          while($row=$result->fetch_assoc()) {
                              echo("<tr>");
                                  echo("<td>".$row["IloscPracUr_Pon"]."</td>");
                              echo("</tr>");
                          }
                      echo("</table>");

                      
                      echo("<h2>Pracownicy z nazwami dni tygodnia, w których się urodzili z sortowaniem od Poniedziałku do Niedzieli</h2>");
                      $sql1 = "SET lc_time_names = 'pl_PL'";
                      $sql2 = "SELECT
                      DATE_FORMAT(data_urodzenia,'%W') as dzien, imie, data_urodzenia
                 FROM
                      pracownicy
                 ORDER BY 
                      CASE
                           
                           WHEN dzien = 'Poniedziałek' THEN 1
                           WHEN dzien = 'Wtorek' THEN 2
                           WHEN dzien = 'Środa' THEN 3
                           WHEN dzien= 'Czwartek' THEN 4
                           WHEN dzien = 'Piątek' THEN 5
                           WHEN dzien = 'Sobota' THEN 6
                           WHEN dzien = 'Niedziela' THEN 7
                      END ASC";
                     echo("<h3>".$sql2."</h3>");
                      $result=$conn->query($sql1);
                      $result=$conn->query($sql2);
                             echo("<table border=1>");
                             echo("<th>dzien</th>");
                             echo("<th>imie</th>");
                             echo("<th>data_urodzenia</th>");
                             
                                 while($row=$result->fetch_assoc()) {
                                     echo("<tr>");
                                         echo("<td>".$row["dzien"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td>");
                                     echo("</tr>");
                                 }
                             echo("</table>");


                             


                      
                      echo("<h2>Ilu pracowników urodziło się w poszczególne dni tygodnia </h2>");
                      $sql1 = "SET lc_time_names = 'pl_PL'";
                      $sql2 = "SELECT Count(DATE_FORMAT(data_urodzenia,'%W')) as ilosc, DATE_FORMAT(data_urodzenia,'%W') as dzien FROM pracownicy group by dzien ORDER BY 
                                   CASE
                                        WHEN dzien = 'Poniedziałek' THEN 1
                                        WHEN dzien = 'Wtorek' THEN 2
                                        WHEN dzien = 'Środa' THEN 3
                                        WHEN dzien= 'Czwartek' THEN 4
                                        WHEN dzien = 'Piątek' THEN 5
                                        WHEN dzien = 'Sobota' THEN 6
                                        WHEN dzien = 'Niedziela' THEN 7
                                   END ASC";
                      echo("<h3>".$sql2."</h3>");
                      $result=$conn->query($sql1);
                      $result=$conn->query($sql2);
                              echo("<table border=1>");
                              echo("<th>ilosc</th>");
      
                              echo("<th>dzien</th>");
      
      
                              while($row=$result->fetch_assoc()) {
                                      echo("<tr>");
                                          echo("<td>".$row["ilosc"]."</td><td>".$row["dzien"]."</td>");
                                      echo("</tr>");
                                  }
                              echo("</table>");
                                
  ?>
  </div>