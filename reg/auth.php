<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $pass = md5($pass."fsd7f34h2gbe2");

//    $connect = mysqli_connect('localhost', 'root', '', 'pt_db');

//    $mysql = new mysqli('localhost', 'root', '', 'pt_db');
//
//    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = `$login` AND `pass` = `$pass`");


    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");


    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        print_r($user);

    }
    else{
        $_SESSION['message2'] = "Неверный логин или пароль";
        header('Location: ../index.php');
    }

//   var_dump($mysql->error);
//
//    $user = $result->fetch_assoc( );
//    if(count($user) == 0){
//        echo "Такой пользователь не найден";
//        exit();
//    }
//    var_dump($mysql->error);
//    print_r($user);
//    exit;
//
//    $mysql->close();
//
//    header('Location: /');


?>
