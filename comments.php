<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php include "header.php" ?>

<body>
<div class="comment">
    <div class="comment-text">Отзывы наших учеников</div>
</div>

<div class="reviews">
    <div class="review">
        <div class="name">Анна Иванова</div>
        <div class="date">10.03.2022</div>
        <div class="otzyv">Отличные курсы! Получила массу знаний о макияже, теперь могу создавать красивые образы
            сама
        </div>
    </div>
    <div class="review">
        <div class="name">Екатерина Петрова</div>
        <div class="date">25.05.2022</div>
        <div class="otzyv">Спасибо за курсы! Очень понравилась подача материала и практические занятия.</div>
    </div>
    <div class="review">
        <div class="name">Марина Сидорова</div>
        <div class="date">12.08.2023</div>
        <div class="otzyv">Курсы оправдали все ожидания! Рекомендую всем, кто хочет освоить искусство макияжа.</div>
    </div>
    <div class="review">
        <div class="name">Ольга Никитина</div>
        <div class="date">30.11.2022</div>
        <div class="otzyv">Профессиональные преподаватели и интересный курс. С удовольствием прошла его</div>
    </div>
    <div class="review">
        <div class="name">Наталья Егорова</div>
        <div class="date">05.03.2024</div>
        <div class="otzyv">Спасибо за увлекательный курс! Теперь могу экспериментировать с макияжем без страха.
        </div>
    </div>
    <div class="review">
        <div class="name">Ангелина Козлова</div>
        <div class="date">15.09.2022</div>
        <div class="otzyv">Отличная программа обучения, много полезной информации. С удовольствием рекомендую!</div>
    </div>
    <div class="review">
        <div class="name">София Морозова</div>
        <div class="date">20.02.2023</div>
        <div class="otzyv">Макияж - мое хобби, и я рада, что прошла обучение и усилила свои навыки</div>
    </div>
    <div class="review">
        <div class="name">Диана Корнеева</div>
        <div class="date">04.11.2022</div>
        <div class="otzyv">Получила не только знания, но и уверенность, благодаря курсам по макияжу.</div>
    </div>
    <div class="review">
        <div class="name">Алина Попова</div>
        <div class="date">22.07.2023</div>
        <div class="otzyv">Спасибо за индивидуальный подход и профессиональные советы. Рекомендую!</div>
    </div>
    <div class="review">
        <div class="name">Юлия Кузнецова</div>
        <div class="date">08.04.2022</div>
        <div class="otzyv">Прошла курсы макияжа - отличный опыт! Теперь могу работать в сфере красоты.</div>
    </div>
    <div class="review">
        <div class="name">Оксана Смирнова</div>
        <div class="date">16.12.2023</div>
        <div class="otzyv">Проходила обучение в вашей школе - довольна полученным опытом и результатом</div>
    </div>
    <div class="review">
        <div class="name">Елена Григорьева</div>
        <div class="date">03.01.2024</div>
        <div class="otzyv">Курсы по макияжу оправдали все мои ожидания, спасибо за качественное обучение!</div>
    </div>
    <div class="review">
        <div class="name">Мария Лебедева</div>
        <div class="date">26.08.2022</div>
        <div class="otzyv">Прошла обучение макияжу и получила профессиональные знания, спасибо вашей команде!</div>
    </div>
    <div class="review">
        <div class="name">Виктория Андреева</div>
        <div class="date">11.10.2023</div>
        <div class="otzyv">Спасибо за возможность освоить новую профессию. Обучение прошло интересно и продуктивно
        </div>
    </div>
    <div class="review">
        <div class="name">Евгения Белова</div>
        <div class="date">07.03.2023</div>
        <div class="otzyv">Курсы были интересными и информативными, спасибо за терпеливых преподавателей!</div>
    </div>
    <button class="show-more-btn" id="show-more-btn">Показать еще</button>
</div>
</body>

<?php include "footer.php" ?>

<script>
    const reviews = document.querySelectorAll('.review'); // Выбираем все элементы с классом "review"
    const showMoreBtn = document.getElementById('show-more-btn'); // Находим кнопку "Показать еще"
    let current = 0; // Начинаем с индекса 0 для первых 5 отзывов

    function showMoreReviews() {
        // Показываем следующие 5 отзывов, начиная с текущего индекса
        for (let i = current; i < current + 5 && i < reviews.length; i++) {
            reviews[i].classList.add('show');
        }

        current += 5; // Увеличиваем индекс для следующих отзывов

        // Если показаны все отзывы, скрываем кнопку
        if (current >= reviews.length) {
            showMoreBtn.style.display = 'none';
        }
    }

    // При нажатии на кнопку вызываем функцию для показа следующих отзывов
    showMoreBtn.addEventListener('click', showMoreReviews);

    showMoreReviews(); // Показываем первые 5 отзывов при загрузке страницы
</script>

</html>