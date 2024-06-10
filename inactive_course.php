<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы по макияжу</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<?php
require_once "backend/course.php";
$courseData = getCourseByID($_GET["courseNumber"]);
?>

<body>
<div class="course-cont">
    <div class="zag-course">О курсе</div>
    <div class="course-block">
        <div class="infa-course">
            <div class="nazv-course"><?php echo $courseData["name"] ?></div>
            <div class="onisan-course"><?php echo $courseData["description"] ?></div>
            <button class="btn-course">Записаться на курс</button>
        </div>
        <img class="course-img" src="img/<?php echo $courseData["pictureName"] ?>" alt="">
    </div>
</div>

<div class="willbe">
    <div class="zag-willbe">Что будет в курсе?</div>
    <div class="text-willbe"><?php echo $courseData["details"] ?></div>
</div>

<div class="program-cont">
    <div class="zag-program">Программа курса</div>
    <div class="lesson2">
        <div class="lesson-num">Урок 1</div>
        <div class="lesson-nazv">Основы</div>
        <div class="lesson-opisan">Объяснение принципов и целей макияжа, обеспечивающего натуральный и свежий вид</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 2</div>
        <div class="lesson-nazv">Подготовка кожи</div>
        <div class="lesson-opisan">Очищение, увлажнение, использование базы под макияж</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 3</div>
        <div class="lesson-nazv">Подбор тонального средства</div>
        <div class="lesson-opisan">Выбор оттенка, текстуры, и формул, соответствующих натуральному эффекту</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 4</div>
        <div class="lesson-nazv">Коррекция и выравнивание</div>
        <div class="lesson-opisan">Использование консилера, корректора, и пудры для достижения естественной кожи</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 5</div>
        <div class="lesson-nazv">Макияж глаз в стиле "натуральный"</div>
        <div class="lesson-opisan">Подбор нейтральных теней, использование туши для ресниц, и выделение бровей</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 6</div>
        <div class="lesson-nazv">Макияж губ</div>
        <div class="lesson-opisan">Подбор натуральных оттенков помады, блеска, или губной помады для естественного
            сияния
        </div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 7</div>
        <div class="lesson-nazv">Секреты контурирования и хайлайтинга</div>
        <div class="lesson-opisan">Придание лицу объема и сияния без излишней яркости</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 8</div>
        <div class="lesson-nazv">Техники нанесения макияжа</div>
        <div class="lesson-opisan">Сохранения свежего, естественного вида на протяжении дня</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Урок 9</div>
        <div class="lesson-nazv">Советы по уходу за кожей</div>
        <div class="lesson-opisan">Советы по уходу за кожей после ношения макияжа и его снятию в конце дня</div>
    </div>
    <div class="lesson2">
        <div class="lesson-num">Итоговое тестирование</div>
        <div class="lesson-opisan">Теоретические вопросы и практическая работа по пройденным материалам</div>
    </div>
    <button class="show-more-btn3" id="show-more-btn3">Показать еще</button>
</div>

<div class="modal-overlay"></div>
<div id="myModal" class="modal1">
    <div class="modal-content1">
        <span class="close">&times;</span>
        <p>Для записи на курс необходимо войти в аккаунт!</p>
        <button class="register-btn"><a href="entry.php" class="register-link">Вход в аккаунт</a></button>
    </div>
</div>
</body>

<?php include "footer.php" ?>

<script>
    var modal = document.getElementById("myModal");
    var overlay = document.querySelector(".modal-overlay");
    var btn = document.querySelector(".btn-course");
    var closeBtn = document.querySelector(".close");

    btn.addEventListener("click", function () {
        modal.style.display = "block";
        overlay.style.display = "block";
    });

    closeBtn.onclick = function () {
        modal.style.display = "none";
        overlay.style.display = "none";
    }

    overlay.onclick = function () {
        modal.style.display = "none";
        overlay.style.display = "none";
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const lessons = document.querySelectorAll(".lesson2");
        const showMoreBtn = document.getElementById("show-more-btn3");

        lessons.forEach((lesson, index) => {
            if (index >= 5) {
                lesson.style.display = "none";
            }
        });

        showMoreBtn.addEventListener("click", function () {
            lessons.forEach((lesson, index) => {
                if (index >= 5) {
                    lesson.style.display = "block";
                }
            });
            showMoreBtn.style.display = "none";
        });
    });
</script>

</html>