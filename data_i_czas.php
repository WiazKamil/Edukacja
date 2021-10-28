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

    echo "dzień-miesiąc-rok<br>".date('d-m-Y')."<br>";
    echo "dzień-miesiąc-rok<br>".date('d-M-Y')."<br>";
    echo "dzień-miesiąc-rok<br>".date('d-F-Y')."<br>";

    setlocale(LC_ALL,'polish');
    echo strftime('%d %B %Y')."<br>";
    echo date('G:i:sa')."<br>";
    echo date('L')."<br>";//przestępny

?>
<script>
//setTimeout(function(){
//    window.location.reload();
//},1000);
</script>
<?php
    $date=getdate();
    echo $date['wday']." ";
    echo $date['yday']+1;
    echo " <br>".$date[0];

    //mktime()
    $today=mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('y'));
    echo "<br>". $today . "<br>";

    //ile lat mineło od 1970
    $year = $today/(60*60*24*365);
    $today2=mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('y')-1);
    $year2 = $today2/(60*60*24*365);
    echo "<br>". $year;
    echo "<br>". (int)$year;
    echo "<br>". $year2;
    echo "<br>". (int)$year2 ."<br><br>";
    /////////////////////////
?>
    <form method="GET">
        od <input type="date" name="data1"><br>
        do <input type="date" name="data2"><br>
        <input type="submit" value="sprawdź">
    </form>

<?php
    if(!empty($_GET['data1']) && !empty($_GET['data2'])){
        $date1=$_GET['data1'];
        $date2=$_GET['data2'];

        $date11 = explode("-", $date1);
        $date22 = explode("-", $date2);

        $date33[0]=$date22[0]-$date11[0];
        if($date11[1]>$date22[1]){
            
        }

        print_r($date33);
    }
?>

</body>
</html>