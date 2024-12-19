<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <link rel="stylesheet" href="assets/css/order_page.css">
    <title>Оформление заказа</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <section class="container">
        <h1 class="firsth">Оформление заказа</h1>
        <div class="cart">
            <div class="cart__items">
                <div class="cart__item">
                    <img src="assets/img/Cart_Page/cpu.png" alt="">
                    <div class="item_description">
                        <h2>Процессор AMD Ryzen 5 5600X</h2>
                        <h3>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h3>
                    </div>
                    <div class="item_price">
                        <h1>12 899 ₽</h1>
                        <h3>Убрать из корзины</h1>
                    </div>
                </div>
                <div class="cart__item">
                    <img src="assets/img/Cart_Page/cpu.png" alt="">
                    <div class="item_description">
                        <h2>Процессор AMD Ryzen 5 5600X</h2>
                        <h3>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h3>
                    </div>
                    <div class="item_price">
                        <h1>12 899 ₽</h1>
                        <h3>Убрать из корзины</h1>
                    </div>
                </div>
            </div>
            <div class="cart_total">
                <h1>В корзине</h1>
                <h2>2 товара</h2>
                <h1>25 778 ₽</h1>
                <button>Перейти к оформлению</button>
            </div>
        </div>
    </section>
    <section class="information">
        <form class="forma">
            <h1>Данные получателя</h1>
            <input type="text" name="fio" id="fio" placeholder="ФИО">
            <input type="tel" name="phone" id="phone" placeholder="Телефон">
            <input type="email" name="email" id="email" placeholder="E-mail">
            <h1>Способ получения</h1>
            <div class="delivery">
                <input type="button" value="Самовывоз">
                <input type="button" value="Доставка">
            </div>
            <h1>Адрес</h1>
            <input type="text" name="city" id="city" placeholder="Город">
            <input type="text" name="address" id="address" placeholder="Улица, дом, квартира">
            <h1>Оплата</h1>
            <div class="payment">
                <input type="button" value="СБП">
                <input type="button" value="Наличными">
                <input type="button" value="Банковская карта">
            </div>
        </form>
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