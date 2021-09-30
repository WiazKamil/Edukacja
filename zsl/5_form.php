<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightblue;
        }
    </style>
</head>
<body>
    <h3>FIGURY GEOMETRYCZNE</h3>
    <form action="/skrypty/5_script.php" method="post">
        <input type="text" name="name" placeholder="podaj imię"><br><br>
        <input type="radio" name="geometricfigure" value="kwadrat" checked>kwadrat<br><br>
        <input type="radio" name="geometricfigure" value="prostokat">prostokąt<br><br>
        <input type="submit" value="zatwierdź dane">
    </form>

</body>
</html>