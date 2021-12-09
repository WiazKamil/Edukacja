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
    $sql="SELECT * FROM `users` INNER JOIN `cities` ON users.city_id=cities.city_id";
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
        <td>$user[city]</td>
        <td><a href="./skrypty/deleteuser.php?userId=$user[id]">Usuń</a></td>
    
        </tr>
USER;

    }

    echo "</table>";
?>

<br>
<?php

if(isset($_GET['addUser'])){
    echo <<<FORMADDUSER

    <h4>Dodawanie Użytkowników</h4><br>
    <form action="./skrypty/add_user.php" method="post">
    <input type="text" name="name" placeholder="podaj imię"><br><br>
    <input type="text" name="surname" placeholder="podaj nazwisko"><br><br>
    <input type="date" name="birthday" placeholder="podaj urodziny"><br><br>
    <input type="text" name="cityid" placeholder="podaj miasto"><br><br>
    <input type="submit" value="dodaj użytkownika">
    </form>

FORMADDUSER;
}
else{
    echo '<a href="./0_4_db_insert.php?addUser=">Dodaj użytkownika</a>';
}

$connect->close();
?>



</body>
</html>