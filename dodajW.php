<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel = "stylesheet" type="text/css" href = "styl.css"> -->
</head>
<body>
    <!-- <form id="logowanie" action="" method="post">
        Nazwa:<Input type="text" nazwa="nazwa"><br>
        Logowanie<input type="submit">     -->
<?php

echo '<h3>Dodaj wpis</h3>';
$tresc=$_POST['Tresc'];
$p_nazwa=$_GET['nazwa']
$con =mysqli_connect("localhost", "root", "","trio") or die ("Błąd połączenia");
$query="INSERT INTO trio ('name','tresc') VALUES ('$p_nazwa','$tresc');";
mysqli_query($con,$query) or die ("Błąd zapytania"); 
mysqli_close($con);
?>
<button onclick="location.href='wyswietlW.php'">Strona główna</button>
</body>
</html>