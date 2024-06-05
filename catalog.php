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

<body>

  <div class="btn-up btn-up_hide"></div>


  <script> 
    const btnUp = {
      el: document.querySelector('.btn-up'),
      show() {
        this.el.classList.remove('btn-up_hide');
      },
      hide() {
        this.el.classList.add('btn-up_hide');
      },
      addEventListener() {
        window.addEventListener('scroll', () => {
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          scrollY > 400 ? this.show() : this.hide();
        });
        document.querySelector('.btn-up').onclick = () => {
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
      }
    }
    btnUp.addEventListener();
  </script>




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
    <div class="comment-text">Курсы по макияжу</div>
  </div>


  <div class="c-popular" id="for-whom">
    <div class="popular__blocks">
      <div class="popular__block">
        <h3>Как подготовить <br> лицо к макияжу</h3>
        <div class="photo-doc">
          <a href="inactive_course.html"><img class="popular-img" src="img/women1.png" alt=""></a>
          <a href="inactive_course.html"><img class="photo-c" src="img/bg-card.png" alt=""></a>
          <div class="description">Курс предназначен для тех, кто желает изучить основы ухода за кожей и научиться
            правильно подготавливать лицо перед нанесением макияжа. В процессе обучения участники узнают о базовых шагах
            ухода за кожей, правильном выборе косметических продуктов.</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
      <div class="popular__block">
        <h3>Идеальный <br> макияж для себя</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women2.png" alt="">
          <div class="description">Поможет вам научиться создавать уникальный образ, подходящий именно вам. Вы изучите
            основы нанесения макияжа, выбор оттенков, коррекцию недостатков кожи и создание эффектных образов</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
      <div class="popular__block">
        <h3>Идеальные <br> стрелки</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women3.png" alt="">
          <div class="description">Поможет вам освоить технику создания идеальных стрелок, которые подчеркнут форму и
            размер ваших глаз. Вы научитесь выбирать подходящие продукты и инструменты для создания стрелок</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
    </div>
    <div class="popular__blocks">
      <div class="popular__block">
        <h3>Сводебный <br> макияж</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women4.png" alt="">
          <div class="description">Обучение тонкостям создания нежного и долговременного макияжа для невесты с учетом
            особенностей фото и видеозаписи</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
      <div class="popular__block">
        <h3>Вечерний <br> макияж</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women5.png" alt="">
          <div class="description">Изучение методов создания выразительного и элегантного вечернего образа с
            использованием ярких оттенков и акцентов</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
      <div class="popular__block">
        <h3>Основы <br> макияжа</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women6.png" alt="">
          <div class="description">Курс для начинающих, включающий в себя основные техники нанесения теней, подводки,
            румян и помады</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
    </div>
    <div class="popular__blocks">
      <div class="popular__block">
        <h3>Натуральный <br> макияж</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women7.png" alt="">
          <div class="description">Изучение техник нанесения макияжа, которые подчеркивают естественную красоту и
            молодость лица</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
      <div class="popular__block">
        <h3>Театральный <br> макияж</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women8.png" alt="">
          <div class="description">Обучение техникам макияжа, которые помогут создать яркие образы для сцены,
            подчеркивая выразительность черт лица. </div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
      <div class="popular__block">
        <h3>Эффектный <br> макияж глаз</h3>
        <div class="photo-doc">
          <img class="photo-c" src="img/bg-card.png" alt="">
          <img class="popular-img" src="img/women9.png" alt="">
          <div class="description">Освоение техник нанесения теней и подводки для создания уникального и выразительного
            макияжа глаз</div>
        </div>
        <a href="inactive_course.html"><button class="popular-btn">Записаться</button></a>
      </div>
    </div>
  </div>

  <div class="course">
    <h2>Название курса</h2>
    <img src="картинка.jpg" alt="Картинка курса">
    <div class="description">Описание курса</div>
    <button>Подробнее</button>
  </div>

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