<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>РЕДАКТИРОВАТЬ СТАТИСТИКУ ИГРОКОВ | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
       <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        <br>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ</h3>
        <div class="row" style="margin:0 50px 0 50px;width:1100px;">
        <div class="col-xs-6 text-left" style="margin:0 10px 0 0;padding:0;width:540px;">
            <a href="data_edit.php?action=roster"><button class="btn" style="width:540px;height:50px;color:#fff;background:#1b1d68;font-weight:bold;">РЕДАКТИРОВАТЬ ЛИЧНЫЕ ДАННЫЕ</button></a>
        </div>
        <div class="col-xs-6 text-right" style="margin:0 0 0 10px;padding:0;width:540px;">
            <a href="data_edit.php?action=players"><button class="btn" style="width:540px;height:50px;color:#fff;background:#1b1d68;font-weight:bold;">РЕДАКТИРОВАТЬ СТАТИСТИКУ</button></a>
        </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script3.js"></script>
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>