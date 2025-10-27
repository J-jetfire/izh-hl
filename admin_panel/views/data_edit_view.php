<?php 
session_start();
require_once "header/connect.php";
$link = db_connect();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>EDIT DATA | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Ред. данных - панель выбора -->
        <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Ред. данных - панель выбора -->
        <h3>Профиль Лиги</h3>
        <h3>Дополнительная информация о Лиге и её руководстве</h3>
        
        
    </div>
    
    
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>