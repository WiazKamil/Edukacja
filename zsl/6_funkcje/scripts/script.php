<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dane pobrane z formularza</h3>
    <?php
    require_once '../functions/function.php';
    show();
    echo "<br>";
    if(!empty($_POST['name'])){
        echo showName(stringValidate($_POST['name'],5));
    }
    ?>
</body>
</html>