<?php
$BASE = 'NajlepszeZoo';
$USER = 'root';
$PASSWORD = '';
$SERVER = 'localhost';

$connect = new mysqli($SERVER, $USER, $PASSWORD, $BASE, 3306);

$sql = "SELECT * FROM Lokacje";
$result = $connect -> query($sql);

    if ($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["miasto"]. " ulica " . $row["adres"]. ", " . $row["tel_kontaktowy"] . "</li>";
        }
        $connect -> close();
    }

?>