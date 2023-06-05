<?php
session_start();
    echo $_SESSION['error'];
    unset($_SESSION['error']);
?>
<form action="../php/login.php" method="post">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>
    <br>
    <label for="pass"> Password:</label>
    <input type="password" id="pass" name="password" required>
    <br>
    <input type="submit" value="Log in">
</form>
<a href="registr_form.php">Регистрация</a>
<br>
<a href="../php/global.php">На главную</a>