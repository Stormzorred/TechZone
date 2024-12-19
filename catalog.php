<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <link rel="stylesheet" href="assets/css/catalog.css">
    <title>Каталог</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <section class="catalog">
        <div class="catalog__left">
            <h1>Каталог</h1>
            <h2>Фильтры</h2>
            <h3>Тип</h3>
            <div class="myBtnContainer">
                <button class="btn" id="defaultOpen" onclick="filterSelection('all')">Показать всё</button>
                <button class="btn" onclick="filterSelection('graphics')">Видеокарты</button>
                <button class="btn" onclick="filterSelection('cpu')">Процессоры</button>
                <button class="btn" onclick="filterSelection('motherboard')">Материнские платы</button>
            </div>
            <h3>Производитель</h3>
            <div class="myBtnContainer">
                <button class="btn" onclick="filterSelection('gigabyte')">GIGABYTE</button>
                <button class="btn" onclick="filterSelection('amd')">AMD</button>
                <button class="btn" onclick="filterSelection('intel')">Intel</button>
                <button class="btn" onclick="filterSelection('msi')">MSI</button>
            </div>
        </div>
        <div class="catalog__right">
            <div class="container">
                <div class="filterDiv graphics gigabyte">
                    <img src="assets/img/Catalog/graphics.png" alt="">
                    <div class="description">
                        <h3>Видеокарта GIGABYTE RX 580 GAMING [PCIe 3.0 GDDR5, 3xDisplayPort, HDMI]</h3>
                        <div class="stars">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <p>60 отзывов</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2>18 499₽</h2>
                        <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
                    </div>
                </div>
                <div class="filterDiv graphics gigabyte">
                    <img src="assets/img/Catalog/graphics2.png" alt="">
                    <div class="description">
                        <h3>Видеокарта PCI-E Gigabyte GeForce RTX 2070 Super GAMING OC 8192MB</h3>
                        <div class="stars">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <p>60 отзывов</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2>18 499₽</h2>
                        <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
                    </div>
                </div>
                <div class="filterDiv cpu intel">
                    <img src="assets/img/Catalog/cpu.png" alt="">
                    <div class="description">
                        <h3>Процессор Intel Core i5-12400F OEM</h3>
                        <div class="stars">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <p>60 отзывов</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2>12 199 ₽</h2>
                        <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
                    </div>
                </div>
                <div class="filterDiv cpu amd">
                    <img src="assets/img/Catalog/cpu2.png" alt="">
                    <div class="description">
                        <h3>Процессор AMD Ryzen 7 7800X3D OEM</h3>
                        <div class="stars">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <p>60 отзывов</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2>60 999 ₽</h2>
                        <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
                    </div>
                </div>
                <div class="filterDiv motherboard msi">
                    <img src="assets/img/Catalog/motherboard.png" alt="">
                    <div class="description">
                        <h3>Материнская плата MSI PRO H610M-E DDR4</h3>
                        <div class="stars">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <p>60 отзывов</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2>7 999 ₽</h2>
                        <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
                    </div>
                </div>
                <div class="filterDiv motherboard gigabyte">
                    <img src="assets/img/Catalog/motherboard2.png" alt="">
                    <div class="description">
                        <h3>Материнская плата GIGABYTE B550M K</h3>
                        <div class="stars">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <img src="assets/img/Catalog/star.png" alt="">
                            <p>60 отзывов</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2>9 999 ₽</h2>
                        <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
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