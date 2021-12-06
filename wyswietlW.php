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
<table>
<?php
$con = mysqli_connect("localhost", "root", "","trio") or die ("Błąd połączenia");// rozpoczęcie połączenia z bazą danych
$query="SELECT name_u,tresc FROM wpisy;";//stworzenie zapytania bazy danych o wyświetlenie nazw i wpisów z tablicy 
$result = mysqli_query($con,$query) or die ("Błąd zapytania"); // wykonanie zapytania 
while($row = mysqli_fetch_array($result)) { //
    $a="deleteW.php?id=";
        echo "<tr><td>".$row['tresc']."</td><td>".$row['name_u']."</td><td>"."<a href='$a'>Usun</a>"."</td></tr>";
}
mysqli_close($con);
?>
<button onclick="location.href='dodajW.php'">Dodaj wpis</button>
</body>
</html>