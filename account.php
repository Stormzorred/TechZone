<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <link rel="stylesheet" href="assets/css/account.css">
    <title>Личный кабинет</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <div class="container">
        <div class="account">
            <div class="photo"></div>
            <div class="account_name">
                <h1>Иванов Иван</h1>
                <h2>Дата регистрации: 29.05.2019</h2>
            </div>
        </div>
        <div class="inputs">
            <div class="inputs_item">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" placeholder="Иван">
            </div>
            <div class="inputs_item">
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" id="surname" placeholder="Иванов">
            </div>
            <div class="inputs_item">
                <label for="phone">Телефон</label>
                <input type="text" name="phone" id="phone" placeholder="+7954385438">
            </div>
            <div class="inputs_item">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="ivanovivan@mail.ru">
            </div>
            <div class="inputs_item">
                <label for="date">Дата рождения</label>
                <input type="date" name="date" id="date">
            </div>
            <div class="inputs_item">
                <label for="alias">Никнейм</label>
                <input type="text" name="alias" id="alias" placeholder="ivanusga">
            </div>
            <input type="button" value="Выйти">
            <input type="button" value="Сменить пароль">
            <input type="button" value="Удалить профиль">
        </div>
    </div>
    <section class="favorites">
        <h1>Избранное</h1>
        <div class="favorites__items">
            <div class="favorites__item">
                <img src="assets/img/Account_Page/cpu.png" alt="">
                <h2>Intel Core i5-10400F</h2>
                <h3>LGA 1200, 6 x 2.9 ГГц, L2 - 1.5 МБ, L3 - 12 МБ, 2 x DDR4 - 2666 МГц, TDP 65 Вт</h3>
                <div class="item_price">
                    <h4>12 899 ₽</h4>
                    <div class="item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/cpu.png" alt="">
                <h2>Intel Core i5-10400F</h2>
                <h3>LGA 1200, 6 x 2.9 ГГц, L2 - 1.5 МБ, L3 - 12 МБ, 2 x DDR4 - 2666 МГц, TDP 65 Вт</h3>
                <div class="item_price">
                    <h4>12 899 ₽</h4>
                    <div class="item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/cpu.png" alt="">
                <h2>Intel Core i5-10400F</h2>
                <h3>LGA 1200, 6 x 2.9 ГГц, L2 - 1.5 МБ, L3 - 12 МБ, 2 x DDR4 - 2666 МГц, TDP 65 Вт</h3>
                <div class="item_price">
                    <h4>12 899 ₽</h4>
                    <div class="item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/cpu.png" alt="">
                <h2>Intel Core i5-10400F</h2>
                <h3>LGA 1200, 6 x 2.9 ГГц, L2 - 1.5 МБ, L3 - 12 МБ, 2 x DDR4 - 2666 МГц, TDP 65 Вт</h3>
                <div class="item_price">
                    <h4>12 899 ₽</h4>
                    <div class="item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/cpu.png" alt="">
                <h2>Intel Core i5-10400F</h2>
                <h3>LGA 1200, 6 x 2.9 ГГц, L2 - 1.5 МБ, L3 - 12 МБ, 2 x DDR4 - 2666 МГц, TDP 65 Вт</h3>
                <div class="item_price">
                    <h4>12 899 ₽</h4>
                    <div class="item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer__block">
        <div class="footer__items">
            <div class="footer__item">
                <h2>Компания</h2>
                <hr>
                <a href="#">О компании</a>
                <a href="#">Новости</a>
                <a href="#">Партнёрам</a>
                <a href="#">Политика конфиденциальности</a>
            </div>
            <div class="footer__item">
                <h2>Покупателям</h2>
                <hr>
                <a href="#">Доставка</a>
                <a href="#">Что с заказом?</a>
                <a href="#">FAQ</a>
                <a href="#">Обратная связь</a>
            </div>
            <div class="footer__item">
                <h1>8-800-555-35-35</h1>
                <div class="weblinks">
                    <a href="#"><img src="assets/img/vk.png" alt=""></a>
                    <a href="#"><img src="assets/img/telegram.png" alt=""></a>
                    <a href="#"><img src="assets/img/youtube.png" alt=""></a>
                </div>
                <div class="bank">
                    <img src="assets/img/mastercard.png" alt="">
                    <img src="assets/img/visa.png" alt="">
                    <img src="assets/img/mir.png" alt="">
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>