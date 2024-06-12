<?php

/**
 * Подключение файла database.php
 */
require_once "database.php";

/**
 * Получение параметров запроса, проверка почты и регистрация пользователя
 */
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
if (isEmailAvailable($email)) {
    register($name, $surname, $email, $password);
    header("HTTP/1.1 201 OK");
    echo "Вы успешно зарегистрированы! Теперь вы можете использовать ваши учетные данные для авторизации";
} else
    echo "Указанный адрес почты уже занят другим пользователем!";
connection->close();
exit;


/**
 * Метод проверяет доступность почты перед регистрацией пользователя
 *
 * @return bool Возвращает True, если почта доступна для регистрации, иначе False
 */
function isEmailAvailable($email): bool
{
    $sql = "SELECT * FROM users WHERE email = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('s', $email);
    $statement->execute();
    $statement->store_result();
    if ($statement->num_rows == 0) {
        $statement->close();
        return true;
    }
    $statement->close();
    return false;
}

/**
 * Метод производит регистрацию пользователя и его добавление в базу данных
 */
function register($name, $surname, $email, $password)
{
    $sql = "INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)";
    $statement = connection->prepare($sql);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $statement->bind_param('ssss', $name, $surname, $email, $password_hash);
    $statement->execute();
    $statement->close();
}

