<?php 
$dir = "../";
require_once $dir.'login/login.php';
$title = "ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель Администратора | <?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1221px, maximum-scale=1.0">
    <link rel="shortcut icon" href="../img/favicons/favicon-96x96.png" type="" />
   <link rel="stylesheet" href="../css/style5.css">
    <link rel="stylesheet" href="../css/style4.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/stylelogin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- load jQuery and tablesorter scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
</head>
<body class="body">

<div class="menu">
<div id="main_line">
    <?php 
    require_once '../header/connect.php'; 
        $link1 = "index.php";
        $link2 = "teams.php";
        $link3 = "stats.php";
        $link4 = "calendar.php";
        $link5 = "news.php";
    ?>
    <div class="col-xs-9 text-left" style="margin:0;padding:0;left:0;"></div>
<div class="col-xs-3 text-right" style="margin:0;padding:0;">
    <div class="row">
        <a title="Группа VK" target="_blank" href="https://vk.com/sibhl" style="margin:0 15px 0 0;"><img src="../img/svg/vk.png" alt="" style="height:20px;"></a>
       <a title="Канал на YouTube" target="_blank" href="https://www.youtube.com/channel/UCtFEIwzYux2FgvbNwT1eoUA" style="margin:0 15px 0 0;"><img src="../img/svg/youtube.png" alt=""></a>
       <a title="Страница Instagram" target="_blank" href="https://www.instagram.com/sibirhl/" style="margin:0 40px 0 0;"><img src="../img/svg/inst.png" alt="" style="height:26px;"></a>
       <a title="Войти в аккаунт" class="open" href="#"><img src="../img/svg/login.png" alt=""></a>
    </div>
    <div class="row">
       <div class="mover">
        <div class="row" style="height:30px;text-align:right;">
            <div class="col-xs-8 text-left" style="margin:0;padding:0;"><h4 style="margin:5px 0 0 20px;">| <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Авторизация';?></h4></div>
            <div class="col-xs-4" style="margin:0;padding:0;">
            <a title="Войти в аккаунт" class="closeds" href="#"><img src="../img/svg/login.png" alt="" style="height:26px;width:auto;margin:0 25px 0 0;"></a>
            </div>
        </div>
        <div class="row login_row">
         
         <?php
			
			if(!$_SESSION['id']):
			
			?>
         
          <form class="clearfix" action="" method="post" style="margin:0;padding:0;">
          
            <?php
				if($_SESSION['msg']['login-err'])
					{
						//echo '<div class="err">'.$_SESSION['msg']['login-err'].'</div>';
						unset($_SESSION['msg']['login-err']);
					}
			?>
         <div class="row" style="margin:0;padding:0;">
          <div class="col-xs-4 text-right" style="margin:0;padding:0;">
              <label>Логин:</label><br>
              <label>Пароль:</label>
          </div>
          <div class="col-xs-8" style="margin:0;padding:0;">
              <input type="text" name="username" id="username" placeholder=" Введите логин" class="login-place" value="" size="23" required><br>
              <input type="password" placeholder=" Введите пароль" class="login-place" name="password" id="password" size="23" required>
          </div>
         </div>
        <div class="row" style="margin:0;padding:0;text-align:center;">
            <label>Запомнить меня</label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1">
           <br>
           <input type="submit" name="submit" value="Login" class="login-btn">
        </div>   
           
           </form>
                       
            <?php
			
			else:
			
			?>
            <h5 style="margin:10px 0 10px 0;text-align:center;">
            <?php 
                if ($_SESSION['usr']=='superadmin') { echo 'Хоккейная Нация'; } 
                else if ($_SESSION['usr']=='admin') { echo 'Администратор Лиги'; }
                else { echo 'Игрок'; }
            ?></h5>
            <?php if ($_SESSION['usr']=='superadmin' || $_SESSION['usr']=='admin') { ?> 
                 <a href="../admin_panel/index.php"><button type="button" class="btn"><h5>Панель администратора</h5></button></a>
            <?php } ?>
           
            <a href="?logoff"><button type="button" class="btn"><h5>Выйти</h5></button></a>
            <?php
			endif;
			?>
           
           </div>
       </div>
    </div>
