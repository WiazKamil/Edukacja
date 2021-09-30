<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightyellow;
        }
    </style>
</head>
<body>
    <form method="get">
    <input type="text" name="sideA" placeholder="podaj długość boku a"><br><br>
    <input type="text" name="sideB" placeholder="podaj długość boku b"><br><br>
    <input type="submit" name="button" value="oblicz">
    </form>
</body>
    <?php
    if(isset($_GET['button'])){
        if(!empty($_GET['sideA']) && !empty($_GET['sideA'])){
            $sideA=str_replace(",",".",$_GET['sideA']);
            $sideB=str_replace(",",".",$_GET['sideB']);
            $pole=$sideA*$sideB;
            $obwod=$sideA*2+$sideB*2;
            echo "Pole jest równe: $pole <br> Obwód jest równy: $obwod";
        }

        else{
            echo "wypełnij pola";
        }
    }
    ?>
</html>