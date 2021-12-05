<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form id="logowanie" action="" method="post">
        Nazwa:<Input type="text" nazwa="nazwa"><br>
        Logowanie<input type="submit">     -->
<?php
echo Podaj nick
$data = $_POST['Nazwa']
if(isset($_GET["$data"])){
       ?>
    <?php
    $bar =$_GET["data"];
    $_SESSION['currentName'] = $bar;
    ?>   
    <script>window.location.href = 'wyswietlW.php';</script>
      <?php
    }
else{
   echo "Wprowadź nick";
 }
 ?>

</body>
</html>