<?php
echo "<hr>";

$tekst = <<< L
ZSŁ 
Zespół 
Szkół 
łączności

L;

echo nl2br($tekst);

$name = 'jaNuSZ';
$nameSurname = "jAnusZ koWAlski";

echo strtolower($name) . "<br>";
echo strtoupper($name) . "<br>";
echo ucfirst($nameSurname) . "<br>" ;
echo ucwords($nameSurname) . "<br>" ;
echo ucwords(strtolower($nameSurname)) . "<br>";

$lorem="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam nisi in aliquet tincidunt. Nullam non tortor posuere, dapibus tellus eget, facilisis orci. Donec lacinia diam eget nulla fringilla imperdiet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Fusce ut vulputate diam. Praesent eget magna vitae ipsum posuere pulvinar.";

$col = wordwrap($lorem,30,"<br>[Bababoey]<br>");

echo $lorem . "<br> <br>";

echo $col . "<br>";

//wyczyszczenie bufora
//ob_clean();

//usuwanie białych znaków
$name="Jan";
$name1="    J  a  n   ";
echo "<br><br> długość \$name: ".strlen($name)."<br>";
echo "długość \$name1: ".strlen($name1)."<br>";
echo "<br>";
echo strlen(ltrim($name1));
echo "<br>";
echo strlen(rtrim($name1));
echo "<br>";
echo strlen(trim($name1));
echo "<br>";

//przeszukiwanie ciągów znaków

$mail="janusz@gmail.com";

echo strstr($mail, "@");
echo "<br>";
echo strstr($mail, "G");
echo "<br>";
echo stristr($mail, "G");
echo "<br>";

//substr

echo substr($mail,2);
echo "<br>";
echo substr($mail,-6);
echo "<br>";
echo substr($mail, -2, 1 );
echo "<br>";

$personality="Janusz Kowalski";
$name=substr($personality,0,6);
$surname=substr($personality, -8);
echo $name;
echo "<br>";
echo $surname;

echo "<hr>";

?>