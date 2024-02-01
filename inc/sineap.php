<?php
    session_start();
    require_once './connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password == $password_confirm) {
        $path = 'upload/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка';
            header('Location: ../register.php');
        }

        $full_name = mysqli_real_escape_string($connect, $full_name);
        $login = mysqli_real_escape_string($connect, $login);
        $email = mysqli_real_escape_string($connect, $email);
        $password = mysqli_real_escape_string($connect, $password);
        $path = mysqli_real_escape_string($connect, $path);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
            VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Реєстрація пройшла успішно';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../rgister.php');
    }
?>
