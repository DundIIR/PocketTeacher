<?php
    session_start();
    unset($_SESSION['user']);
    setcookie('user', $user['id'], time() - 3600, "/");
    setcookie('login', $user['login'], time() - 3600, "/");
    header('Location: index.php');

?>

