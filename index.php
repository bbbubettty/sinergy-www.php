<?php
    session_start();
if (isset($_SESSION['user']))
{
    header("Location: ../profile.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form action="vendor/signin.php"method="post">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="введите логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас не аккаунта - <a href="/register.php">Зарегестрируйтесь</a>
        </p>
        <?php
        if (isset($_SESSION['message']))
        {
            echo '<p class="msg">'.$_SESSION['message'].'</p>';
            unset($_SESSION['message']);
        }

        ?>
    </form>
</body>
</html>