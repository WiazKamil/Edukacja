<!DOCTYPE html>
<html>
<body style="background-color:lightblue">

<div style="background-color:pink;border:2px black solid;border-radius:10px;text-align:center;">
<?php
echo "<br>";
echo "yoho <br> najs <br>";
$name = "janusz";
echo $name . "<br> $name" . '<br> $name <br>' ;

$name = "Nairobi";
echo<<<ETYKIETA
<br><br> Yo bebo agua con naranja <br> me gusto mucho $name <br>

ETYKIETA;


$tekst = <<<TEKST
<br>
tu llama Pablo
<br>
TEKST;

echo $tekst;

echo <<<'OK'
<br>
para pa ra pa pa ra
<br>
OK;

echo "imie : $name nazwisko : Wiąz";

echo "<br><br>.";
// this is a comment
?>
</div>
</body>
</html>
