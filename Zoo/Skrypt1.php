<?php

$BASE = 'NajlepszeZoo';
$USER = 'root';
$PASSWORD = '';
$SERVER = 'localhost';

$connect = new mysqli($SERVER, $USER, $PASSWORD, $BASE, 3306);

$sql = "SELECT imie, gatunek, nazwa FROM Zwierzeta INNER JOIN Dieta ON Dieta_id = Dieta.id";
$result = $connect -> query($sql);

    if ($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li>{$row['imie']}</td> (<td>{$row['gatunek']}</td>), <td>{$row['nazwa']}</li>";
        }
        $connect -> close();
    }

?>