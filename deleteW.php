<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type="text/css" href = "styl.css">
</head>
<?php
session_start(); // zacznij sesje 
$con = mysqli_connect("localhost","root","","trio") or die("Błąd połączenia");
//połącz z bazą 
mysqli_query($con,"DELETE FROM wpisy WHERE id='".$_SESSION['id']."'");
// usuń wiersz gdzie id jest równe przechowanemu id w sesji
mysqli_close($con); // zamknij połączenie
unset($_SESSION['id']) // wyczyść sesje przechowującą id
?> 
<script>window.location.href = 'wyswietlW.php'</script> 
<!-- Powrót do strony wyświetania wpisów -->
</body>
</html>