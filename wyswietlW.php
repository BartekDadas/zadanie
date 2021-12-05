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
<?php
$current_User = $_SESSION_['currentName']
$con =mysqli_connect("localhost", "root", "","trio") or die ("Błąd połączenia");// rozpoczęcie połączenia z bazą danych
$query="SELECT name,tresc FROM wpisy;";//stworzenie zapytania bazy danych o wyświetlenie nazw i wpisów z tablicy 
$result = mysqli_query($con,$query) or die ("Błąd zapytania"); // wykonanie zapytania 
while($row = mysqli_fetch_array($result)) { //
    if('name' == '$current_User') {
        echo "<tr><td>".$row['tresc']."</td><td>".$row['name']."</td><td>"."<form method='post'><input type='button' onClick=' deleateBtn()' value='X'/></form>"."</td></tr>";
    } else {
        echo "<tr><td>".$row['name']."</td><td>".$row['tresc']."</td><td>"."</td></tr>";// wyswietlenie tablicy z nazwami i wpisami
    }
}
mysqli_close($con);// zamknięcie połączenia
?>
<script language = "JavaScript">
function deleateBtn(){
    if(isset($_POST['buttonD'])) {
        $q ="";
        $r=mysqli_query($con,$q) or die ("Błąd zapytania o usunięcie");
    }
}
</script>
<!-- Stworzenie powrotu do strony z wyświetlaniem postów -->
<button onclick="location.href='dodajW.php'">Dodaj wpis</button>
</body>
</html>