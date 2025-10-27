<?php
$dir = "";
require_once $dir.'login/login.php';
$title = "ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА";
$players = "players8";
$cuptable = "cuptable8";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'header/metastyle.php'; ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#team_table2").tablesorter();
        });

    </script>
    <title><?=$title?> | Статистика</title>
</head>

<body class="body">
    <?php require_once 'header/topper.php'; 
    //   	if (!$_GET['div']){
    //         $_GET['div'] = "amateur";
    //     }
  		// if (!$_GET['part']){
    //         $_GET['part'] = "playoff";
    //         $players = "players7";
    //         $cuptable = "cuptable7";
    //     }
    //     if ($_GET['part']=="regular"){
    //         $players = "players7_regular";
    //         $cuptable = "cuptable7_regular";
    //     }
  	?>
    <div class="section" id="background">

        <div class="row" style="text-align:center;width:100%;margin:0;padding:0;">
            <br>
        </div>

        <section id="main_block" style="height:auto;">
            <div class="main">
              <!--  <div class="container" id="statslist" style="margin-bottom:20px;">-->
              <!--   <div class="row" style="border-radius:50px;">-->
              <!--     <div class="col-xs-6" id="switch_part1">-->
              <!--       <a href="stats.php?stat=<?=$_GET['stat']?>&div=<?=$_GET['div']?>&part=playoff"><h1>PLAY-OFF</h1></a>-->
              <!--     </div>-->
              <!--     <div class="col-xs-6" id="switch_part2">-->
              <!--        <a href="stats.php?stat=<?=$_GET['stat']?>&div=<?=$_GET['div']?>&part=regular"><h1>Регулярный Чемпионат</h1></a>-->
              <!--     </div>-->
              <!--   </div>-->
            	 <!--</div>-->
            <?php
                
                if (!$_GET['stat']){ require_once 'statmodule/table.php'; }    
                if ($_GET['stat']=='snipers'){ require_once 'statmodule/snipers.php'; }
                if ($_GET['stat']=='assists'){ require_once 'statmodule/assists.php'; }
                if ($_GET['stat']=='points'){ require_once 'statmodule/points.php'; }
                if ($_GET['stat']=='shots'){ require_once 'statmodule/shots.php'; }
                if ($_GET['stat']=='bshots'){ require_once 'statmodule/bshots.php'; }
                if ($_GET['stat']=='faceoff'){ require_once 'statmodule/faceoff.php'; }
                if ($_GET['stat']=='penalty'){ require_once 'statmodule/penalty.php'; }
                if ($_GET['stat']=='gkeepers'){ require_once 'statmodule/gkeepers.php'; }
            ?>
           
            </div>
        </section>
        
    </div>
    <br><br>
<script>var keys1 = 0;</script>
    <!-- -----------------------------------BASE----------------------------- -->
    <?php require_once 'header/footer.php';
          require_once 'header/metastyle_end.php';
    ?>
</body>

</html>
