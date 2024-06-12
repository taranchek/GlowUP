<?php

/**
 * Запуск пользовательской сессии
 */
session_start();

/**
 * Подключение файла database.php
 */
require_once "database.php";

/**
 * Получение параметров запроса, проверка почты, пароля и авторизация пользователя
 */
$email = $_POST['email'];
$password = $_POST['password'];
if (isEmailExist($email)) {
    if (isUserLoggedIn($email, $password)) {
        header("HTTP/1.1 201 OK");
        echo "Вы успешно авторизованы! Сейчас вы будете перенаправлены в личный кабинет";
    } else {
        echo "Некорректный пароль, повторите попытку!";
    }
} else {
    echo "Указанный адрес почты не существует!";
}
connection->close();
exit;

/**
 * Метод проверяет, существует ли почта, указанная пользователем
 *
 * @return bool Возвращает True, если указанная почта существует, иначе False
 */
function isEmailExist($email): bool
{
    $sql = "SELECT * FROM users WHERE email = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('s', $email);
    $statement->execute();
    $statement->store_result();
    if ($statement->num_rows != 0) {
        $statement->close();
        return true;
    }
    $statement->close();
    return false;
}

/**
 * Метод производит авторизацию пользователя, проверяя корректность введенного пароля
 *
 * @return bool Возвращает True, если пользователь успешно авторизован, иначе False
 */
function isUserLoggedIn($email, $password): bool
{
    $sql = "SELECT id, password, name, surname FROM users WHERE email = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('s', $email);
    $statement->execute();
    $statement->bind_result($id, $password_hash, $name, $surname);
    $statement->fetch();
    if (password_verify($password, $password_hash)) {
//        session_regenerate_id();
        $_SESSION["userID"] = $id;
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        $_SESSION["surname"] = $surname;
        $statement->close();
        return true;
    }
    $statement->close();
    return false;
}
