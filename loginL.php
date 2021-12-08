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
<?php
  unset($_SESSION['nazwa']); // opróżnij wartość nazwy sesji 
  echo "Logowanie zostało przeprowadzone prawidłowe" // wyświetl
?>
<!-- Przekieruj do strony logowania -->
<button onclick="location.href='LoginW.php'">Zaloguj</button> 
</body>
</html>
