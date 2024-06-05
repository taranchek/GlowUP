<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="cont">
            <a href="index.html" class="logo2"><img src="img/logo.png" alt=""></a>
            <div class="nazvanie">
                <label for="burger"><img src="./img/menu.png" alt=""></label>
                <div class="menu2">
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="catalog.html" class="navbar1">Курсы</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="comments.html" class="navbar1">Отзывы</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="#contacts" class="navbar1">Контакты</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="account.html" class="navbar1">Личный кабинет</a>
                    </div>
                    <div class="heart1">
                        <img class="img-heart" src="img/heart.png" alt="">
                        <a href="entry.html" class="navbar1">Вход</a>
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

      

    <div class="content cont-rega">
        <div class="polya polya-rega">
            <div class="vxod-text">Регистрация</div>
            <div class="pole2">
                <div class="text-inp">Имя</div>
                <input class="pole-inp pole-inp2" type="text">
            </div>
            <div class="pole2">
                <div class="text-inp">Фамилия</div>
                <input class="pole-inp pole-inp2" type="text">
            </div>
            <div class="pole2">
                <div class="text-inp">Почта</div>
                <input class="pole-inp pole-inp2" type="email">
            </div>
            <div class="pole2">
                <div class="text-inp">Пароль</div>
                <input class="pole-inp pole-inp2" type="password">
            </div>
            <div class="pole2">
                <div class="text-inp">Повторите пароль</div>
                <input class="pole-inp" type="password">
                <button class="btn-register">Зарегистрироваться</button>
            </div>
            <div class="nazv-pole rega-kn">Уже есть аккаунт? <a class="rega" href="entry.html">Войти</a></div>


        </div>
    </div>
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