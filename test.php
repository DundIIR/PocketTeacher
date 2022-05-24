<?php
    session_start();
    if(!$_SESSION['user']){
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользовательский профиль</title>
    <link rel="stylesheet" href="css/style_profile.css">
</head>
<body>
<header>
    <div class="container">
        <div class="header_inner">
            <div class="header_logo"><img src="images/log2.jpg" id="logoTwo" alt="Picture" height="50px">Pocket Teacher</div>

            <naw class="nav">
                <a class="nav_link" href="#">Добавить</a>
                <a class="nav_link" href="#">Изменить</a>
                <a class="nav_link" href="#">Удалить</a>

            </naw>
        </div>
    </div>
</header>
<a class="exit" href="exit.php">Выход</a>


</body>
</html>