<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/auth_page.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Авторизация</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <main class="main__block">
        <form action="controllers/auth.php" method="post">
            <h1>Авторизация</h1>
            <fieldset>
                <legend>Логин</legend>
                <input type="text" name="login" id="login" required>
            </fieldset>
            <fieldset>
                <legend>Пароль</legend>
                <input type="password" name="password" id="password" required>
            </fieldset>
            <div class="checkbox">
                <input type="checkbox" name="blank" id="blank">
                <label for="blank">Запомнить меня</label>
            </div>
            <button type="submit">Войти</button>
            <div class="auth__text">
                У вас нет аккаунта? <a href="reg_page.php">Зарегистрироваться</a>
            </div>
        </form>
    </main>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>