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


  <div class="course-cont">
    <div class="zag-course">О курсе</div>
      <div class="course-block">
        <div class="infa-course">
            <div class="nazv-course">Натуральный <br> макияж</div>
            <div class="onisan-course">Изучение техник нанесения макияжа, которые подчеркивают естественную красоту и молодость лица</div>
            <button class="btn-course"><a href="">Записаться на курс</a></button>
        </div>
        <img class="course-img" src="img/women7.png" alt="">
      </div>
  </div>
  <div class="willbe">
    <div class="zag-willbe">Что будет в курсе?</div>
    <div class="text-willbe"> - Основы натурального макияжа <br>
        <br> - Правильный подбор тонального средства <br>
        <br> - Коррекция и выравнивание тона лица <br>
        <br> - Макияж глаз и губ <br>
        <br> - Секреты контурирования и хайлайтинга <br>
        <br> - Советы по уходу за кожей</div>
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
        <div class="lesson-opisan">Подбор натуральных оттенков помады, блеска, или губной помады для естественного сияния</div>
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

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const lessons = document.querySelectorAll(".lesson2");
      const showMoreBtn = document.getElementById("show-more-btn3");
    
      lessons.forEach((lesson, index) => {
        if (index >= 5) {
          lesson.style.display = "none";
        }
      });
    
      showMoreBtn.addEventListener("click", function() {
        lessons.forEach((lesson, index) => {
          if (index >= 5) {
            lesson.style.display = "block";
          }
        });
        showMoreBtn.style.display = "none";
      });
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