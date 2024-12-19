<?php
    session_start();
?>
<?php
    $data = '';
    if(isset($_SESSION['role'])){
        $data .= "<a href='account.php' class=\"icons__item\"><img src='assets/img/account.png'>Аккаунт</a>
        <a href='controllers/logout.php' class=\"icons__item\">Выйти</a>";
    }else{
        $data .= "<a href='auth_page.php' class=\"icons__item\"><img src='assets/img/account.png'>Войти</a>";
    }
?>
<header class="header__block">
        <div class="header__upper">
            <p>8-800-555-35-35</p>
            <nav class="nav">
                <ul>
                    <li><a href="#">Покупателям</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Гарантия</a></li>
                </ul>
            </nav>
            <p>Стерлитамак</p>
            <div class="burger">
                <span></span>
            </div>
        </div>
        <div class="header__lower">
            <div class="header__lowerleft">
                <div class="twoitems"></div>
                <div class="twoitems">
                    <a href="index.php"><img src="assets/img/logo.png" alt="" id="logo"></a>
                    <button onclick="document.location='catalog.php'">Каталог<img src="assets/img/catalog.png" alt=""></button>
                </div>
                <input type="search" placeholder="Поиск">
            </div>
            <div class="icons">
                <a href="#" class="icons__item">
                    <img src="assets/img/favorite.png" alt="">
                    <p>Избранное</p>
                </a>
                <a href="cart.php" class="icons__item">
                    <img src="assets/img/cart.png" alt="">
                    <p>Корзина</p>
                </a>
                <?=$data;?>
            </div>
        </div>
</header>