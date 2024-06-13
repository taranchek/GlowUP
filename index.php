<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы по макияжу</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/peri.png" type="image/x-icon">

</head>

<?php require_once "header.php" ?>

<body>
<div class="offer">
    <div class="text-offer">
        <div class="text-offer1">Изучите искусство <br> макияжа с нами</div>
        <div class="text-offer2">Станьте уверенными в себе и <br> научитесь создавать идеальный <br> образ</div>
        <button class="btn-offer"><a class="btn-offer-a" href="catalog.php">ВЫБРАТЬ КУРС</a></button>
        <div class="slider-dots"></div>
    </div>
    <div class="img-offer">
        <img src="img/offer1.png" alt="" class="slider-image active">
        <img src="img/offer2.png" alt="" class="slider-image">
        <img src="img/offer3.png" alt="" class="slider-image">
    </div>
</div>

<div class="container c-for" id="for-whom">
    <div class="zag">Для кого подойдут курсы</div>
    <div class="row for-whom__blocks">
        <div class="col for-whom__block">
            <img class="for-whom__1" src="img/for1.png" alt="">
            <h5>Тем, кто мечтает стать <br> визажистом</h5>
            <h6>С нуля освоите классические и <br> современные техники макияжа. <br> Соберёте яркое портфолио и <br>
                сможете
                стать частью beauty-мира.</h6>
        </div>
        <div class="col for-whom__block">
            <img class="for-whom__1" src="img/for2.png" alt="">
            <h5>Тем, кто хочет делать <br> красивый макияж</h5>
            <h6>Под руководством визажистов вы <br> научитесь делать трендовые <br> макияжи себе и другим. Сможете <br>
                всегда красиво выглядеть</h6>
        </div>
        <div class="col for-whom__block">
            <img class="for-whom__1" src="img/for3.png" alt="">
            <h5>Fashion-стилистам и <br> парикмахерам</h5>
            <h6>Научитесь делать классный макияж <br> и использовать это в работе. <br> Сможете собрать невесту на
                свадьбу
                <br> или создать образ для съёмки.
            </h6>
        </div>
    </div>
</div>

<div class="c-learn">
    <div class="zag">Чему Вы научитесь</div>
    <div class="row for-whom__blocks">
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Безошибочно выбирать косметику, кисти и другие инструменты</h5>
        </div>
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Готовить кожу к макияжу</h5>
        </div>
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Создавать идеальный тон, наносить румяна, бронзер и хайлайтер</h5>
        </div>

        <!-- Заставит следующие колонки переходить на новую строку в контрольной точке md и выше -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Делать натуральный нюдовый или яркий макияж бровей, глаз и губ</h5>
        </div>
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Делать эффектные smokey eyes и рисовать стрелки на глазах любой формы</h5>
        </div>
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Учитывать особенности кожи при макияже</h5>
        </div>

        <div class="w-100 d-none d-md-block"></div>

        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Делать макияж на все случаи жизни: вечеринки, свидания, деловые встречи, фотосессии</h5>
        </div>
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Создавать суперстойкий макияж для невесты и её подруг</h5>
        </div>
        <div class="col-6 col-sm-4 learn__block">
            <img class="learn-img" src="img/array.png" alt="">
            <h5>Ориентироваться в трендах и подчёркивать красоту клиентов с помощью макияжа</h5>
        </div>
    </div>
</div>

<div class="c-popular" id="for-whom">
    <div class="zag">Популярные курсы</div>
    <div class="popular__blocks">
        <div class="popular__block">
            <h3>Как подготовить <br> лицо к макияжу</h3>
            <img class="popular-img" src="img/women1.png" alt="">
            <a href="inactive_course.php?courseNumber=1">
                <button class="popular-btn">Подробнее</button>
            </a>
        </div>
        <div class="popular__block">
            <h3>Идеальный <br> макияж для себя</h3>
            <img class="popular-img" src="img/women2.png" alt="">
            <a href="inactive_course.php?courseNumber=2">
                <button class="popular-btn">Подробнее</button>
            </a>
        </div>
        <div class="popular__block">
            <h3>Натуральный <br> макияж</h3>
            <img class="popular-img" src="img/women3.png" alt="">
            <a href="inactive_course.php?courseNumber=7">
                <button class="popular-btn">Подробнее</button>
            </a>
        </div>
    </div>
    <a href="catalog.php" class="zag zag2">Посмотреть все курсы</a>
</div>

<div class="author">
    <div class="zag-aurhor">Автор курсов</div>
    <div class="author-blocks">
        <div class="author-block1">
            <div class="name-author"><i>Анна Романова</i></div>
            <div class="infa-author">- 10 лет опыта работы в области макияжа. <br>
- Создание собственного бренда косметики "GlowUP Makeup" <br>
- Проведение мастер-классов по макияжу для известных звезд и моделей. <br>
- Публикации статей о красоте и макияже в известных журналах и онлайн-платформах. <br>
- Победа в номинации "Лучший визажист года" на Beauty Awards. <br>
<br>
Анна Романова известна своим профессионализмом, творческим подходом и способностью делиться знаниями с другими. Ее курсы по макияжу пользуются огромной популярностью благодаря индивидуальному подходу каждому ученику и умению передать тонкости мастерства в доступной форме.</div>
        </div>
        <div class="author-block">
            <img class="img-author" src="img/author.png" alt="">
        </div>
    </div>
