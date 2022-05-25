<?php
require_once 'reg/connect.php';
session_start();


$id = $_POST['id'];
$word = $_POST['word'];
$translate = $_POST['translate'];

if(mb_strlen($word) < 1 || mb_strlen($word) > 100) {
    header('Location: profile.php');
}
elseif(mb_strlen($translate) < 1 || mb_strlen($translate) > 100) {
    header('Location: profile.php');
}
else{
    mysqli_query($connect, "UPDATE `word_and_translate` SET `word` = '$word', `translate` = '$translate' WHERE `word_and_translate`.`id` = '$id'");
    header('Location: ../profile.php');
}
?>
