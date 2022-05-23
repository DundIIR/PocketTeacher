<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="style.css">
  <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">  -->
</head>
<body>
<!--
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="check.php" method="post">
                    <input type="text" class="form-control" name="login"
                           id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="pass"
                           id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                </form>
            </div>
         </div>
-->

<div class="container mt-4">

    <p class="msg_1">
        <?php
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
        ?>
    </p>
    <p class="msg_2">
        <?php
        echo $_SESSION['message2'];
        unset ($_SESSION['message2']);
        ?>
    </p>
    <h1>Aвторизация</h1>
    <form action="reg/auth.php" method="post">
        <input type="text" class="form-control" name="login"
               id="login" placeholder="Введите логин"><br>
        <input type="password" class="form-control" name="pass"
               id="pass" placeholder="Введите пароль"><br>
        <button class="btn" type="submit">войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php"> зарегистрируйтесь</a>
            <?php unset ($_SESSION['message']) ?>
        </p>
    </form>
</div>


</body>
</html>