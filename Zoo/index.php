<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje zoo</title>
    <link rel="stylesheet" href="styl_1.css?v=213742069">
</head>
<body>
    <div class="baner">
        <h1>Witamy w naszym zoo!</h1>
    </div>

    <div class="content">
        <div class="lewy_blok">

            <div class="pierwszy">
                <p>Odwiedź nasze drapieżniki!</p>
                <ul>
                    <?php include 'Skrypt1.php';?>
                </ul>
            </div>

            <div class="drugi">
                <img src="images.png" alt="koala" width="400px"></img>
                <p>Zespół Zoo Polska</p>
            </div>

            <div class="trzeci"
                    <p>Spotkaj nas w tych lokacjach!</p>
                    <ol>
                        <?php include 'Skrypt2.php';?>
                    </ol>
            </div>

        </div>

        <div class="prawy_blok">

            <div class="prawy_1">
                <p>Zasady przybywania w zoo</p>
                <ol>
                    <li>Nie dokarmiać zwierząt innym pokarmem niż wymienione!</li>
                    <ul>
                        <?php include 'Skrypt3.php';?>
                    </ul>
                    <li>Nie przeszkadzać zwierzakom!</li>
                    <li>Dobrze się bawić!</li>
                </ol>
            </div>

            <div class="prawy_2">
                <p>Baza danych:</p>
                <a href="baza.sql" alt="baza danych">Do pobrania</a>
            </div>

        </div>

    </div>

    <div class="stopka">
        <h1>Stronę przygotował: 03320606017</h1>
    </div>
</body>
</html>