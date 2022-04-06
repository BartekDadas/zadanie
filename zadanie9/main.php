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
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
    <h2>Informatyka - przeliczanie</h2>
    <form method="GET">
        <p id="liczba_input"> Podaj liczbe</p>
        <input id="liczba" type="int" name="num"> 
        
        <p id="liczba_wejscie"> Typ liczby </p>
        Decymalny<input type="checkbox"  id="ten1"  name="dec">
        Szesnastkowy<input type="checkbox" id="sixteen1" name="hex" onclick="" >
        Osemkowy<input type="checkbox" id="eight1" name="egh" onclick="">
        Dwojkowy<input type="checkbox" id="two1" name="two" onclick="">
        <p id="liczba_zamiana"> Typ na jaki chcesz zamienic</p></br>
        Decymalny<input type="checkbox"  id="ten"  name="dec2" onclick="zamina(this)">
        Szesnastkowy<input type="checkbox" id="sixteen" name="hex2" onclick="zamina(this)">
        Osemkowy<input type="checkbox" id="eight" name="egh2" onclick="zamina(this)">
        Dwojkowy<input type="checkbox" id="two" name="two2" onclick="zamina(this)">
        <input name="btn_count" type="submit" value="Oblicz">
        
    </form>
   <div class="wyniki">
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
        <div class="left_part">
        <p id="temp_in">Twoja temperatura</p>
        <input id="temperatura" type="float" name="temp">
        <select name="typ_temp">
            <option id="c">C</option>
            <option id="f">F</option>
            <option id="k">K</optipon>
        </select>
        </div>
        <div class="right_part">
        <p>Rodzaj temperatury</p>
        <select name="rodzaj">
            <option id="cel">Celciusz</option>
            <option id="frh">Farenheit</option>
            <option id="kel">Kelvin</option>
        </select>
        <input type="submit" value="Przelicz" onclick="temp_result()"/>
        </div>
    </form>
    <p id="answer"></p>
    </div>
    <SCRIPT language="Javascript">
        var z2 = document.getElementById("two");
        var z8 = document.getElementById("eight");
        var z10 = document.getElemntById("ten");
        var z16 = document.getElementById("sixteen");
        
        var tC = document.getElementById("c");
        var tF = document.getElementById("f");
        var tK = document.getElementById("k");
        const cel = document.getElementById("cel");
        const frh = document.getElementById("frh");
        const kel = document.getElementById("kel");

        function temp_result(temperature) { 
            var temp = document.getElementById("temperatura").value;
            temp = temp.value;
            if(temp != null) {
                
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
        function zTwo(n) {
            n.value = parseInt(n, 2);
        }
        function zEight(n) {
            n.value = parseInt(n, 8);
        }
        function zSixteen(n) {
            n.value = parseInt(n, 16);
        }


        function zamina(n) { 
            if(z10.checked == "true") {
                paragraph(n.value);
            }
            if(z2.checked == "true") {
                n.value.toString(2);
                paragraph(n.value)
            }
            if(z8.checked == "true") {
                n.value.toString(8);
                paragraph(n.value);
            }   
            if(z16.checked == "true") {
                n.value.toString(16);
                paragraph(n.value);
            }        
        }


        function paragraph(element) {
            const para = document.createElement("p");
            para.innerHTML = "Twoj wynik: ".element;
            document.getElementById("wyniki").appenedChild(para);
        }

        function logOut() {
            <?php
            session_unset();
            ?>
        }

    </SCRIPT>
    <button style="background-color:#163d02" onclick="logOut()"><a href="sesja.php">Wyloguj sie</a></button>

</body>
</html>