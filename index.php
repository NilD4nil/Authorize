<?php
session_start();
require "./php/db.php";
$themes = select('SELECT * FROM themes');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
<?php if(!empty($_SESSION['user_id'])){?>
    <form action="./php/adding_theme.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Название фильма"><br>
        <textarea name="text" placeholder="Первое сообщение рецензии:">
        </textarea><input type="file" name="cover"><br>
        <input type="submit" value="Создать рецензию">
    </form>
<?php } ?>
    <hr>
    <?php  if(!empty($themes)){ ?>
        <?php foreach($themes as $theme) {?>
            <img src="data:<?=$theme['type']?>;base64,<?=$theme['cover']?>" alt="<?=$theme['cover']?>">
            <h1><?=$theme['title']?></h1>
            <span><?=$theme['text']?></span>
        <?php } ?>
    <?php } else {?>
    <h2>Постов ещё нет</h2>
    <?php } ?>
</div>
<div>
    <form action="./php/delete_theme.php" method="post">
        <input type="submit" value="Удаление фильма">
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>123</title>
    <link rel="stylesheet" href="./php/mainstyle.css">
</head>
<body>
<div class="container">
    <header>
        <a class="icons" href="./pages/profile.php">Профиль</a>
    </header>
</div>
</body>
</html>