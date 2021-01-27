<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="stylee.css">
  <meta name="viewport" content="width=device-width">
  <title>Insert</title>
  <div class="nav">
</BR>
<a href="pracownicy/danedobazy.php">DODAJ PRACOWNIKA</a>
<a href="assets/index.php">STRONA GLOWNA</a>
</div>
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
<?php
echo("<h1>jestes w insert.php</h1>");



$servername = "remotemysql.com";
$username = "F1aJmbwBvG";
$password = "cmCvZxLITd";
$dbname = "F1aJmbwBvG";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'".$_POST['imie']."','".$_POST['dzial']."' , '".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

echo "<h2>".$sql;



if ($conn->query($sql) === TRUE) {
  echo("<h1>    </h1>");
  echo ("<h1>Nowy pracownik dodany :)</h1>");
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo("<h1>Nie udało się :C</h1>");
}




$conn->close();

?>
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
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                  
                    echo("</tr>");
                    
                    
            }
            
        echo("</table>");
        ?>
        
</body>
</html>
