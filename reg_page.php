<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/reg_page.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Регистрация</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <main class="main__block">
        <form action="controllers/reg.php" method="post">
            <h1>Регистрация</h1>
            <fieldset>
                <legend>Имя</legend>
                <input type="text" name="name" id="name" required>
            </fieldset>
            <fieldset>
                <legend>Фамилия</legend>
                <input type="text" name="surname" id="surname" required>
            </fieldset>
            <fieldset>
                <legend>Логин</legend>
                <input type="text" name="login" id="login" required>
            </fieldset>
            <fieldset>
                <legend>E-mail</legend>
                <input type="email" name="email" id="email" required>
            </fieldset>
            <fieldset>
                <legend>Пароль</legend>
                <input type="password" name="password" id="password" required>
            </fieldset>
            <fieldset>
                <legend>Повторите пароль</legend>
                <input type="password" name="password-repeat" id="password-repeat" required>
            </fieldset>
            <div class="checkbox">
                <input type="checkbox" name="blank" id="blank" required>
                <label for="blank">Я согласен с Условиями и Политикой Конфиденциальности</label>
            </div>
            <button type="submit">Создать аккаунт</button>
            <div class="auth__text">
                <p>Уже есть аккаунт?</p><a href="auth_page.php">Войти</a>
            </div>
        </form>
    </main>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>