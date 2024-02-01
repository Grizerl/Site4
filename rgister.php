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
    <form action="./inc/sineap.php" method="post" enctype="multipart/form-data">
    <label>ФІО</label>
    <input type="text" name="fulname" placeholder="Введіть свіє повне імя">
    <label>Логін</label>
    <input type="text" name="login" placeholder="Введіть свій логін">
    <label>Пошта</label>
    <input type="email" name="email" placeholder="Введіть свію пошту">
    <label>Зображення профілю</label>
    <input type="file" name="avatar">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введіть свій пароль">
    <label>Підтвердження пароля</label>
    <input type="password" name="password_confirm"placeholder="Підтвердіть  пароль">
    <button>Войти</button>
    <p>
        У вас вже є акаунт?-<a href="">Авторизуйтесь</a>
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