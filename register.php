<?php
    session_start();
    if($_SESSION['user']){
        header('Location: ../test.php');
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрции</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="https://t.me/students_pocket_teacher_bot"> <img class="qr" src="images/qr.png" alt="Picture" height="300px"></a>
<img src="images/log2.jpg" id="logoTwo" alt="Picture" height="100px">
    <div class="container mt-4">
        <p class="msg_2">
            <?php
                echo $_SESSION['message'];
                unset ($_SESSION['message']);
            ?>

        </p>
        <p class="msg_1">
            <?php
            echo $_SESSION['message2'];
            unset ($_SESSION['message2']);
            ?>

        </p>
        <h1>Регистрация</h1>
        <form action="reg/check.php" method="post">

            <input type="text" class="form-control" name="login"
                   id="login" placeholder="Введите логин" autocomplete="off"><br>
            <input type="email" class="form-control" name="email"
                   id="email" placeholder="Введите e-mail"><br>

<!--            <span class="icon_pass" id="icon_pass"> &#9725;</span>-->
            <input type="password" type="password"
                    class="form-control" name="pass"
                   id="pass" placeholder="Введите пароль"><br>
            <button class="btn" type="submit">войти</button>
            <p>
                У вас уже есть аккаунта? - <a href="/"> авторизуйтесь</a>
            </p>
        </form>
    </div>
</body>
</html>
<?php
