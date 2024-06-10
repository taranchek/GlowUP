<?php

/**
 * Инициализация сессии, это необходимо перед её уничтожением
 */
session_start();

/**
 * Уничтожение сеанса входа в систему
 */
session_destroy();

/**
 * Перенаправление пользователя на страницу входа в систему
 */
header("Location: ../entry.php");
