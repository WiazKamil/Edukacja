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
    <h4>strona 3</h4>
    <?php

    echo $_GET['name'] . "<br>" . $_SESSION['name'] ."<br>";
    session_regenerate_id();
    unset($_SESSION['name']);
    echo $_GET['name'] . "<br>" . $_SESSION['name'] ."<br>";
    echo "<br>". session_id() . "<br>";

?>

<a href="strona_startowa.php">bruh</a><br>
<a href="strona2.php?name=<?php echo $name ?>">bruh</a><br>

</body>
</html>