</div>

<div class="c-obuch">
    <div class="screen">
        <div class="zag">Как проходит обучение?</div>
        <div class="content2">
            <img src="./img/obuch.png" alt="Изображение" class="img-obuch">
            <div class="text">

                <div class="obuch">
                    <div class="obuch-num">1</div>
                    <div class="obuch-text">
                        <div class="obuch-title">Выбор курса</div>
                        <p>На сайте представлено небольшое количесвто курсов, с их описанием, и для начала вам нужно
                            выбрать и записаться на курс</p>
                    </div>
                </div>

                <div class="obuch">
                    <div class="obuch-num">2</div>
                    <div class="obuch-text">
                        <div class="obuch-title">Занятия</div>
                        <p>Занятия проходят в формате вебинаров. Просмотр видеозаписей лекций доступен в личном
                            кабинете. Каждый урок доступен после прохождения предыдущеги урока</p>
                    </div>
                </div>

                <div class="obuch">
                    <div class="obuch-num">3</div>
                    <div class="obuch-text">
                        <div class="obuch-title">Практическая часть</div>
                        <p>Тестирование и практическое задание по пройденным материалам курса</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="c-photo">
    <div class="zag">Фото наших учениц</div>
    <div class="slider">
        <div class="slides-container">
            <div class="slide"><img src="img/photo1.jpg" alt="Image 1"></div>
            <div class="slide"><img src="img/photo2.jpg" alt="Image 2"></div>
            <div class="slide"><img src="img/photo3.jpg" alt="Image 3"></div>
            <div class="slide"><img src="img/photo4.jpg" alt="Image 1"></div>
            <div class="slide"><img src="img/photo5.jpg" alt="Image 1"></div>
            <div class="slide"><img src="img/photo6.jpg" alt="Image 2"></div>
            <div class="slide"><img src="img/photo7.jpg" alt="Image 3"></div>
            <div class="slide"><img src="img/photo8.jpg" alt="Image 1"></div>
            <div class="slide"><img src="img/photo9.png" alt="Image 1"></div>
        </div>
    </div>
    <div class="controls">
        <button id="prevBtn" class="back"><img src="img/back.png" alt=""></button>
        <button id="nextBtn" class="next"><img src="img/next.png" alt=""></button>
    </div>
</div>

<div class="c-motiv">
    <div class="text-motiv">Никогда не рано и не поздно заниматься тем, что нравится</div>
</div>
</body>

<?php include "footer.php" ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Находим контейнер и все слайды
        const slidesContainer = document.querySelector('.slides-container');

        // Копируем содержимое контейнера для создания иллюзии бесконечности
        slidesContainer.innerHTML += slidesContainer.innerHTML;

        // Получаем обновлённый список всех слайдов (включая скопированные)
        const slides = document.querySelectorAll('.slide');

        let currentIndex = 0; // Текущий индекс для слайдов
        let slideWidth = slides[0].offsetWidth; // Ширина одного слайда

        const totalSlides = slides.length / 2; // Общее количество уникальных слайдов
        let currentShift = 0; // Текущее смещение контейнера слайдов

        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');

        function moveSlide(direction) {
            // Обновляем текущее смещение и ширину слайда на случай изменения размеров окна
            slideWidth = slides[0].offsetWidth;
            if (direction === 'next') {
                currentShift -= slideWidth;
                currentIndex++;
            } else if (direction === 'prev') {
                currentShift += slideWidth;
                currentIndex--;
            }

            // Сброс к началу, если достигли конца копии
            if (currentIndex >= totalSlides) {
                currentShift = 0;
                currentIndex = 0;
                // Отключаем переход для мгновенного возврата
                slidesContainer.style.transition = 'none';
            } else if (currentIndex < 0) {
                currentIndex = totalSlides - 1;
                currentShift = -(slideWidth * currentIndex);
                // Отключаем переход для мгновенного возврата
                slidesContainer.style.transition = 'none';
            } else {
                slidesContainer.style.transition = ''; // Включаем анимацию обратно
            }

            slidesContainer.style.transform = `translateX(${currentShift}px)`;

            // Возвращаем анимацию после мгновенного сброса
            setTimeout(() => {
                slidesContainer.style.transition = 'transform 0.5s ease-out';
            }, 0);
        }

        setInterval(() => moveSlide('next'), 3000);

        // Обработчики событий для кнопок
        nextBtn.addEventListener('click', () => moveSlide('next'));
        prevBtn.addEventListener('click', () => moveSlide('prev'));
    });
</script>

<script>
    const images = document.querySelectorAll('.slider-image');
    let currentImage = 0;

    function showImage(index) {
        for (let i = 0; i < images.length; i++) {
            images[i].classList.remove('active');
        }
        images[index].classList.add('active');
    }

    function nextImage() {
        currentImage = (currentImage + 1) % images.length;
        showImage(currentImage);
    }

    showImage(currentImage);
    setInterval(nextImage, 5000); // Изменение картинки каждые 5 секунд
</script>

</html>