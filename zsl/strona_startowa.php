<!DOCTYPE html>
<html lang="en">

<?php session_start() ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>strona startowa</h4>
    <?php
    $name="janusz";

    //zmienna sesyjna
    $_SESSION['name']="Karol";
    echo "<br>". session_id() . "<br>";

?>
<br>
<a href="strona2.php?name=<?php echo $name ?>">bruh</a><br>
<a href="strona3.php?name=not_janusz">bruh2</a>

</body>
</html>