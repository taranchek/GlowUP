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

  <div class="lesson-cont">
    <div class="learn1">
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 1</div>
            <div class="lesson-nazv2">Основы</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 2</div>
            <div class="lesson-nazv2">Подготовка кожи</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 3</div>
            <div class="lesson-nazv2">Подбор тонального средства</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 4</div>
            <div class="lesson-nazv2">Коррекция и выравнивание</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 5</div>
            <div class="lesson-nazv2">Макияж глаз</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 6</div>
            <div class="lesson-nazv2">Макияж губ</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 7</div>
            <div class="lesson-nazv2">Контурирование и хайлайтинг</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 8</div>
            <div class="lesson-nazv2">Техники нанесения макияжа</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-num2">Урок 9</div>
            <div class="lesson-nazv2">Советы по уходу за кожей</div>
        </a></div>
        <div class="lesson3"><a class="lesson-a2" href="">
            <div class="lesson-nazv2">Итоговое тестирование</div>
        </a></div>
    </div>
     <div class="learn2">
        <div class="zag-learn">Основы</div>
        <div class="nazv-learn">Объяснение принципов и целей макияжа, обеспечивающего натуральный и свежий вид</div>
        <div class="theory-learn">Цели натурального макияжа:
          <br> - Подчеркнуть естественную красоту лица.
          <br> - Скрыть недостатки кожи, не заглушая ее природный оттенок.
          <br> - Создать свежий и естественный образ.
          <br>
          <br> Принципы натурального макияжа:
       <br> - Подготовка кожи: очищение, увлажнение и защита от солнца.
       <br> - Использование легких текстур: минимум тонального средства, светлые оттенки помады и румян.
       <br> - Подчеркивание естественных черт лица: акцент на бровях, ресницах, естественный контур губ.
       <br> - Естественное освещение: использование мягкого света для оценки макияжа.</div>
        <div class="video-learn"></div>
        <div class="wrapper">
          <a class="cta" href="#">
              <span>Дальше</span>
              <span>
                  <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <path class="one"
                              d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                              fill="white"></path>
                          <path class="two"
                              d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                              fill="white"></path>
                          <path class="three"
                              d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                              fill="white"></path>
                      </g>
                  </svg>
              </span>
          </a>
      </div>
     </div>
  </div>

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