<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];


$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$mail = htmlspecialchars($mail);


$name = urldecode($name);
$tel = urldecode($tel);
$mail = urldecode($mail);

$name = trim($name);
$tel = trim($tel);
$mail = trim($mail);


if (mail("ilya.boomik@yandex.ru",
        "Новое письмо с сайта",
        "Имя: ".$name."\n".
        "Телефон: ".$tel."\n".
        "Почта: ".$mail."\n".)



 ) {
     echo ('Письмо успешно отправлено!');

 }
else {
    echo ('Есть ошибки! Проверьте данные ....')
 }










?>