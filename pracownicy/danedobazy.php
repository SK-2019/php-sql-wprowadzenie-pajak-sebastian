<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/assets/stylee1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
  <link rel="shortcut icon" href="/assets/favicon.ico">
<style>
  body {
  background-image:url(https://wallpapercart.com/wp-content/uploads/2020/03/Video-Game-The-Witcher-3-Wild-Hunt-The-Witcher-Geralt-of-Rivia-HD-Wallpaper-Background-Imagess.jpg);
background-size:cover;
background-repeat:no-repeat;
background-position:center;
background-attachment: fixed;

  }
</style>
</head>
<div class="nav"> 
<?php
include("../header.php");
include("../menu.php");
?>
</div>
<div class="con">
<body>
  <form action="/pracownicy/insert.php" method="POST">
    <input type="text" name="imie" placeholder="Imie">
    <br><input type="number" name="dzial" placeholder="Dzial">
    <br><input type="number" name="zarobki" placeholder="Zarobki">
    <br><input type="date" name="data_urodzenia">
    <input type="submit" value="Dodaj">
  </form>
  <h3>usuwanie pracownika</h3>
  <form action="/pracownicy/delete.php" method="POST">
     <input type="number" name="id"></br>
     <input type="submit" value="Zapisz w zmiennej $_POST['id']">
  </form>
  
</html>
</div>
<div class="j">
<div class="con">
<?php
 
 require_once("../conn.php");
 $sql = "SELECT * FROM pracownicy, organizacja where (dzial = id_org)";
 $result=$conn->query($sql);
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
