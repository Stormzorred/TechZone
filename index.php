<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>TechZone</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <main class="main__block">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/img/Homepage/Main.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/Homepage/Main.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/Homepage/Main.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </main>
    <section class="newsales">
        <h1 class="firsth">Новинки</h1>
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Cpu')" id="defaultOpen">Процессоры</button>
            <button class="tablinks" onclick="openTab(event, 'Motherboard')">Материнские платы</button>
            <button class="tablinks" onclick="openTab(event, 'Graphics')">Видеокарты</button>
            <button class="tablinks" onclick="openTab(event, 'RAM')">Оперативная память</button>
            <button class="tablinks" onclick="openTab(event, 'SSD')">SSD</button>
            <button class="tablinks" onclick="openTab(event, 'HDD')">HDD</button>
        </div>
        <hr>
        <div id="Cpu" class="tabcontent">
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ryzen.png" alt="">
                <h1>AMD Ryzen 5 5600X</h1>
                <h2>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h2>
                <div class="tab__item_price">
                    <h3>12 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ryzen.png" alt="">
                <h1>AMD Ryzen 5 5600X</h1>
                <h2>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h2>
                <div class="tab__item_price">
                    <h3>12 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ryzen.png" alt="">
                <h1>AMD Ryzen 5 5600X</h1>
                <h2>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h2>
                <div class="tab__item_price">
                    <h3>12 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ryzen.png" alt="">
                <h1>AMD Ryzen 5 5600X</h1>
                <h2>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h2>
                <div class="tab__item_price">
                    <h3>12 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ryzen.png" alt="">
                <h1>AMD Ryzen 5 5600X</h1>
                <h2>AM4, 6x3.7 ГГц, L2 - 3 МБ, L3 - 32 МБ, 2xDDR4 - 3200 МГц, TDP 65 Вт</h2>
                <div class="tab__item_price">
                    <h3>12 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="Motherboard" class="tabcontent">
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/motherboard.png" alt="">
                <h1>MSI MPG B550 GAMING PLUS</h1>
                <h2>AM4, AMD B550, 4xDDR4-3200 МГц, 2xPCI-Ex16, 2xM.2, Standard-ATX</h2>
                <div class="tab__item_price">
                    <h3>12 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/motherboard.png" alt="">
                <h1>MSI MPG B550 GAMING PLUS</h1>
                <h2>AM4, AMD B550, 4xDDR4-3200 МГц, 2xPCI-Ex16, 2xM.2, Standard-ATX</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/motherboard.png" alt="">
                <h1>MSI MPG B550 GAMING PLUS</h1>
                <h2>AM4, AMD B550, 4xDDR4-3200 МГц, 2xPCI-Ex16, 2xM.2, Standard-ATX</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/motherboard.png" alt="">
                <h1>MSI MPG B550 GAMING PLUS</h1>
                <h2>AM4, AMD B550, 4xDDR4-3200 МГц, 2xPCI-Ex16, 2xM.2, Standard-ATX</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/motherboard.png" alt="">
                <h1>MSI MPG B550 GAMING PLUS</h1>
                <h2>AM4, AMD B550, 4xDDR4-3200 МГц, 2xPCI-Ex16, 2xM.2, Standard-ATX</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="Graphics" class="tabcontent">
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/graphics.png" alt="">
                <h1>RTX 2070 Super</h1>
                <h2>PCI-E, 8192MB 256bit GDDR6</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/graphics.png" alt="">
                <h1>RTX 2070 Super</h1>
                <h2>PCI-E, 8192MB 256bit GDDR6</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/graphics.png" alt="">
                <h1>RTX 2070 Super</h1>
                <h2>PCI-E, 8192MB 256bit GDDR6</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/graphics.png" alt="">
                <h1>RTX 2070 Super</h1>
                <h2>PCI-E, 8192MB 256bit GDDR6</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/graphics.png" alt="">
                <h1>RTX 2070 Super</h1>
                <h2>PCI-E, 8192MB 256bit GDDR6</h2>
                <div class="tab__item_price">
                    <h3>14 999 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="RAM" class="tabcontent">
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ram.png" alt="">
                <h1>Kingston FURY Beast Black</h1>
                <h2>DDR4, 16 ГБx2 шт, 3200 МГц, 16(CL)-20-20</h2>
                <div class="tab__item_price">
                    <h3>8 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ram.png" alt="">
                <h1>Kingston FURY Beast Black</h1>
                <h2>DDR4, 16 ГБx2 шт, 3200 МГц, 16(CL)-20-20</h2>
                <div class="tab__item_price">
                    <h3>8 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ram.png" alt="">
                <h1>Kingston FURY Beast Black</h1>
                <h2>DDR4, 16 ГБx2 шт, 3200 МГц, 16(CL)-20-20</h2>
                <div class="tab__item_price">
                    <h3>8 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ram.png" alt="">
                <h1>Kingston FURY Beast Black</h1>
                <h2>DDR4, 16 ГБx2 шт, 3200 МГц, 16(CL)-20-20</h2>
                <div class="tab__item_price">
                    <h3>8 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ram.png" alt="">
                <h1>Kingston FURY Beast Black</h1>
                <h2>DDR4, 16 ГБx2 шт, 3200 МГц, 16(CL)-20-20</h2>
                <div class="tab__item_price">
                    <h3>8 899 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="SSD" class="tabcontent">
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ssd.png" alt="">
                <h1>Kingston NV2</h1>
                <h2>PCIe 4.0 x4, чтение - 3500 Мбайт/сек, запись - 2100 Мбайт/сек, 3 бит TLC, TBW - 320 ТБ</h2>
                <div class="tab__item_price">
                    <h3>7 699 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ssd.png" alt="">
                <h1>Kingston NV2</h1>
                <h2>PCIe 4.0 x4, чтение - 3500 Мбайт/сек, запись - 2100 Мбайт/сек, 3 бит TLC, TBW - 320 ТБ</h2>
                <div class="tab__item_price">
                    <h3>7 699 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ssd.png" alt="">
                <h1>Kingston NV2</h1>
                <h2>PCIe 4.0 x4, чтение - 3500 Мбайт/сек, запись - 2100 Мбайт/сек, 3 бит TLC, TBW - 320 ТБ</h2>
                <div class="tab__item_price">
                    <h3>7 699 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ssd.png" alt="">
                <h1>Kingston NV2</h1>
                <h2>PCIe 4.0 x4, чтение - 3500 Мбайт/сек, запись - 2100 Мбайт/сек, 3 бит TLC, TBW - 320 ТБ</h2>
                <div class="tab__item_price">
                    <h3>7 699 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/ssd.png" alt="">
                <h1>Kingston NV2</h1>
                <h2>PCIe 4.0 x4, чтение - 3500 Мбайт/сек, запись - 2100 Мбайт/сек, 3 бит TLC, TBW - 320 ТБ</h2>
                <div class="tab__item_price">
                    <h3>7 699 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="HDD" class="tabcontent">
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/hdd.png" alt="">
                <h1>1 ТБ Жесткий диск WD Blue</h1>
                <h2>SATA III, 6 Гбит/с, 7200 об/мин, кэш память - 64 МБ</h2>
                <div class="tab__item_price">
                    <h3>6 299 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/hdd.png" alt="">
                <h1>1 ТБ Жесткий диск WD Blue</h1>
                <h2>SATA III, 6 Гбит/с, 7200 об/мин, кэш память - 64 МБ</h2>
                <div class="tab__item_price">
                    <h3>6 299 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/hdd.png" alt="">
                <h1>1 ТБ Жесткий диск WD Blue</h1>
                <h2>SATA III, 6 Гбит/с, 7200 об/мин, кэш память - 64 МБ</h2>
                <div class="tab__item_price">
                    <h3>6 299 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/hdd.png" alt="">
                <h1>1 ТБ Жесткий диск WD Blue</h1>
                <h2>SATA III, 6 Гбит/с, 7200 об/мин, кэш память - 64 МБ</h2>
                <div class="tab__item_price">
                    <h3>6 299 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="tabcontent__item">
                <img src="assets/img/Homepage/hdd.png" alt="">
                <h1>1 ТБ Жесткий диск WD Blue</h1>
                <h2>SATA III, 6 Гбит/с, 7200 об/мин, кэш память - 64 МБ</h2>
                <div class="tab__item_price">
                    <h3>6 299 ₽</h3>
                    <div class="tab__item_icons">
                        <img src="assets/img/Homepage/cart.png" alt="">
                        <img src="assets/img/Homepage/heart.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recommendations">
        <h1 class="firsth">Рекомендации</h1>
        <div class="recommendations__items">
            <div class="recommendations__item">
                <img src="assets/img/Homepage/kc3000.png" alt="">
                <h1>NVME Накопитель Kingston KC3000</h1>
                <div class="stars">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                </div>
                <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/kc3000.png" alt="">
                <h1>NVME Накопитель Kingston KC3000</h1>
                <div class="stars">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                </div>
                <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/kc3000.png" alt="">
                <h1>NVME Накопитель Kingston KC3000</h1>
                <div class="stars">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                </div>
                <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/kc3000.png" alt="">
                <h1>NVME Накопитель Kingston KC3000</h1>
                <div class="stars">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                </div>
                <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/kc3000.png" alt="">
                <h1>NVME Накопитель Kingston KC3000</h1>
                <div class="stars">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                </div>
                <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/kc3000.png" alt="">
                <h1>NVME Накопитель Kingston KC3000</h1>
                <div class="stars">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                    <img src="assets/img/Homepage/star.png" alt="">
                </div>
                <button>В корзину <img src="assets/img/Homepage/cart.png" alt=""></button>
            </div>
        </div>
    </section>
    <section class="news">
        <h1 class="firsth">Новости</h1>
        <div class="news__items">
            <div class="news__item">
                <img src="assets/img/Homepage/monitor.png" alt="">
                <p>DEXP 10 лет!</p>
            </div>
            <div class="news__item">
                <img src="assets/img/Homepage/ardor.png" alt="">
                <p>Новинка! Ноутбук ARDOR Gaming Element</p>
            </div>
            <div class="news__item">
                <img src="assets/img/Homepage/monitor.png" alt="">
                <p>DEXP 10 лет!</p>
            </div>
            <div class="news__item">
                <img src="assets/img/Homepage/ardor.png" alt="">
                <p>Новинка! Ноутбук ARDOR Gaming Element</p>
            </div>
            <div class="news__item">
                <img src="assets/img/Homepage/monitor.png" alt="">
                <p>DEXP 10 лет!</p>
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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>