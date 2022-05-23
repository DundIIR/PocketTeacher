<?php
$to = "abc@gmail.com";
$subject = "Robot - Робот";
$message = "Hello World!<br /><i>Это письмо отправлено <b>роботом</b>
  и отвечать на него не нужно!</i>";
$headers = "From: PocketTeacher";
mail ($to, $subject, $message, $headers);
?>