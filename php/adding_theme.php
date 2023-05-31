<?php
session_start();
require './db.php';
$title = $_POST['title'];
$message = $_POST['text'];
$session_id = $_SESSION['s_id'];

if (!empty($title)){
    if (!empty($message)){
        if(!empty($_FILES['cover']['tmp_name'])){
            $file = file_get_contents($_FILES['cover']['tmp_name']);
            $type = $_FILES['cover']['type'];
            $base64 = base64_encode($file);
            insert(
                'INSERT INTO themes(title, text, cover, type) VALUES (:title, :text, :cover, :type) WHERE id = :session_id',
                [
                  'title' => $title,
                  'text' => $message,
                  'cover' => $base64,
                  'type' => $type
                ]
            );
            header('Location: ../index.php');
        }
        else{
            $_SESSION['error'] = "Нет изображения";
            header('Location: ../index.php');
        }
    }
    else{
        $_SESSION['error'] = "Поле 'Текст' пустое";
        header('Location: ../index.php');
    }
}
else{
    $_SESSION['error'] = "Поле 'Заголовок' пустое";
    header('Location: ../index.php');
}
?>