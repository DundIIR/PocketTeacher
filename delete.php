<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
    require_once 'reg/connect.php';

    $word_and_translate_id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `word_and_translate` WHERE `word_and_translate`.`id` = '$word_and_translate_id'");

    header('Location: profile.php');
    ?>