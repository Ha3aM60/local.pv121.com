<?php
//робимо змінну для імені користувача підключенного до БД
$user = "root";
//робимо змінну для пароля користувача підключенного до БД
$pass = "";

//пробуємо законектитись до БД
try {
    //оголощуєм конструктор для підключення до БД, передаєм силку на БД, ім'я користувача, та його пароль
    $dbh = new PDO("mysql:host=localhost;dbname=pv121", $user, $pass);
} catch (Exception $ex) {
    //якщо виникає помилка при підключенні, то виводим повідомлення про помилку
    print "Error! " . $ex->getMessage() . "<br/>";
    //припиняєм виконання скрипта
    exit();
}
