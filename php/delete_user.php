<?php
require'./db.php';
session_start();

$user_id = $_SESSION['user_id'];
delete(
    'DELETE FROM users WHERE id = :user_id',
    [
        'user_id' => $user_id
    ]
);
unset($_SESSION['user_id']);
header('Location: ../pages/auth_form');
?>