
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type="text/css" href = "styl.css">
</head>
<body>
<?php
session_start();
  if($_SESSION['nazwa']) { // jeżeli nazwa znajduje się już w sesji 
      echo "Użytkownik:"." ".$_SESSION['nazwa']; // wyświetl nazwę użytkownika
  }
  if (isset($_POST['nazwa'])) { // jeżeli użytkownik podał nazwe 
      $currentLogin = $_POST['nazwa']; //przydziel zmiennej wartość podanej nazwy przez użytkownika
      $_SESSION['nazwa'] = $currentLogin; // wartość przechowywanej nazwy sesji
      echo "<script>window.location.href = 'wyswietlW.php'</script>"; // przekieruj do strony na której się obecnie znajdujesz
      echo "Użytkownik:  $currentLogin";
  } 
?>
<h1>ZSBE Świdnica Forum dyskusyjne</h1>
<table>
<?php
$con = mysqli_connect("localhost", "root", "","trio") or die ("Błąd połączenia");// rozpoczęcie połączenia z bazą danych
$query="SELECT id,name_u,tresc FROM wpisy;";//stworzenie zapytania bazy danych o wyświetlenie nazw i wpisów z tablicy 
$result = mysqli_query($con,$query) or die ("Błąd zapytania"); // wykonanie zapytania 
while($row = mysqli_fetch_array($result)) { //
        if( $row['name_u'] == $_SESSION['nazwa']) { // jeżeli nazwa użytkownika zgadza się z nazwą użytkownika zamieszczonego wpisu 
            $_SESSION['id'] = $row['id'];
            echo "<tr bgcolor='red'><td>".$row['tresc']."</td><td>".$row['name_u']."</td><td>"."<a href = 'deleteW.php'>Usuń</a>"."</td></tr>";
            // wyświetl wiersz dla obecnie zalogowanego użytkownika
        } else {
            echo "<tr bgcolor='#66CCFF'><td>".$row['tresc']."</td><td>".$row['name_u']."</td><td>"."</td></tr>"; // wyświetl wiersz tablicy dla użytkownika
        }  
}
?>
</table>
<?php
mysqli_close($con); //zamknięcie połączenia z bazą
?>
<!-- Utwórz przycisk przekierowujący do strony z możliwością dodania wpisu -->
<button onclick="location.href='dodajW.php'">Dodaj wpis</button> 
<!-- Utwórz przycisk przekierowujący do strony wylogowania -->
<button id ="logout" onclick="location.href='loginL.php'">Wyloguj</button>
</body>
</html>