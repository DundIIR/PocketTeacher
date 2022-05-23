<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];


    if(mb_strlen($login) < 5 || mb_strlen($login) > 30) {
       $_SESSION['message'] = "Такой логин недопустим!";
       header('Location: ../register.php');
    }
    elseif(mb_strlen($email) < 4 || mb_strlen($email) > 255) {
        $_SESSION['message'] = "Такой email недопустим!";
        header('Location: ../register.php');
    }
    elseif(mb_strlen($pass) < 4 || mb_strlen($pass) > 10) {
        $_SESSION['message'] = "Такой пароль недопустим!";
        header('Location: ../register.php');
    }
    else{
    $pass = md5($pass."fsd7f34h2gbe2");

//    $connect = mysqli_connect('localhost', 'root', '', 'pt_db');
//
//    $mysql = new mysqli('localhost', 'root', '', 'pt_db');
    mysqli_query($connect, "INSERT INTO `users` (`login`, `password`, `email`)
    VALUES('$login', '$pass', '$email')");
    $_SESSION['message'] = "Регистрация прошла успешно";
    header('Location: ../index.php');
    }
//    $mysql->close();
//
//    header('Location: /');