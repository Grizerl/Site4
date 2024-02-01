<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація і регістрацція</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <form action="inc/sinein.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введіть свій логін">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введіть свій пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нема акаунта?-<a href="./rgister.php">Зареєструйтесь</a>
    </p>
    <?php 
    if($_SESSION['message']){
echo'<p class="msg">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
    ?>


    </form>
</body>
</html>