
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="stylee1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
</head>
<style>
  body {
  background-image:url(https://wallpapercart.com/wp-content/uploads/2020/03/Video-Game-The-Witcher-3-Wild-Hunt-The-Witcher-Geralt-of-Rivia-HD-Wallpaper-Background-Imagess.jpg);
background-size:cover;
background-repeat:no-repeat;
background-position:center;
background-attachment: fixed;

  }
</style>
<div class="nav"> 
</BR>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-pajak-sebastian"><b>GITHUB</b></a>
<a href="index.php"><b>STRONA GŁOWNA</b></a></h4>
</br>
</br>
</br>
<a href="/nauka/pracownicy/orgPracownicy.php">ORGANIZACJA I PRACOWNICY</a> 
 
<a href="/nauka/pracownicy/agregat.php">FUNKCJE AGREGUJĄCE</a> 
  
<a href="/nauka/pracownicy/pracownicy.php">PRACOWNICY</a> 
 
  <a href="/nauka/pracownicy/dataiczas.php">DATA I CZAS</a> 

  <a href="/nauka/pracownicy/formularz.html">FORMULARZ</a>
  
  <a href="/nauka/pracownicy/danedobazy.php">DANE DO BAZY</a>
  <a href="/nauka/biblioteka/ksiazki.php">KSIAZKI</a>
  </br>
</br>
</br>

<body>
  <form action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="Imie">
    <br><input type="number" name="dzial" placeholder="Dzial">
    <br><input type="number" name="zarobki" placeholder="Zarobki">
    <br><input type="date" name="data_urodzenia">
    <input type="submit" value="Dodaj">
  </form>
  <h3>usuwanie pracownika</h3>
  <form action="delete.php" method="POST">
     <input type="number" name="id"></br>
     <input type="submit" value="Zapisz w zmiennej $_POST['id']">
  </form>
  
  
</html>
<div class="j">
<?php
 

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
              echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>
  
  <td>
  <form action='delete.php' method='POST'>
       <input type='number' name='id' value='$row[id_pracownicy]'hidden></br>
       <input type='submit' value='x'>
  </form>
  
  </td>
  
  ");
          echo("</tr>");
            }
        echo("</table>");
            
?>
</div>
</body>
