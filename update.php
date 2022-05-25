<?php

session_start();
if(!$_SESSION['user']){
    header('Location: index.php');
}
require_once 'reg/connect.php';

$word_and_translate_id = $_GET['id'];
$word_and_translate = mysqli_query($connect, "SELECT * FROM `word_and_translate` WHERE `id` = '$word_and_translate_id'");
$word_and_translate = mysqli_fetch_assoc($word_and_translate);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользовательский профиль</title>
    <link rel="stylesheet" href="css/style_profile.css">
</head>
<body>

<div class="wrap">
    <div class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo"><img src="images/log2.jpg" id="logoTwo" alt="Picture" height="50px">Pocket Teacher</div>

                <naw class="nav">
                    <a class="nav_link" href="#">Добавить</a>
                    <a class="nav_link" href="#">Удалить</a>
                    <a class="nav_link" href="exit.php">Выход</a>

                </naw>
            </div>
        </div>
    </div>
    <div class="container" id="container">
        <hr>
        <div class="style">

            <div class="state">
                <h4> Для чего и зачем нужен английский язык?<br /></h4>
                <div> Некоторые люди говорят, что очень необходимо изучать иностранные языки, но другие говорят, что учить иностранные языки не важны.
                    Что же насчет нас, то мы согласены с людьми, которые говорят о преимуществах изучения иностранных языков.

                    Во-первых, знание иностранного языка может помочь нам понимать людей со всего мира. Мы можем поддерживать связь с носителями языка.
                    Мы можем изучать историю их наций. Во-вторых, мы можем читать иностранную литературу в оригинале.
                    Это более интересно, ведь мы можем понять мысли автора, не переводчика. В-третьих, английский язык-язык игр, спорта, красоты и бизнеса.
                    Мы можем принять участие в международных спортивных соревнованиях, модельных показах или бизнес переговорах и мы можем быть уверены, что будем поняты верно, без каких-либо ошибок.
                    <br /> </div>
            </div>


            <div> В заключении мы бы хотели подчеркнуть, что изучение иностранных языков играет большую роль в современной жизни, потому что весь мир связан разными путями и мы должны поддерживать связь с людьми со всех уголков света.
                <br /> </div>
            <img src="images/tm.jpg" alt="Picture" height="400px" class="image_center"></a>
        </div>
        <div class="table_had">
            <form action="vendor.update.php" method="post">
                <input type="hidden" name="id" value="<?= $word_and_translate['id'] ?>">
                <input type="text" class="form-control" name="word"
                       id="word" placeholder="Введите слово" value="<?= $word_and_translate['word'] ?>">
                <input type="text" class="form-control" name="translate"
                       id="translate" placeholder="Введите перевод" value="<?= $word_and_translate['translate'] ?>"><br>
                <button class="nav_link" type="submit">Добавить</button>
            </form>
        </div>
    </div>

</body>
</html>