</div>
</div>
<div id="nav_line_1">
  <div class="col-xs-1"  style="margin:0;padding:0;z-index:2;height:60px;">
        <a href="../index.php"><img src="../img/logo.png" alt="" id="nav_logo" style="z-index:3;"></a>
        
    </div>
    
    <div class="col-xs-11" id="menuback" style="margin:0;padding:0;text-align:center;">
       <div class="row" style="margin:auto;padding:0;">
           <ul id="navbar">
        <li><a href="../<?=$link1?>" style="text-align:right;padding-right:25px;">ГЛАВНАЯ</a></li>
        <li><a href="../<?=$link2?>">КОМАНДЫ</a></li>
        <li><a href="../<?=$link3?>">СТАТИСТИКА</a></li>
        <li><a href="../<?=$link4?>">КАЛЕНДАРЬ</a></li>
        <li><a href="#" style="text-align:left;padding-left:25px;">НОВОСТИ</a></li>
    </ul> 
       </div>
        
    </div>
</div>
<div id="header">
   <div class="col-xs-1" style="margin:0;padding:0;z-index:2;height:60px;"><a href="index.php"><img src="../img/logo.png" alt="" id="nav_logo" style="z-index:3;display:none;"></a>
   </div>
   <div class="col-xs-11" style="margin:0;padding:0;text-align:center;">
       <div class="row" id="topwrap"></div>
   </div>
</div>
</div>
    <div class="section" id="background">
        <section id="main_block" style="height:1170px;">
            <div class="main"> 
            <br><h1>У Вас нет прав доступа к этой странице!</h1><br>
            </div>
        </section>
        <section>
            <div class="row" style="margin:0;padding:0;width:100%;">
                <br><br>
            </div>
        </section>
    </div>
    
    
    <!-- -----------------------------------BASE----------------------------- -->
     <div class="row" id="rowspace"></div>
        <div class="row" id="footer">
            <div class="col-xs-2 col-md-offset-1"> 
               <a href="/index.php"><img src="../img/hockeynation_logo_white.png" alt=""></a>
            </div>
            <div class="col-xs-9 text-left"> 
               <h3 style="color:white;font-size:15px;line-height:1.4;margin-top:0;">ОФИЦИАЛЬНЫЙ ИНФОРМАЦИОННЫЙ ПОРТАЛ<br>СОЗДАННЫЙ ДЛЯ РАЗВИТИЯ И ПОПУЛЯРИЗАЦИИ<br>ХОККЕЯ И ЗДОРОВОГО ОБРАЗА ЖИЗНИ</h3>
               <h4 style="margin-top:10px;color:white;font-size:13px;">Все права защищены | Hockey Nation © 2018</h4>
            </div>
        </div>

       
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>
        new WOW().init();
         
    </script>

    <!-- Inclins (below), or include individual files as needasdasded -->
    <script type="text/javascript">
        $(document).ready(
                function() {
                
            $('.open').on('click', function(event) {
                if (!$(".mover").hasClass("is-visible")) {
                    $(".mover").addClass("is-visible");
                } else if ($(".mover").hasClass("is-visible")) {
                    $(".mover").removeClass("is-visible");
                }
                //$('.mover').removeClass('is-visible');
            });
            $('.closeds').on('click', function(event) {
                if ($(".mover").hasClass("is-visible")) {
                    $(".mover").removeClass("is-visible");
                }
                //$('.mover').removeClass('is-visible');
            });
            $(document).mouseup(function(e) {
                var $target = $(e.target);
                if ($target.closest(".mover").length == 0) {
                    $(".mover").removeClass("is-visible");
                }
            });
                });
    </script>
</body>
</html>