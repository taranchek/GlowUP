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

<body>

    <header>
        <div class="cont">
            <a href="index.php" class="logo2"><img src="img/logo.png" alt=""></a>
            <div class="nazvanie">
                <label for="burger"><img src="./img/menu.png" alt=""></label>
                <div class="menu2">
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="catalog.php" class="navbar1">Курсы</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="comments.php" class="navbar1">Отзывы</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="#contacts" class="navbar1">Контакты</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="account.php" class="navbar1">Личный кабинет</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="entry.php" class="navbar1">Выход</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.querySelector('.burger').addEventListener('click', function () {
          document.querySelector('.menu2').classList.toggle('active');
        });
    
        document.querySelectorAll('.navbar1').forEach(item => {
          item.addEventListener('click', function () {
            document.querySelector('.menu2').classList.remove('active');
          });
        });
      </script>

    <div class="comment">
        <div class="comment-text">Личный кабинет</div>
    </div>

    <div class="account">
        <div class="profile">
            <div class="name-girl">
                <img src="img/profile.png" alt="Фото">
                <div class="name-girl-text">Мария <br> Лебедева</div>
            </div> 
            <div class="text-acc">
                <div class="zag-acc">Почта:</div>
                <div class="podz-acc">mari24lebedeva@yandex.ru</div>
                <div class="zag-acc">Дата рождения:</div>
                <div class="podz-acc">24 октября 2000</div>
                <div class="zag-acc">Номер телефона:</div>
                <div class="podz-acc">не указано</div>
            </div>
                <button class="acc-btn"><a class="izma" href="error.html">Изменить</a></button>
        </div>
        <div class="courses">
            <div class="my-courses">Мои курсы</div>
            <div class="course">
                <div class="course-card1">
                    <div class="course-nazv">Как подготовить лицо к <br> макияжу</div>
                    <button class="course-btn"><a class="course-btn-a" href="active_course.html">Продолжить</a></button>
                </div>
            </div>
            <div class="course">
                <div class="course-card2">
                    <div class="course-nazv">Идеальные стрелки</div>
                    <button class="course-btn"><a class="course-btn-a" href="active_course.html">Продолжить</a></button>
                </div>
            </div>
            <div class="course">
                <div class="course-card3">
                    <div class="course-nazv">Свадебный макияж</div>
                    <button class="course-btn"><a class="course-btn-a" href="active_course.html">Продолжить</a></button>
                </div>
            </div>
            <div class="course">
                <div class="course-card4">
                    <div class="course-nazv">Идеальный макияж для себя</div>
                    <button class="course-btn"><a class="course-btn-a" href="active_course.html">Продолжить</a></button>
                </div>
            </div>
            <button class="show-more-btn2" id="show-more-btn2">Показать все</button>
        </div>
    </div>

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
      
        showMoreBtn.addEventListener('click', function() {
          showCourses(currentIndex, currentIndex + 2);
        });
      </script>


    <footer class="footer" id="contacts">
        <div class="column">
            <a href="index.html"><img src="img/logo.png" alt="" class="logo"></a>
            <div class="oferta">© 2020 - 2023 «GLOW UP Beauty <br> School». ВСЕ ПРАВА ЗАЩИЩЕНЫ. </div>
        </div>
        <div class="column">
            <a class="footer-text" href="catalog.html">Курсы</a>
            <a class="footer-text" href="comments.html">Отзывы</a>
            <a class="footer-text" href="account.html">Личный кабинет</a>
        </div>
        <div class="column">
            <div class="network">
                <img class="img-net" src="img/insta.png">
                <a class="footer-text" href="#">@glowup</a>
            </div>
            <div class="network">
                <img class="img-net" src="img/telega.png">
                <a class="footer-text" href="#">@glowup</a>
            </div>
            <div class="network">
                <img class="img-net" src="img/mail.png">
                <a class="footer-text" href="#">glow_up@bk.ru</a>
            </div>
        </div>
        <div class="column">
            <div class="network">
                <img class="img-net" src="img/vk.png">
                <a class="footer-text" href="#">@glowup</a>
            </div>
            <div class="network">
                <img class="img-net" src="img/phone.png">
                <a class="footer-text" href="#">+7(956)746-75-83</a>
            </div>
            <div class="network">
                <img class="img-net" src="img/geo.png">
                <a class="footer-text" href="#">г. Вологда</a>
            </div>
        </div>
    </footer>
</body>

</html>