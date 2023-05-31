<?php
session_start();
echo $_SESSION['error'];
unset($_SESSION['error']);
?>
<form method="post" action="../php/registr.php">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login">
    <br>
    <label for="pass"> Password:</label>
    <input type="password" id="pass" name="password">
    <br>
    <label for="password" id="pass_repeat"> Подтвердите пароль:</label>
    <input type="password" id="pass_repeat" name="password_repeat">
    <br>
    <input type="submit" value="Log in">

</form>
<a href="auth_form.php">Авторизация</a>