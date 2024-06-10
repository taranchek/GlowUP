<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<body>
<?php
if (!isset($_SESSION["userID"])) {
    header("Location: entry.php");
    exit;
}
?>

<div class="comment">
    <div class="comment-text">Личный кабинет</div>
</div>

<div class="account">
    <div class="profile">
        <div class="name-girl">
            <img src="img/profile.png" alt="Фото">
            <div class="name-girl-text"><?= $_SESSION["name"] ?> <br> <?= $_SESSION["surname"] ?></div>
        </div>
        <div class="text-acc">
            <div class="zag-acc">Почта:</div>
            <div class="podz-acc"><?= $_SESSION["email"] ?></div>
            <div class="zag-acc">Дата рождения:</div>
            <div class="podz-acc">24 октября 2000</div>
            <div class="zag-acc">Номер телефона:</div>
            <div class="podz-acc">не указано</div>
        </div>
        <button class="acc-btn"><a class="izma" href="#">Изменить</a></button>
    </div>
    <div class="courses">
        <div class="my-courses">Мои курсы</div>
        <div class="course">
            <div class="course-card1">
                <div class="course-nazv">Как подготовить лицо к <br> макияжу</div>
                <button class="course-btn"><a class="course-btn-a" href="active_course.php">Продолжить</a></button>
            </div>
        </div>
        <div class="course">
            <div class="course-card2">
                <div class="course-nazv">Идеальные стрелки</div>
                <button class="course-btn"><a class="course-btn-a" href="active_course.php">Продолжить</a></button>
            </div>
        </div>
        <div class="course">
            <div class="course-card3">
                <div class="course-nazv">Свадебный макияж</div>
                <button class="course-btn"><a class="course-btn-a" href="active_course.php">Продолжить</a></button>
            </div>
        </div>
        <div class="course">
            <div class="course-card4">
                <div class="course-nazv">Идеальный макияж для себя</div>
                <button class="course-btn"><a class="course-btn-a" href="active_course.php">Продолжить</a></button>
            </div>
        </div>
        <button class="show-more-btn2" id="show-more-btn2">Показать все</button>
    </div>
</div>
</body>

<?php include "footer.php" ?>

<script>
    const courses = document.querySelectorAll('.course');
    const showMoreBtn = document.getElementById('show-more-btn2');
    let currentIndex = 0;

    function showCourses(startIndex, endIndex) {
        for (let i = startIndex; i < endIndex; i++) {
            if (courses[i]) {
                courses[i].style.display = 'block';
            }
        }
        currentIndex = endIndex;
        if (currentIndex >= courses.length) {
            showMoreBtn.style.display = 'none';
        }
    }

    showCourses(0, 2);

    showMoreBtn.addEventListener('click', function () {
        showCourses(currentIndex, currentIndex + 2);
    });
</script>

</html>