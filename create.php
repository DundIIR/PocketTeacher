<?php
    require_once 'reg/connect.php';

    $word = $_POST['word'];
    $translate = $_POST['translate'];

    if(mb_strlen($word) < 1 || mb_strlen($word) > 100) {

        header('Location: profile.php');
    }
    elseif(mb_strlen($translate) < 1 || mb_strlen($translate) > 100) {

        header('Location: profile.php');
    }
    else{
        mysqli_query($connect, "INSERT INTO `word_and_translate` (`id`, `user_id`, `word`, `translate`) VALUES (NULL , '$_COOKIE[user]', '$word', '$translate')");
        header('Location: profile.php');
    }
?>