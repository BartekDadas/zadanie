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
<form  method="GET">
<div><input type="text" name="nazwa"></div>
<div><input type="submit" value="Zaloguj"></div>
</form>
<?php
$currentName = $_GET['nazwa'];
if(isset($_GET['nazwa'])){
       ?>
    <?php
    $_SESSION['nazwa']= $currentName;
    ?>   
    <script>window.location.href = 'wyswietlW.php';</script>
      <?php
    }
 ?>

</body>
</html>