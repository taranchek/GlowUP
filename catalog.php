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
<div class="comment">
    <div class="comment-text">Курсы по макияжу</div>
</div>

<!-- СПИСОК ВСЕХ КУРСОВ -->
<div class="cards-course">
    <?php
    require_once "backend/course.php";
    $coursesData = getCourseList();
    foreach ($coursesData as $row): ?>
        <form id="card-form<?php echo $row["ID"] ?>" class="card-course" action="inactive_course.php">
            <input type="hidden" name="courseNumber" value="<?php echo $row["ID"] ?>">
            <h3><?php echo $row["name"] ?></h3>
            <div class="photo-doc" onclick="document.forms['card-form<?php echo $row["ID"] ?>'].submit()">
                <img class="popular-img" src="img/<?php echo $row["pictureName"] ?>" alt="">
                <img class="photo-c" src="img/bg-card.png" alt="">
                <div class="description"><?php echo $row["description"] ?></div>
            </div>
            <button type="submit" class="popular-btn">Подробнее</button>
        </form>
    <?php endforeach ?>
</div>

<!--<div class="c-popular" id="for-whom">-->
<!--    <div class="popular__blocks2">-->
<!--        <div class="popular__block">-->
<!--            <h3>Как подготовить <br> лицо к макияжу</h3>-->
<!--            <div class="photo-doc">-->
<!--                <a href="inactive_course.php"><img class="popular-img" src="img/women1.png" alt=""></a>-->
<!--                <a href="inactive_course.php"><img class="photo-c" src="img/bg-card.png" alt=""></a>-->
<!--                <div class="description">Курс предназначен для тех, кто желает изучить основы ухода за кожей и-->
<!--                    научиться-->
<!--                    правильно подготавливать лицо перед нанесением макияжа. В процессе обучения участники узнают о-->
<!--                    базовых шагах-->
<!--                    ухода за кожей, правильном выборе косметических продуктов.-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="popular__block">-->
<!--            <h3>Идеальный <br> макияж для себя</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women2.png" alt="">-->
<!--                <div class="description">Поможет вам научиться создавать уникальный образ, подходящий именно вам. Вы-->
<!--                    изучите-->
<!--                    основы нанесения макияжа, выбор оттенков, коррекцию недостатков кожи и создание эффектных-->
<!--                    образов-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="popular__block">-->
<!--            <h3>Идеальные <br> стрелки</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women3.png" alt="">-->
<!--                <div class="description">Поможет вам освоить технику создания идеальных стрелок, которые подчеркнут-->
<!--                    форму и-->
<!--                    размер ваших глаз. Вы научитесь выбирать подходящие продукты и инструменты для создания стрелок-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="popular__blocks2">-->
<!--        <div class="popular__block">-->
<!--            <h3>Сводебный <br> макияж</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women4.png" alt="">-->
<!--                <div class="description">Обучение тонкостям создания нежного и долговременного макияжа для невесты с-->
<!--                    учетом-->
<!--                    особенностей фото и видеозаписи-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="popular__block">-->
<!--            <h3>Вечерний <br> макияж</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women5.png" alt="">-->
<!--                <div class="description">Изучение методов создания выразительного и элегантного вечернего образа с-->
<!--                    использованием ярких оттенков и акцентов-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="popular__block">-->
<!--            <h3>Основы <br> макияжа</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women6.png" alt="">-->
<!--                <div class="description">Курс для начинающих, включающий в себя основные техники нанесения теней,-->
<!--                    подводки,-->
<!--                    румян и помады-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="popular__blocks2">-->
<!--        <div class="popular__block">-->
<!--            <h3>Натуральный <br> макияж</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women7.png" alt="">-->
<!--                <div class="description">Изучение техник нанесения макияжа, которые подчеркивают естественную-->
<!--                    красоту и-->
<!--                    молодость лица-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="popular__block">-->
<!--            <h3>Театральный <br> макияж</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women8.png" alt="">-->
<!--                <div class="description">Обучение техникам макияжа, которые помогут создать яркие образы для сцены,-->
<!--                    подчеркивая выразительность черт лица.-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="popular__block">-->
<!--            <h3>Эффектный <br> макияж глаз</h3>-->
<!--            <div class="photo-doc">-->
<!--                <img class="photo-c" src="img/bg-card.png" alt="">-->
<!--                <img class="popular-img" src="img/women9.png" alt="">-->
<!--                <div class="description">Освоение техник нанесения теней и подводки для создания уникального и-->
<!--                    выразительного-->
<!--                    макияжа глаз-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="inactive_course.php">-->
<!--                <button class="popular-btn">Подробнее</button>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="course">
    <h2>Название курса</h2>
    <img src="картинка.jpg" alt="Картинка курса">
    <div class="description">Описание курса</div>
    <button>Подробнее</button>
</div>
</body>

<?php include "footer.php" ?>

<script>
    const course = document.querySelector('.course');
    const description = course.querySelector('.description');
    const button = course.querySelector('button');

    course.addEventListener('mouseover', () => {
        description.style.display = 'block';
        button.style.transform = 'translateY(35px)';
    });

    course.addEventListener('mouseout', () => {
        description.style.display = 'none';
        button.style.transform = 'translateY(0)';
    });
</script>

</html>