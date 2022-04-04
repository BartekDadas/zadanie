<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="strona.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <p id="tekst">Login</p><br>
        <input type="text" name="login"><br>
        <p id="tekst">Hasło</p><br>
        <input type="password" name="haslo"><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['login']) && isset($_POST['haslo'])) {
            // session_start();
            $login = $_POST['login'];
            $password = $_POST['haslo'];
            echo $password;
            $con =  mysqli_connect("localhost", "root", "", "zadanie_9_lekcji") or die ("Blad polaczenia");
            $querryLog = "SELECT * FROM `users` WHERE `password`= MD5('$password') and user='$login';";
            // echo $querryLog;
            $result = mysqli_query($con, $querryLog) or die ("Blad logowania. Sprawdz czy login i haslo sa poprawne");
            $rows= mysqli_num_rows($result);
            // echo $rows;
            if($rows == 1) {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['login'] = $_POST['haslo'];
                header("Location: main.php");
            }
            mysqli_close($con);
        }

    ?>
    
</body>
</html>