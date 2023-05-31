<?php
require'./db.php';
session_start();

$name = $_POST['name'];
$password = $_POST['password'];
$user_id = $_SESSION['user_id'];

if (!empty($name)){
    if(!empty($password)){
        update('UPDATE users SET name = :name, password = :password WHERE id = :user_id',
            ['name' => $name, 'password' => password_hash($password, PASSWORD_DEFAULT),
        'user_id' => $user_id]
        );
        $_SESSION['message'] = 'Обновление данных прошло успешно!';
    }
    else{
        $_SESSION['error'] = "Поле 'Пароль' пустое";
    }
}
else {
    $_SESSION['error'] = "Поле 'Имя' пустое";
}
header('Location: ../pages/profile.php');
?>