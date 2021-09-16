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

$x = 10;
echo "<br>" . $x++ . "<br>" . ++$x;
echo "<br><br>" . $x . "<br>";
echo "<br>". $x-- . "<br>" . --$x . "<br><br>";


$x=1;
echo $x  . "<br>";//1
$x=$x++; 
echo $x  . "<br>";//1
$x=++$x;
echo $x  . "<br>";//2
$y=$x++;
echo $x  . "<br>";//3
echo $y  . "<br>";//3
$y=$x++;
echo $x . "<br>";//4
echo $y . "<br>";//3


echo "<br><br>.";
// this is a comment


?>
</div>
</body>
</html>