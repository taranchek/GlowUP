<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<body>
<div class="content cont-rega">
    <div class="polya polya-rega">
        <form id="register-form" onsubmit="checkFormData(); return false;">
            <div class="vxod-text">Регистрация</div>
            <div class="text-inp">Имя</div>
            <input type="text" name="name" class="pole-inp pole-inp2" required>
            <div class="text-inp">Фамилия</div>
            <input type="text" name="surname" class="pole-inp pole-inp2" required>
            <div class="text-inp">Почта</div>
            <input type="text" name="email" class="pole-inp pole-inp2" required>
            <div class="text-inp">Пароль</div>
            <input type="password" name="password" class="pole-inp pole-inp2" onkeyup="checkPassword()" required>
            <div class="text-inp">Повторите пароль</div>
            <input type="password" name="confirm_password" class="pole-inp" onkeyup="checkPassword()" required>
            <button type="submit" class="btn-register">Зарегистрироваться</button>
            <div class="nazv-pole rega-kn">Уже есть аккаунт? <a class="rega" href="entry.php">Войти</a></div>
        </form>
    </div>
</div>

<!--<div class="content cont-rega">-->
<!--    <div class="polya polya-rega">-->
<!--        <form action="../backend/main/register.php" method="post">-->
<!--            <div class="vxod-text">Регистрация</div>-->
<!--            <div class="text-inp">Имя</div>-->
<!--            <input type="text" id="name" name="name" class="pole-inp pole-inp2"-->
<!--                   pattern="[\+][7][\(][0-9]{3}[\)][\-][0-9]{3}[\-][0-9]{2}[\-][0-9]{2}"-->
<!--                   title="Введите имя в формате 'Ааа'" required>-->
<!--            <div class="text-inp">Фамилия</div>-->
<!--            <input type="text" id="surname" name="surname" class="pole-inp pole-inp2" pattern="[А-Я][а-я]+"-->
<!--                   title="Введите фамилию в формате 'Ааа'" required>-->
<!--            <div class="text-inp">Почта</div>-->
<!--            <input type="text" id="email" name="email" class="pole-inp pole-inp2" pattern="[a-z0-9._]+@[a-z]+\.[a-z]+"-->
<!--                   title="Введите почту в формате 'ааа@ааа.ааа'" required>-->
<!--            <div class="text-inp">Пароль</div>-->
<!--            <input type="password" id="password" name="password" class="pole-inp pole-inp2" onkeyup="onChange()" minlength="6" required>-->
<!--            <div class="text-inp">Повторите пароль</div>-->
<!--            <input type="password" name="confirm_password" class="pole-inp" onkeyup="onChange()" required>-->
<!--            <span id='message'></span>-->
<!--            <button type="submit" class="btn-register">Зарегистрироваться</button>-->
<!--            <div class="nazv-pole rega-kn">Уже есть аккаунт? <a class="rega" href="entry.html">Войти</a></div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->

<!--
Модальное окно, которое отображается при указании уже занятой почты при регистрации
-->
<dialog class="dialog-window">
    <p id="dialogText"></p>
    <button class="dialog-button" id="closeDialog">Ок</button>
</dialog>
</body>

<?php include "footer.php" ?>

<!--
Функция, которая при регистрации пользователя создает POST запрос и отправляет его на бэкенд,
отображает модальное окно с некоторым ответом от сервера, а также закрывает его
-->
<script>
    function checkFormData() {
        let formData = new FormData(document.getElementById('register-form'));
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'backend/register.php', true);
        xhr.onreadystatechange = function () {
            document.getElementById("dialogText").textContent = xhr.responseText;
            document.querySelector('dialog').showModal();

            document.querySelector('#closeDialog').onclick = function () {
                document.querySelector('dialog').close();
                if (xhr.status === 0) {
                    location.replace("./entry.php")
                }
            }
        };
        xhr.send(formData);
    }
</script>

<!-- Функция для проверки совпадения паролей -->
<script>
    function checkPassword() {
        const password = document.querySelector("input[name=password]");
        const confirm_password = document.querySelector("input[name=confirm_password]");
        if (password.value === confirm_password.value) {
            confirm_password.setCustomValidity("");
        } else {
            confirm_password.setCustomValidity("Пароли не совпадают.");
        }
    }
</script>

</html>