<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>ADD DATA | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    <div class="container" style="padding:0;text-align:center;">
        <!-- Добавление данных - панель выбора -->
        <?php include_once "views/data_add_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
    </div>
    <?php include_once "header/footer.php"; ?>
</body>
</html>