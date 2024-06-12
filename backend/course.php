<?php

/**
 * Запуск пользовательской сессии, если она для данного файла еще не запущена
 */
if (!isset($_SESSION))
    session_start();

/**
 * Подключение файла database.php
 */
require_once "database.php";

if (isset($_POST["courseIDToAdd"])) {
    if (isset($_SESSION["userID"])) {
        if (isUserCourseNotAdded($_SESSION["userID"], $_POST["courseIDToAdd"])) {
            addUserCourseByUserID($_SESSION["userID"], $_POST["courseIDToAdd"]);
            echo "Вы успешно записались на данный курс! Он был добавлен в ваш личный кабинет";
        } else {
            echo "Вы уже записаны на данный курс!";
        }
    } else {
        header("HTTP/1.1 201 OK");
        echo "Для записи на курс необходимо войти в аккаунт!";
    }
    connection->close();
    exit;
}

if (isset($_POST["courseIDToDelete"])) {
    removeUserCourseByUserID($_SESSION["userID"], $_POST["courseIDToDelete"]);
    connection->close();
    exit;
}


/**
 * Функция возвращает информацию о всех курсах (для отображения на странице каталога)
 */
function getCourseList()
{
    $sql = "SELECT * FROM courses";
    $statement = connection->prepare($sql);
    $statement->execute();
    $result = $statement->get_result();
    $statement->close();
    return $result;
}

/**
 * Функция возвращает информацию о курсе по его идентификатору (для отображения на странице курса)
 */
function getCourseByID($courseID)
{
    $sql = "SELECT * FROM courses WHERE ID = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('i', $courseID);
    $statement->execute();
    $result = $statement->get_result();
    $courseData = [];
    foreach ($result as $row)
        $courseData = $row;
    $statement->close();
    return $courseData;
}

/**
 * Функция проверяет, не добавлен ли данный курс в личный кабинет пользователя (если добавлен, то повторно не добавляем)
 *
 * @return bool Возвращает True, если данный курс уже добавлен, иначе False
 */
function isUserCourseNotAdded($userID, $courseID): bool
{
    $sql = "SELECT * FROM users_courses WHERE userID = ? AND courseID = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('ii', $userID, $courseID);
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
 * Функция связывает курс с пользователем по их идентификаторам, добавляя запись в базу данных
 * (в этот момент пользователь записывается на курс, курс будет добавлен в личный кабинет)
 */
function addUserCourseByUserID($userID, $courseID)
{
    $sql = "INSERT INTO users_courses (userID, courseID) VALUES (?, ?)";
    $statement = connection->prepare($sql);
    $statement->bind_param('ii', $userID, $courseID);
    $statement->execute();
    $statement->close();
}

function removeUserCourseByUserID($userID, $courseID)
{
    $sql = "DELETE FROM users_courses WHERE userID = ? AND courseID = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('ii', $userID, $courseID);
    $statement->execute();
    $statement->close();
}

/**
 * Функция возвращает информацию о всех курсах по конкретному пользователю
 * (для отображения списка курсов в личном кабинете)
 */
function getCourseListByUserID($userID)
{
    $sql = "SELECT courses.ID, courses.name, pictureName FROM courses
            JOIN users_courses ON courses.ID = users_courses.courseID
            JOIN users ON users_courses.userID = users.ID
            WHERE users.ID = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('i', $userID);
    $statement->execute();
    $result = $statement->get_result();
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }
    $statement->close();
    return $data;
}