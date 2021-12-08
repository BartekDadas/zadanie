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
<h2>Dodaj wpis</h2>
<!-- jawna metoda pobierania od użytkownika -->
<form method="POST">
<!-- Pole z możliwością wprowadzenia treści wpisu -->
<input type="text" name="tresc">
<!-- Przycisk zatwierdź -->
<input type="submit" value="Dodaj">
</form>
<?php
session_start(); // rozpocznij możliwość korzystania z sesji
$currentUser = $_SESSION['nazwa']; // pobierz nazwę z sesji
?>
<?php
if(isset($_POST['tresc'])){ // jeżeli treść została pobrana z inputu
$tresc_w=$_POST['tresc']; // przypisz zmiennej podaną przez użytkownika wartość treści
$con = mysqli_connect("localhost", "root","","trio") or die ("Błąd połączenia"); // utwórz połączenie z bazą 
$query="INSERT INTO wpisy (id, name_u, tresc) VALUES (NULL, '$currentUser','$tresc_w');"; // wprowadź do bazy danych 
mysqli_query($con,$query) or die ("Błąd zapytania"); // przekaż zapytanie do bazy
mysqli_close($con); // zamknięcie połączenia z bazą 
}
?>
<!-- przycisk  -> powrót do strony głównej -->
<button onclick="location.href='wyswietlW.php'">Strona główna</button>
</body>
</html>