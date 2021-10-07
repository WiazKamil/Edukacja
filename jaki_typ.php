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
    if(isset($_POST["wzrost"])){
        $w=$_POST["wzrost"];
        if($w>100 && $w<250){
            if($w>=200){
                echo "jesteś olbrzymem!";
            }
            else if($w>=180){
                echo "jesteś wysoki!";
            }
            else{
                echo "jesteś przeciętnego wzrostu";
            }
        }
        else{
            echo "nie masz wzrostu z przedziału 100 do 250";
        }
    }
    ?>
</body>
</html>