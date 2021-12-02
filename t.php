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
if(isset($_POST["submit"])){
    if($_POST["haslo"] == "sekret1"){
       ?>
    <script>window.location.href = 'wyswietl.php';</script>
      <?php
    }
    else{
       echo "Nieprawidłowe hasło";
    }
 }
 else{
   echo "Wprowadź hasło";
 }
 ?>
 <form method="POST" >
     <input type="password" name="haslo" placeholder="Podaj hasło">
     <input type="submit" name="submit" value="zaloguj">
 </form> 
 

</form>
<!-- $con =mysqli_connect("localhost", "root", "","trio") or die ("Błąd połączenia");
$query="INSERT INTO trio ('name') VALUES ('$nazwa');";
mysqli_query($con,$query) or die ("Błąd zapytania"); 
mysqli_close($con); -->
   </form>
</body>
</html>
