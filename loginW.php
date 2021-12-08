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
<h2>Podaj nick</h2>
<!-- Po naciśnieciu zaloguj przekieruj do strony | metoda pobierz dane od użytkownika jawnie  -->
<form action="wyswietlW.php"  method="POST"> 
<!-- Utwórz pole z możliwością wpisania nazwy -->
<div><input type="text" name="nazwa"></div>
<!-- Przycisk zatwierdź -->
<div><input type="submit" value="Zaloguj"></div>
</form>
</body>
</html>