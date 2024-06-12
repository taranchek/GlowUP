<?php
session_start();
?>

<header>
    <div class="cont">
        <a href="index.php" class="logo2"><img src="img/logo.png" alt=""></a>
        <div class="nazvanie">
            <label for="burger" class="burger-label"><img src="./img/menu.png" alt="menu icon"></label>
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
                    <?php if (!isset($_SESSION["userID"])) { ?>
                        <a href="entry.php" class="navbar1">Вход</a>
                    <?php } else { ?>
                        <a href="backend/logout.php" class="navbar1">Выход</a>
                    <?php } ?>
                </div>
            </div>
            <!-- Выпадающее меню-шторка -->
<!--            <div class="dropdown-menuгг">-->
<!--                <div class="heart1">-->
<!--                    <img class="img-heart" src="img/heart.png" alt="">-->
<!--                    <a href="catalog.php" class="navbar1">Курсы</a>-->
<!--                </div>-->
<!--                <div class="heart1">-->
<!--                    <img class="img-heart" src="img/heart.png" alt="">-->
<!--                    <a href="comments.php" class="navbar1">Отзывы</a>-->
<!--                </div>-->
<!--                <div class="heart1">-->
<!--                    <img class="img-heart" src="img/heart.png" alt="">-->
<!--                    <a href="#contacts" class="navbar1">Контакты</a>-->
<!--                </div>-->
<!--                <div class="heart1">-->
<!--                    <img class="img-heart" src="img/heart.png" alt="">-->
<!--                    <a href="account.php" class="navbar1">Личный кабинет</a>-->
<!--                </div>-->
<!--                <div class="heart1">-->
<!--                    <img class="img-heart" src="img/heart.png" alt="">-->
<!--                    --><?php //if (!isset($_SESSION["userID"])) { ?>
<!--                        <a href="entry.php" class="navbar1">Вход</a>-->
<!--                    --><?php //} else { ?>
<!--                        <a href="backend/logout.php" class="navbar1">Выход</a>-->
<!--                    --><?php //} ?>
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</header>

<!--  -->
<script>
document.querySelector('.burger-label').addEventListener('click', function() {
    console.log('Burger menu clicked');
    document.querySelector('.dropdown-menurr').classList.toggle('show-menu');
});
</script>

<!-- КНОПКА ДЛЯ ПРОКРУТКИ К НАЧАЛУ СТРАНИЦЫ -->
<div class="btn-up btn-up_hide"></div>

<!-- ЛОГИКА ЕЁ ОТОБРАЖЕНИЯ И ПЛАВНОЙ ПРОКРУТКИ -->
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
            this.el.onclick = () => {
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

<!-- ПЛАВНАЯ ПРОКРУТКА ДО БЛОКА "КОНТАКТЫ" ПРИ ИСПОЛЬЗОВАНИИ ЯКОРНОЙ ССЫЛКИ -->
<script>
    document.querySelector('a[href^="#"]').addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
</script>
