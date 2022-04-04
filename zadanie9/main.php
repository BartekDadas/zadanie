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
    <h2>Informatyka - przeliczanie</h2>
    <form method="GET">
        <p id="liczba_input"> Podaj liczbe</p>
        <input id="liczba" type="int" name="num">
        <p id="liczba_wejscie"> Typ liczby </p>
        Decymalny<input type="checkbox"  id="ten1"  name="dec">
        Szesnastkowy<input type="checkbox" id="sixteen1" name="hex" >
        Osemkowy<input type="checkbox" id="eight1" name="egh">
        Dwojkowy<input type="checkbox" id="two1" name="two">
        <p id="liczba_zamiana"> Typ na jaki chcesz zamienic</p></br>
        Decymalny<input type="checkbox"  id="ten"  name="dec2" onclick="ten()">
        Szesnastkowy<input type="checkbox" id="sixteen" name="hex2" onclick="sixteen()">
        Osemkowy<input type="checkbox" id="eight" name="egh2" onclick="eight()">
        Dwojkowy<input type="checkbox" id="two" name="two2" onclick="two()">
        <input name="btn_count" type="submit" value="Oblicz">
    </form>
    <div id="wyniki">
    </div>
    
    <?php
    if(isset($_GET['btn_count'])) {
        if(isset($_GET['num']) != "") {
            $liczba = $_GET['num'];
            $connect = mysqli_connect("localhost", "root", "", "zadanie_9_lekcji") or die("Blad polaczenia");
            $query = "SELECT liczba FROM `tabela_uzytych_liczb` WHERE `liczba` = $liczba LIMIT 1;";
            $result = mysqli_query($connect, $query) or die("Blad zapytania o liczbe");
            if(mysqli_num_rows($result) == 1) {
                echo "Liczba byla juz uzyta";
            } else {
                $query = "INSERT INTO `tabela_uzytych_liczb`(id_l, liczba) VALUES (NULL, '$liczba');";
                mysqli_query($connect, $query) or die ("Blad dodania liczby");
                // echo "$liczba";
            }
            mysqli_close($connect);

        }
    }
    ?>
    <h2> Fizyka - obliczanie temperatur</h2>
    <form method="GET">
        <p id="temp_in">Twoja temperatura</p>
        <input id="temperatura" type="float" name="temp">
        <select name="typ_temp">
            <option id="c">C</option>
            <option id="f">F</option>
            <option id="k">K</optipon>
        </select>
        <p>Rodzaj temperatury</p>
        <select name="rodzaj">
            <option id="cel">Celciusz</option>
            <option id="frh">Farenheit</option>
            <option id="kel">Kelvin</option>
        </select>
        <input type="submit" value="Przelicz" onclick="temp_result()"/>

    </form>
    <p id="answer"></p>
    <SCRIPT language="Javascript">
   
        function temp_result() { 
            var temp = document.getElementById("temperatura");
            if(temp != null) {
                var tC = document.getElementById("c");
                var tF = document.getElementById("f");
                var tK = document.getElementById("k");
                const cel = document.getElementById("cel");
                const frh = document.getElementById("frh");
                const kel = document.getElementById("kel");
                if(tC.selected == "true") {
                    if(frh.selected == "true") {
                       temp = (temp*9)/5 + 32; 
                        const p = document.getElementById("answer");
                        p.innerHTML = temp;
                    }
                    if(kel.selected == "true") {
                        temp = temp +273.15;
                        const p = document.getElementById("answer");
                        p.innerHTML = temp;
                        // document.write(temp);
                    
                    }
                } 
                if(tF.selected == "true") {
                    if(cel.selected == "true") {
                        temp = (temp*5)/9 - 32;
                        const p = document.getElementById("answer");
                        p.innerHTML = temp;
                    }
                    if(kel.selected == "true") {
                        (temp - 459.67)*9/5; 
                        const p = document.getElementById("answer");
                        p.innerHTML = temp;
                    }
                }  
                if(tK.selected == "true") {
                    if(cel.selected == "true") {
                        temp = temp -273.15;
                        const p = document.getElementById("answer");
                        p.innerHTML = temp);
                    }
                    if(frh.selected == "true") {
                        temp = (temp - 459.67)*9/5;
                        const p = document.getElementById("answer");
                        p.innerHTML = temp;
                    }
                }
            }

        }


        function two() {
            var n = document.getElementById("liczba");
            var cb = document.getElementById("two");
            var cb2 = decument.getElementById("two1");
            var cb8 = document.getElementById("eight1");
            var cb16 = document.getElementById("sixteen1");
            // if(cb2.checked == "true") {
            //     n = parseInt(n, 2);
            // }  
            if(cb8.checked == "true") {
                n = parseInt(n, 8);
            }   
            if(cb16.checked == "true") {
                n = parseInt(n, 16);
            }        
            
            if(n == "") {
                test.style.display="none";
            } else {
                if(cb.checked == true) {                   
                    n.toString(2);
                    const para = document.createElement("p");
                    para.innerHTML("Twoj wynik: ".n);
                    document.getElementById("wyniki").appenedChild(para);
                }
            }
        }
        function eight() {
            var n = document.getElementById("liczba");
            var cb = document.getElementById("eight");
            var cb2 = decument.getElementById("two1");
            var cb8 = document.getElementById("eight1");
            var cb16 = document.getElementById("sixteen1");
            if(cb2.checked == "true") {
                n = parseInt(n, 2);
            }  
            // if(cb8.checked == "true") {
            //     n = parseInt(n, 8);
            // }   
            if(cb16.checked == "true") {
                n = parseInt(n, 16);
            }        
            
            if(n == "") {
                test.style.display="none";
            } else {
                if(cb.checked == true) {
                    n.toString(8);
                    const para = document.createElement("p");
                    para.innerHTML("Twoj wynik: ".n);
                    document.getElementById("wyniki").appenedChild(para);
                }
            }
        }
        function ten() {
            var n = document.getElementById("liczba");
            var cb = document.getElementById("sixteen");
            var cb2 = decument.getElementById("two1");
            var cb8 = document.getElementById("eight1");
            var cb16 = document.getElementById("sixteen1");  
            
            if(n == "") {
                test.style.display="none";
            } else {
                if(cb.checked == true) {
                    if(cb2.checked == "true") {
                        n = parseInt(n, 2);
                    }  
                    if(cb8.checked == "true") {
                        n = parseInt(n, 8);
                    }          
                    if(cb16.checked == "true") {
                        n = parseInt(n, 16);
                    }
                    const para = document.createElement("p");
                    para.innerHTML("Twoj wynik: ".n);
                    document.getElementById("wyniki").appenedChild(para);
                    
                }

            }

        }
        function sixteen() {
            var n = document.getElementById("liczba");
            var cb = document.getElementById("sixteen");
            var cb2 = decument.getElementById("two1");
            var cb8 = document.getElementById("eight1");
            var cb16 = document.getElementById("sixteen1");
            if(cb2.checked == "true") {
                n = parseInt(n, 2);
            }  
            if(cb8.checked == "true") {
                n = parseInt(n, 8);
            }   
            // if(cb16.checked == "true") {
            //     n = parseInt(n, 16);
            // }        
            
            if(n == "") {
                test.style.display="none";
            } else {
                if(cb.checked == true) {
                    n.toString(16);
                    const para = document.createElement("p");
                    para.innerHTML("Twoj wynik: ".n);
                    document.getElementById("wyniki").appenedChild(para);
                }
            }

        }
        function logOut() {
            <?php
            session_unset();
            ?>
        }
    </SCRIPT>
    <button onclick="logOut()"><a href="sesja.php">Wyloguj sie</a></button>

</body>
</html>