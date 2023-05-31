<?php
require './db.php';
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$user = select('SELECT * FROM users WHERE login = :login', ['login' => $login]);

if (!empty($user)){
    if(password_verify($password, $user[0]['password'])){
        $_SESSION['user_id'] = $user[0]['id'];
        header("Location: ../pages/profile.php");
    }
    else {
        $_SESSION['error'] = 'Неправильный пароль!';
        header('Location: ../pages/auth_form.php');
    }
}
else{
    $_SESSION['error'] = 'Неправильный логин!';
    header('Location: ../pages/auth_form.php');
    }

?>