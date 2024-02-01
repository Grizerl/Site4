<?php
session_start();
require_once './connect.php';

$login = $_POST['Username'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");

if (mysqli_num_rows($check_user) > 0) {
    echo "увійшов"; // Add a semicolon here
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'], // Fix the array key
        "avatar" => $user['avatar']
    ];
} else {
    $_SESSION['message'] = 'Невірні дані';
    header('Location: ../index.php');
}

?>
