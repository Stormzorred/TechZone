<?php
    $connect = new mysqli("localhost", "root", "", "Techzone");
    if(!$connect){
        echo "Ошибка базы данных: ".mysqli_connect_error();
    }
?>