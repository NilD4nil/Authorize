<?php
session_start();
    echo $_SESSION['error'];
    unset($_SESSION['error']);
?>
<form method="post" action="../php/login.php">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>
    <br>
    <label for="pass"> Password:</label>
    <input type="password" id="pass" name="password" required>
    <br>
    <input type="submit" value="Log in">
</form>
<a href="registr_form.php"></a>