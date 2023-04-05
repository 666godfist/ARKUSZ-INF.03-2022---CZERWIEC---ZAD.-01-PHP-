<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner">
        <h1> Portal dla wędkarzy </h1>
    </div>
    <div class="lewyall">
    <div class="lewy1">
        <h3> Ryby zamieszkujące rzeki </h3>
        
    </div>

    <div class="lewy2">
        <h3> Ryby drapieżne naszych wód </h3>
        <table>
            <tr>
                <td> L.p </td>
            
            
                <td> Gatunek </td>
            
            
                <td> Występowanie </td>
            </tr>
            

        </table>
    </div>
    </div>
    <div class="prawy">
    <img src="ryba1.jpg" alt="Sum">
    <br><br><a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="stopka">
        <p> Stronę wykonał: Paweł Kozłowski </p>
    </div>
</body>
<?php
            $db = mysqli_connect ("localhost", "root", "", "wedkowanie");
            //mysql_select_db ("wedkowanie");
            //mysqli_query ($db, "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1;");
            $res = mysqli_query($db, "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1;");
            $sup = mysqli_fetch_array($res);
            print_r($sup);
        ?>
</html>