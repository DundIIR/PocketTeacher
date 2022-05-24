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
    </div>
    <div class="container">
        <div class="header_inner">
            <div class="header_logo"><img src="log2.jpg" id="logoTwo" alt="Picture" height="50px">Pocket Teacher</div>

            <naw class="nav">
                <a class="nav_link" href="#">Добавить</a>
                <a class="nav_link" href="#">Изменить</a>
                <a class="nav_link" href="#">Удалить</a>
                <a class="nav_link" href="exit.php">Выход</a>
            </naw>

        </div>

    <hr>
    <h4> Для чего и зачем нужен английский язык?<br /></h4>
    <div align="justify" > Некоторые люди говорят, что очень необходимо изучать иностранные языки, но другие говорят, что учить иностранные языки не важны.
        Что же насчет нас, то мы согласены с людьми, которые говорят о преимуществах изучения иностранных языков.

        Во-первых, знание иностранного языка может помочь нам понимать людей со всего мира. Мы можем поддерживать связь с носителями языка.
        Мы можем изучать историю их наций. Во-вторых, мы можем читать иностранную литературу в оригинале.
        Это более интересно, ведь мы можем понять мысли автора, не переводчика. В-третьих, английский язык-язык игр, спорта, красоты и бизнеса.
        Мы можем принять участие в международных спортивных соревнованиях, модельных показах или бизнес переговорах и мы можем быть уверены, что будем поняты верно, без каких-либо ошибок.
    <br /> </div>
        <div align="justify"> В заключении мы бы хотели подчеркнуть, что изучение иностранных языков играет большую роль в современной жизни, потому что весь мир связан разными путями и мы должны поддерживать связь с людьми со всех уголков света.
    <br /> </div>
    <img src="tm.jpg" alt="Picture" height="400px" class="image_center"></a>
    </div>
</header>


</body>
</html>