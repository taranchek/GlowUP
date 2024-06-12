<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в аккаунт</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<body>
<div class="content cont-vxod">
    <div class="polya polya-vxod">
        <form id="entry-form" onsubmit="sendData(); return false;">
            <div class="vxod-text">Вход в аккаунт</div>
            <div class="text-inp">Почта</div>
            <input type="text" name="email" class="pole-inp pole-inp2" required>
            <div class="text-inp">Пароль</div>
            <input type="password" name="password" class="pole-inp" required>
            <button type="submit" class="btn-register">Войти</button>
            <div><a class="nazv-pole pass" href="#">Забыли пароль?</a></div>
            <div class="nazv-pole rega-kn">Нет аккаунта? <a class="rega" href="registration.php">Загегистрироваться</a>
            </div>
        </form>
    </div>
</div>

<!--
Модальное окно, которое выводит некоторое сообщение при авторизации пользователя
-->
<dialog class="modal1">
    <div class="modal-content1">
        <p id="dialogText"></p>
        <button class="modal-btn" id="closeDialog">Ок</button>
    </div>
</dialog>

<?php include "footer.php" ?>

<!--
Функция, которая при авторизации пользователя создает POST запрос и отправляет его на бэкенд,
отображает модальное окно с некоторым ответом от сервера, а также закрывает его
-->
<script>
    function sendData() {
        let formData = new FormData(document.getElementById('entry-form'));
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'backend/login.php', true);
        xhr.onreadystatechange = function () {
            document.getElementById("dialogText").textContent = xhr.responseText;
            document.querySelector('dialog').showModal();

            document.querySelector('#closeDialog').onclick = function () {
                document.querySelector('dialog').close();
                if (xhr.status === 201) {
                    location.replace("./account.php")
                }
            }
        };
        xhr.send(formData);
    }
</script>

</html>