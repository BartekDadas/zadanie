<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type="text/css" href = "styl.css">
</head>
<body>
    <!-- <form id="logowanie" action="" method="post">
        Nazwa:<Input type="text" nazwa="nazwa"><br>
        Logowanie<input type="submit">     -->
<h2>Dodaj wpis</h2>
<form method="GET">
<input type="text" name="tresc">
<input type="text" name="nazwa">
<input type="submit" value="Dodaj">
</form>
<?php
if(isset($_GET['tresc']) &&isset($_GET['nazwa']) ){
    $tresc_w=$_GET['tresc'];
 $p_nazwa= $_GET['nazwa'];

 echo $tresc_w." ".$p_nazwa;
$con = mysqli_connect("localhost", "root","","trio") or die ("Błąd połączenia");
$query="INSERT INTO wpisy (id, name_u, tresc) VALUES (NULL, '$p_nazwa','$tresc_w');";
mysqli_query($con,$query) or die ("Błąd zapytania"); 
mysqli_close($con);
}
?>

<button onclick="location.href='wyswietlW.php'">Strona główna</button>
</body>
</html>