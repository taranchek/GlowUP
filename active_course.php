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

<body>
<div class="course-cont">
    <div class="course-block">
        <div class="infa-course">
            <div class="nazv-course">Натуральный <br> макияж</div>
            <div class="onisan-course">Изучение техник нанесения макияжа, которые подчеркивают естественную красоту и
                молодость лица
            </div>
            <button class="btn-course"><a href="">Начать прохождение</a></button>
        </div>
        <img class="course-img" src="img/women7.png" alt="">
    </div>
</div>
<div class="program-cont">
    <div class="zag-program">Программа курса</div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 1</div>
            <div class="lesson-nazv">Основы</div>
            <div class="lesson-opisan">Объяснение принципов и целей макияжа, обеспечивающего натуральный и свежий вид
            </div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 2</div>
            <div class="lesson-nazv">Подготовка кожи</div>
            <div class="lesson-opisan">Очищение, увлажнение, использование базы под макияж</div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 3</div>
            <div class="lesson-nazv">Подбор тонального средства</div>
            <div class="lesson-opisan">Выбор оттенка, текстуры, и формул, соответствующих натуральному эффекту</div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 4</div>
            <div class="lesson-nazv">Коррекция и выравнивание</div>
            <div class="lesson-opisan">Использование консилера, корректора, и пудры для достижения естественной кожи
            </div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 5</div>
            <div class="lesson-nazv">Макияж глаз в стиле "натуральный"</div>
            <div class="lesson-opisan">Подбор нейтральных теней, использование туши для ресниц, и выделение бровей</div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 6</div>
            <div class="lesson-nazv">Макияж губ</div>
            <div class="lesson-opisan">Подбор натуральных оттенков помады, блеска, или губной помады для естественного
                сияния
            </div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 7</div>
            <div class="lesson-nazv">Секреты контурирования и хайлайтинга</div>
            <div class="lesson-opisan">Придание лицу объема и сияния без излишней яркости</div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 8</div>
            <div class="lesson-nazv">Техники нанесения макияжа</div>
            <div class="lesson-opisan">Сохранения свежего, естественного вида на протяжении дня</div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Урок 9</div>
            <div class="lesson-nazv">Советы по уходу за кожей</div>
            <div class="lesson-opisan">Советы по уходу за кожей после ношения макияжа и его снятию в конце дня</div>
        </a></div>
    <div class="lesson"><a class="lesson-a" href="">
            <div class="lesson-num">Итоговое тестирование</div>
            <div class="lesson-nazv">Теоретические вопросы и практическая работа по пройденным материалам</div>
        </a></div>
    <button class="show-more-btn3" id="show-more-btn3">Показать еще</button>
</div>
</body>

<?php include "footer.php" ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const lessons = document.querySelectorAll(".lesson");
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