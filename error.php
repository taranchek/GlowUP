<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка 404</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<body>
<div class="error">
    <div class="comment-text error-text">Страницы не существует</div>
    <img src="img/fourzerofour.png" class="fourzerofour" alt="">
    <div class="yps">Упс! Кажется, произошла какая то ошибка</div>
    <button class="btn-error"><a class="btn-error-a" href="index.php">На главную</a></button>
</div>
</body>

<?php include "footer.php" ?>

</html>