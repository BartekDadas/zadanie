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

$con =mysqli_connect("localhost", "root", "","trio") or die ("Błąd połączenia");
$query="SELECT name,tresc FROM wpisy;";
$result = mysqli_query($con,$query) or die ("Błąd zapytania"); 
while($row = mysqli_fetch_array($result)) {
   echo "<tr><td>".$row['name']."</td><td>".$row['tresc']."</td></tr>";
}
mysqli_close($con);
?>
<form method="GET">
</form>
</body>
</html>
