<?php
session_start();
require '../php/db.php';
$user_id = $_SESSION['user_id'];
$user = select('SELECT * FROM users WHERE id = :id', ['id' =>$user_id]);
$user_name = $user[0]['name'];
?>
<form action="../php/edit_user.php" method="post">
    <h2>Изменение данных</h2>
    <span>
        <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
        <?php echo $_SESSION['message']; unset($_SESSION['message']) ?>
        <br>
    </span>
    <label for="name">Введите имя:</label><br>
    <input type="text" id="name" name="name" value="<?php if($user_name != null){
        echo $user_name;
    }?>"><br>

    <label for="password"> Введите пароль:</label><br>
    <input type="text" id="password" name="password"><br>

    <input type="submit" value="Изменить">

    <form action="../php/delete_user.php" method="post">
        <h2>Удаление аккаунта</h2><br>
        <input type="submit" value="Удалить">

    </form>
    <a href="../index.php">На главную</a>
</form>