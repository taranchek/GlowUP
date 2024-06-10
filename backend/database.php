<?php

/**
 * Параметры подключения к базе данных
 */
const SERVER = "FVH1.spaceweb.ru";
const USERNAME = "taranchek";
const PASSWORD = "Taranchek_2004";
const DATABASE = "taranchek";

/**
 * Подключение к базе данных MySQL
 */
define("connection", mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE));
if (mysqli_connect_errno()) {
    exit("Ошибка подключения к базе данных MySQL: " . mysqli_connect_error());
}