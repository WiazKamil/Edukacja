<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:pink;
        }
    </style>
</head>
<body>
    <form method="get">
    <input type="text" name="sideA" placeholder="podaj długość boku a"><br><br>
    <input type="submit" name="button"value="oblicz">
    </form>
</body>
    <?php
    if(isset($_GET['button'])){
        if(!empty($_GET['sideA'])){
            $sideA=str_replace(",",".",$_GET['sideA']);
            $pole=$sideA*$sideA;
            $obwod=$sideA*4;
            echo "Pole jest równe: $pole cm<sup>2</sup> <br> Obwód jest równy: $obwod";
        }
        else{
            echo "podaj długość boku!";
        }
    }
    ?>
</html>