<?php
    session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'pt_db');

    if (!$connect){
        die('Ошибка подключения к Базе Данных');
    }
