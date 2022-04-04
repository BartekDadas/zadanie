<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="strona.css">
    <title>Rejestracja</title>
</head>
<body>
    <form method="POST">
        <p id="log1">Ustaw swoj login</p>
        <input id="log2" type="text" name="login">
        <p id="log3">Podaj swoj email</p>
        <input is="log4" type="text" name="email">
        <p id="log5">Ustaw haslo</p>
        <input id="log6" type="password" name="pass">
        <input name="btn_submit_rej" type="submit">
    </form>
    <?php
    if(isset($_POST['btn_submit_rej'])) {
        if(isset($_POST['login']) != "" && isset($_POST['email']) != "" && isset($_POST['pass']) != "") {
        $user = $_POST['login'];
        $email = $_POST['email'];
        $pass = MD5($_POST['pass']);
        $connection = mysqli_connect("localhost", "root", "", "zadanie_9_lekcji") or die ("Blad polaczenia");
        $query = "INSERT INTO users(`id`, `user`, `email`, `password`) VALUES 
        (NULL, '$user', '$email', '$pass');";
        mysqli_query($connection, $query) or die ("Blad. Nie dodano uzytkownika do bazy");
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['haslo'] = $_POST['pass'];
        mysqli_close($connection);
        } else {
            echo "Każde pole musi być wypełnione";
        }
    }
    ?>
    
</body>
</html>