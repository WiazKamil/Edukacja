<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>POLE TRÓJKĄTA</h2>
    
    <?php
    //grupa 1
    //utwórz plik o nazwie swojego nazwiska i rozszerzeniu php 
    //dodaj w pliku nagłówek 2 stopnia o treści pole trójkąta
    //dodaj skrypt w osobnym pliku który pozwoli obliczyć pole trójkąta
    //jeśli użytkownik nie wypełni wszystkich pól to cofnie go do strony początkowej
    //w skrypcie wyślij wynik pola pamiętaj o indeksie górnym
    
    //dodaj nowy plik w którym będzie możliwość wprowadzenia formularzu swojego wzrostu po wpisaniu wzrostu użytkownik
    //zostanie przekierowany do strony ze skryptem
    //wyświetl na tej stronie informacje o wzroście i sprawdź czy wzrost jest z przedziału 100 - 250 cm 
    //jeśli <200 "jesteś olbrzymem!" jeśli 180-200 "jesteś wysoki" w przeciwnym razie "średni wzrost
    ?>

<form action="pole.php" method="POST">
    <input type="text" name="podstawa" placeholder="długość podstawy"><br>
    <input type="text" name="wysokosc" placeholder="wysokość"><br>
    <input type="submit" value="oblicz pole">
</form>

</body>
</html>