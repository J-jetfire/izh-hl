<div id="page-preloader" class="preloader">
           <div class="loader"></div>
       </div>
<div class="menu">
<div id="main_line">
    <?php 
    require_once 'header/connect.php'; 
    require_once 'login/auth.php';
        $link1 = "index.php";
        $link2 = "teams.php";
        $link3 = "stats.php";
        $link4 = "calendar.php";
        $link5 = "news.php";

        $link19 = "ihl19/index.php"; // SEASON 2018-2019
        $link20 = "ihl20/index.php"; // SEASON 2019-2020

        $link21 = "ihl21/index.php"; // SEASON 2020-2021
        $link22 = "ihl22/index.php"; // SEASON 2021-2022


        $link23 = "ihl23/index.php"; // SEASON 2022-2023
        $link24 = "ihl24/index.php"; // SEASON 2023-2024

        $link_main = "index.php";    // SEASON 2020-2021

        $linktext6 = "ИХЛ 18/19";
        $linktext7 = "ИХЛ 19/20";

        $linktext8 = "ИХЛ 20/21";
        $linktext9 = "ИХЛ 21/22";
        $linktext10 = "ИХЛ 22/23";
        $linktext11 = "ИХЛ 23/24";
    ?>
</div>
<div id="nav_line_1">
  <div class="col-xs-1"  style="margin:0;padding:0;z-index:2;height:60px;">
        <a href="index.php"><img src="img/logo.png" alt="" id="nav_logo" style="z-index:3;"></a>
        
    </div>
    
    <div class="col-xs-11" id="menuback" style="margin:0;padding:0;text-align:center;">
       <div class="row" style="margin:auto;padding:0;">
           <ul id="navbar">
        <li><a href="<?=$link1?>" style="text-align:right;padding-right:25px;">ГЛАВНАЯ</a></li>
        <li><a href="<?=$link2?>">КОМАНДЫ</a></li>
        <li><a href="<?=$link3?>">СТАТИСТИКА</a></li>
        <li><a href="<?=$link4?>">КАЛЕНДАРЬ</a></li>
        <li><a href="<?=$link5?>">НОВОСТИ</a></li>
        <li><a href="<?=$link23?>"><?=$linktext10?></a></li>
        <li><a href="<?=$link24?>" style="text-align:left;padding-left:25px;"><?=$linktext11?></a></li>
    </ul> 
       </div>
        
    </div>
</div>
<div id="header">
   <div class="col-xs-1" style="margin:0;padding:0;z-index:2;height:60px;"><a href="index.php"><img src="img/logo.png" alt="" id="nav_logo" style="z-index:3;display:none;"></a>
   </div>
   <div class="col-xs-11" style="margin:0;padding:0;text-align:center;">
       <div class="row" id="topwrap"></div>
   </div>
</div>
</div>