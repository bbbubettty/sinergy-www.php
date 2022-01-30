<?php
session_start();
if (isset($_SESSION['user']))
{
    header("Location: ../profile.php");
}
//$_SESSION['message']="";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label for="">ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое имя свое имя">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label for="">Почта</label>
        <input type="email" name="email" placeholder="введите логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="введите пароль">
        <label for="">Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="введите пароль повторно">
        <label for="">Изображение профиля</label>
        <input type="file" name="avatar">
        <button type="submit">Регистрация</button>
        <p>
            У вас не аккаунта - <a href="/index.php">Вернуться к авторизации</a>
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
