<?php

/**
 * Подключение файла database.php
 */
require_once "database.php";


if (isset($_SESSION["userID"]) & isset($_POST["courseID"])) {
    addUserCourseByUserID($_SESSION["userID"], $_POST["courseID"]);
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

function addUserCourseByUserID($userID, $courseID)
{
    $sql = "INSERT INTO users_courses (userID, courseID) VALUES (?, ?)";
    $statement = connection->prepare($sql);
    $statement->bind_param('ii', $userID, $courseID);
    $statement->execute();
    $statement->close();
}

function removeUserCourseByUserID($ID)
{

}

/**
 * Функция возвращает информацию о всех специалистах по конкретной услуге
 * (для отображения на странице услуги, и для выпадающего списка при записи)
 */
function getCourseListByUserID($ID)
{
    $sql = "SELECT surname, doctors.name, patronymic, quote, doctors.pictureName FROM doctors 
            JOIN doctors_services ON doctors.ID = doctors_services.doctorID
            JOIN services ON doctors_services.serviceID = services.ID
            WHERE services.name = ?";
    $statement = connection->prepare($sql);
    $statement->bind_param('s', $name);
    $statement->execute();
    $result = $statement->get_result();
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }
    $statement->close();
    return $data;
}