<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" type="text/css" href="styl_1.css">
</head>
<body>
    <?php
        $c = mysqli_connect('localhost','root','','wedkowanie');

        mysqli_close($c);
    ?>
    <header id="baner">
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <li>Szczupak pływa w rzece Warta-Obrzycko, Wielkopolskie</li>
            <li>Leszcz pływa w rzece Przemsza k. Okradzinowa, Slaskie</li>
        </ol>
    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
        </table>
    </div>
    <footer id="stopka">
        <p>Stronę wykonał: Kacper Soćko</p>
    </footer>
</body>
</html>