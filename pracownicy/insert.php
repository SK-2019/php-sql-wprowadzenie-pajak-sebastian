<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="/assets/stylee.css">
  <meta name="viewport" content="width=device-width">
  <title>Sebastian Pajak</title>
  <link rel="shortcut icon" href="/assets/favicon.ico">
  <div class="nav">
</BR>
<a href="pracownicy/danedobazy.php">DODAJ PRACOWNIKA</a>
<a href="/index.php">STRONA GLOWNA</a>
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
echo("<h1>jestes w insert.php </h1>");
echo "<li>Imie: ". $_POST['name'];
echo "<li>Dzial: ". $_POST['dzial'];
echo "<li>zarobki: ". $_POST['zarobki'];
echo "<li>data urodzenia: ". $_POST['data_urodzenia'];


require_once("../conn.php");
$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
        VALUES (null,'".$_POST['imie']."', ".$_POST['dzial'].", ".$_POST['zarobki'].",'".$_POST['data_urodzenia']."')";

//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
  echo("<li>New record created successfully</li>");
  header('Location: danedobazy.php');
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
        
</body>
</html>
