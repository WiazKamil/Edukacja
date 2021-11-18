<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href=style.css>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
    
    require_once './skrypty/connect.php';
    $sql="SELECT * FROM `users`";
    $result=$connect->query($sql);
    //print_r($user);
    
   /* 
    while($user=$result->fetch_assoc()){
    echo <<< USER
        id: $user[id]<br>
        imię i nazwksko: $user[name] $user[surname]
        <hr>

        
USER;
    }*/
    echo <<< TABLE
<table>
    <tr>
        <th>id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Dodanie konta</th>
        <th>Miasto</th>
    </tr>

TABLE;

    while ($user=$result->fetch_assoc()){
        echo <<< USER
        <tr>
        <td>$user[id]</td>
        <td>$user[name]</td>
        <td>$user[surname]</td>
        <td>$user[birthdat]</td>
        <td>$user[data_dodania]</td>
        <td>$user[city_id]</td>
    
        </tr>
USER;

    }

    echo "</table>";
?>

</body>
</html>