<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!empty($_POST["podstawa"]) && !empty($_POST["wysokosc"])){
        $a=$_POST["podstawa"];
        $h=$_POST["wysokosc"];
        $P=$a*$h;
        $P=$P/2;
        echo "<div style='color:white'>pole trójkąta jest równe:$P cm<div style='font-size:10px; display:inline-block; color:black;'>2</div>";
        echo "<div style='color:black'>pole trójkąta jest równe:$P cm";
    }
    else{
    ?>
    <script>
    history.back();
    </script>

    <?php
    }
    ?>
</body>
</html>