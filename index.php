<?php
$dir = "";
require_once $dir.'login/login.php';
$title = "Чемпионат Ижевска по хоккею";
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <?php require_once 'header/metastyle.php'; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#shl_main_table").tablesorter();
            $("#shl_main_table2").tablesorter();
        });
    </script>

    <title><?=$title?></title>
    <style>
        #qqw{
            height:450px!important
        }
    </style>
</head>

<body class="body">
    <?php require_once 'header/topper.php';

        $linkprtk = "protokol25.php?protokol="; // link to protokol

        $tname1 = "ТУРНИРНАЯ ТАБЛИЦА"; // caption of 1st table
        $table = "shl_main_table"; // id for css
        $table2 = "shl_main_table2";               // id for css
        $cuptable = "cuptable8";    // list of teams
        $news = "news";            // list of news
        $calendar = "calendar8";    // list of matches
        $players = "players8";      // list of players

    ?>
    <div class="section" id="background">
        <div class="row" style="text-align:center;width:100%;margin:0;padding:0;">
            <br>
        </div>
        <section id="main_block" style="height:auto;background:transparent;">
            <div class="main">
                <div class="row" id="firstrow">
                    <div class="col-xs-6 text-left">
                        <div id="newsblock">
                            <div class="row" id="news">
                                <h4>НОВОСТИ</h4>
                            </div>
                            <div class="row" id="slider">
<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
  <!-- Индикаторы -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <!--<li data-target="#carousel" data-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner">
   <?php
      $sql3 = "SELECT * FROM $news ORDER BY id DESC LIMIT 3";
      $records3 = mysqli_query($con,$sql3);
      $k=0;
      while($row3 = mysqli_fetch_array($records3)){
      if ($k==0){ echo'<div class="item active">';} else {
      echo'<div class="item">';}
   ?>
    <a href="newspage.php?page=<?=$row3['id']?>" style="text-decoration:none;outline:none;">
     <div class="row">
      <img src="<?=$row3['image']?>" alt="...">
      </div>

    </a>
    </div>
    <?php $k++; } ?>
  </div>
  <!-- Элементы управления -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Предыдущий</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Следующий</span>
  </a>
</div>
                        </div>

                    </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <div class="row" style="margin:0 0 10px 10px;padding:0;">
                            <table id="<?=$table?>">
                                <thead>
                                    <tr style="height:45px;">
                                        <th colspan="2"></th>
                                        <th colspan="5" id="tablecap"><?=$tname1?></th>
                                        <th colspan="2"></th>

                                    </tr>
                                    <tr style="font-size:12px;height:35px;">
                                        <th style="padding-left: 15px;">М</th>
                                        <th style="padding:0;margin:0;"> </th>
                                        <th>Команда</th>
                                        <th>И</th>
                                        <th>В</th>
                                        <th>Н</th>
                                        <th>П</th>
                                        <th>Ш</th>
                                        <th style="padding-right: 15px;">О</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                $sql4 = "SELECT * FROM `$cuptable` WHERE cup=1 ORDER BY point DESC, win DESC, wino DESC, winb DESC, team ASC LIMIT 10";
                //$sql4 = "SELECT * FROM `$cuptable` WHERE cup=1 ORDER BY point DESC, win DESC, wino DESC, winb DESC, diffgoal DESC, goal DESC LIMIT 13";// Кубок Покрышкина
                $records4 = mysqli_query($con,$sql4);
                                     $k = 0;$l=1;
                   while($row4 = mysqli_fetch_array($records4)){
                    $k++;echo "<tr>";
                       echo " <td nowrap style='padding-left: 15px;'>".$k."</td>";
                       echo ' <td nowrap style="padding:2px;margin:0;"><img src="'.$row4['logo'].'" alt="" id="table_logo" style="height:30px;width:auto;"></td>';
                       echo " <td nowrap style='font-size:12px;width:242px;'>".$row4['team']."</td>";
                       echo " <td nowrap>".$row4['game']."</td>";
                       echo " <td nowrap>".$row4['win']."</td>";

                       echo " <td nowrap>".$row4['winb']."</td>";

                       echo " <td nowrap>".$row4['lost']."</td>";
                       echo " <td nowrap>".$row4['goal']."-".$row4['lostgoal']."</td>";
                       echo " <td nowrap style='padding-right: 15px;'>".$row4['point']."</td>";
                       echo "</tr>";
            }
                                   ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div class="row" id="secondrow">
                    <div class="owl-carousel owl-theme">
                       <?php

                            $sql3 = "SELECT * FROM `$calendar` WHERE NOT (result='-') ORDER BY id ";
                            $records3 = mysqli_query($con,$sql3);
                            $keys = 0;
                            while($row3 = mysqli_fetch_array($records3)) {
                        ?>
                        <div class="item">
                           <a href="<?=$linkprtk.''.$row3['id']?>">
                            <div class="row" style="margin-top:5px;">
                                <div class="col-xs-7 text-left">
                                    <div class="row" style="text-align:left;"><p><?=$row3['place']?></p></div>
                                    <div class="row"><p><?=$row3['part']?></p></div>

                                </div>
                                <div class="col-xs-5 text-right">
                                    <div class="row"><p><?=date("d.m.Y",strtotime($row3['date']))?></p></div>
                                    <div class="row"><p><?=$row3['time']?></p></div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-xs-4">
                                    <img src="<?=$row3['logohome']?>" alt="">
                                </div>
                                <div class="col-xs-4">
                                    <div class="row" style="margin-top:40px;text-align:center;">
                                        <p id="p_res" style="font-size:36px;"><?=$row3['result']?></p>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?=$row3['logoaway']?>" alt="">
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php $keys++; } ?>

                        <?php
                            $sql2 = "SELECT * FROM `$calendar` WHERE (result='-') ORDER BY id";
                            $records2 = mysqli_query($con,$sql2); $keys2 = 0;
                            while($row2 = mysqli_fetch_array($records2)) {
                        ?>
                        <div class="item">
                           <a href="<?=$linkprtk.''.$row2['id']?>">
                            <div class="row" style="margin-top:5px;">
                                <div class="col-xs-7 text-left">
                                    <div class="row"><p><?=$row2['place']?></p></div>
                                    <div class="row"><p><?=$row2['part']?></p></div>

                                </div>
                                <div class="col-xs-5 text-right">
                                    <div class="row"><p><?=date("d.m.Y",strtotime($row2['date']))?></p></div>
                                    <div class="row"><p><?=$row2['time']?></p></div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-xs-4">
                                    <img src="<?=$row2['logohome']?>" alt="">
                                </div>
                                <div class="col-xs-4">
                                    <div class="row" style="margin-top:40px;">
                                        <p id="p_res" style="font-size:36px;"><?=$row2['result']?></p>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?=$row2['logoaway']?>" alt="">
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php $keys2++; } ?>


                    </div>
                </div>

    <!-- БЛОК МАТЧЕЙ --><!-- БЛОК МАТЧЕЙ --><!-- БЛОК МАТЧЕЙ --><!-- БЛОК МАТЧЕЙ -->
                <div class="row" id="thirdrow" style="margin-bottom: 10px">
                <div class="row" id="trtop" style="border-radius:30px;"><h4>ЛУЧШИЕ ИГРОКИ</h4></div>
                </div>
                <div class="row" id="thirdrow">
                   <div class="row">
                        <div class="col-xs-3" id="trstc">
                        <a href="<?=$link3?>?stat=snipers&div=amateur"><div class="row" id="trtop"><h4>СНАЙПЕРЫ</h4></div></a>
                        <?php
                            $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY goal DESC, game, sname LIMIT 4";
                            $records = mysqli_query($con,$sql);
                            while($row = mysqli_fetch_array($records))
                            {
                        ?>


                           <div class="row" id="trstats">
                            <div class="col-xs-3">
                                <img src="<?=$row['img']?>" alt="" id="trimg" style="background:none;">
                            </div>
                            <div class="col-xs-6">
                                <table id="playerstats_table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"><h3><?=$row['sname']?></h3></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding-right:0;padding-left:0;text-align:left;width:70px;"><h4>#<?=$row['num']?></h4>
                                                    </td>
                                                    <td style="padding-right:0;padding-left:0;text-align:center;width:82.5px;">
                                                        <h4><?=$row['pos']?></h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                            </div>
                            <div class="col-xs-3">
                                <div class="row" style="margin:0;padding:0;">
                                            <h1><?=$row['goal']?></h1>
                                </div>
                                <div class="row" style="margin:0;padding:0;">
                                            <?php
                                $lined='голов';
                                if ($row['goal']==1){$lined='гол';}if ($row['goal']==21){$lined='гол';}
                                if ($row['goal']==31){$lined='гол';}if ($row['goal']==41){$lined='гол';}
                                if ($row['goal']==51){$lined='гол';}if ($row['goal']==61){$lined='гол';}
                                if ($row['goal']==71){$lined='гол';}if ($row['goal']==81){$lined='гол';}
                                if ($row['goal']==91){$lined='гол';}if ($row['goal']==101){$lined='гол';}
                                if ($row['goal']>=2 && $row['goal']<=4){$lined='гола';}
                                if ($row['goal']>=22 && $row['goal']<=24){$lined='гола';}
                                if ($row['goal']>=32 && $row['goal']<=34){$lined='гола';}
                                if ($row['goal']>=42 && $row['goal']<=44){$lined='гола';}
                                if ($row['goal']>=52 && $row['goal']<=54){$lined='гола';}
                                if ($row['goal']>=62 && $row['goal']<=64){$lined='гола';}
                                if ($row['goal']>=72 && $row['goal']<=74){$lined='гола';}
                                if ($row['goal']>=82 && $row['goal']<=84){$lined='гола';}
                                if ($row['goal']>=92 && $row['goal']<=94){$lined='гола';}
                                if ($row['goal']>=102 && $row['goal']<=104){$lined='гола';}
                                if ($row['goal']>=5 && $row['goal']<=20){$lined='голов';}
                                if ($row['goal']>=25 && $row['goal']<=30){$lined='голов';}
                                if ($row['goal']>=35 && $row['goal']<=40){$lined='голов';}
                                if ($row['goal']>=45 && $row['goal']<=50){$lined='голов';}
                                if ($row['goal']>=55 && $row['goal']<=60){$lined='голов';}
                                if ($row['goal']>=65 && $row['goal']<=70){$lined='голов';}
                                if ($row['goal']>=75 && $row['goal']<=80){$lined='голов';}
                                if ($row['goal']>=85 && $row['goal']<=90){$lined='голов';}
                                if ($row['goal']>=95 && $row['goal']<=100){$lined='голов';}
                                if ($row['goal']>=105 && $row['goal']<=110){$lined='голов';}
                              ?>
                                            <h4>
                                                <?=$lined?>
                                            </h4>
                                        </div>
                            </div>
                        </div>


                        <?php } ?>
                    </div>
                        <div class="col-xs-3" id="trstc">

                        <a href="<?=$link3?>?stat=assists&div=amateur"><div class="row" id="trtop"><h4>АССИСТЕНТЫ</h4></div></a>
                        <?php
                        $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY assist DESC, game, sname LIMIT 4";
                        $records = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($records))
                            {
                        ?>


                        <div class="row" id="trstats">
                            <div class="col-xs-3">
                                <img src="<?=$row['img']?>" alt="" id="trimg" style="background:none;">
                            </div>
                            <div class="col-xs-6">
                                <table id="playerstats_table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"><h3><?=$row['sname']?></h3></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding-right:0;padding-left:0;text-align:left;width:70px;"><h4>#<?=$row['num']?></h4>
                                                    </td>
                                                    <td style="padding-right:0;padding-left:0;text-align:center;width:82.5px;">
                                                        <h4><?=$row['pos']?></h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                            </div>
                            <div class="col-xs-3">
                                <div class="row" style="margin:0;padding:0;">
                                            <h1><?=$row['assist']?></h1>
                                </div>
                                <div class="row" style="margin:0;padding:0;">
                                            <?php
                                $lined='передач';
                                if ($row['assist']==1){$lined='передача';}if ($row['assist']==21){$lined='передача';}
                                if ($row['assist']==31){$lined='передача';}if ($row['assist']==41){$lined='передача';}
                                if ($row['assist']==51){$lined='передача';}if ($row['assist']==61){$lined='передача';}
                                if ($row['assist']==71){$lined='передача';}if ($row['assist']==81){$lined='передача';}
                                if ($row['assist']==91){$lined='передача';}if ($row['assist']==101){$lined='передача';}
                                if ($row['assist']>=2 && $row['assist']<=4){$lined='передачи';}
                                if ($row['assist']>=22 && $row['assist']<=24){$lined='передачи';}
                                if ($row['assist']>=32 && $row['assist']<=34){$lined='передачи';}
                                if ($row['assist']>=42 && $row['assist']<=44){$lined='передачи';}
                                if ($row['assist']>=52 && $row['assist']<=54){$lined='передачи';}
                                if ($row['assist']>=62 && $row['assist']<=64){$lined='передачи';}
                                if ($row['assist']>=72 && $row['assist']<=74){$lined='передачи';}
                                if ($row['assist']>=82 && $row['assist']<=84){$lined='передачи';}
                                if ($row['assist']>=92 && $row['assist']<=94){$lined='передачи';}
                                if ($row['assist']>=102 && $row['assist']<=104){$lined='передачи';}
                                if ($row['assist']>=5 && $row['assist']<=20){$lined='передач';}
                                if ($row['assist']>=25 && $row['assist']<=30){$lined='передач';}
                                if ($row['assist']>=35 && $row['assist']<=40){$lined='передач';}
                                if ($row['assist']>=45 && $row['assist']<=50){$lined='передач';}
                                if ($row['assist']>=55 && $row['assist']<=60){$lined='передач';}
                                if ($row['assist']>=65 && $row['assist']<=70){$lined='передач';}
                                if ($row['assist']>=75 && $row['assist']<=80){$lined='передач';}
                                if ($row['assist']>=85 && $row['assist']<=90){$lined='передач';}
                                if ($row['assist']>=95 && $row['assist']<=100){$lined='передач';}
                                if ($row['assist']>=105 && $row['assist']<=110){$lined='передач';}
                              ?>
                                            <h4>
                                                <?=$lined?>
                                            </h4>
                                        </div>
                            </div>
                        </div>


                        <?php } ?>
                    </div>
                        <div class="col-xs-3" id="trstc">
                        <a href="<?=$link3?>?stat=points&div=amateur"><div class="row" id="trtop"><h4>БОМБАРДИРЫ</h4></div></a>
                        <?php
                            $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY point DESC, goal DESC, assist DESC, game, sname LIMIT 4";
                            $records = mysqli_query($con,$sql);
                            while($row = mysqli_fetch_array($records))
                            {
                        ?>


                        <div class="row" id="trstats">
                            <div class="col-xs-3">
                                <img src="<?=$row['img']?>" alt="" id="trimg" style="background:none;">
                            </div>
                            <div class="col-xs-6">
                                <table id="playerstats_table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"><h3><?=$row['sname']?></h3></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding-right:0;padding-left:0;text-align:left;width:70px;"><h4>#<?=$row['num']?></h4>
                                                    </td>
                                                    <td style="padding-right:0;padding-left:0;text-align:center;width:82.5px;">
                                                        <h4><?=$row['pos']?></h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                            </div>
                            <div class="col-xs-3">
                                <div class="row" style="margin:0;padding:0;">
                                            <h1><?=$row['point']?></h1>
                                </div>
                                <div class="row" style="margin:0;padding:0;">
                                            <?php
                                $lined='очков';
                                if ($row['point']==1){$lined='очко';}if ($row['point']==21){$lined='очко';}
                                if ($row['point']==31){$lined='очко';}if ($row['point']==41){$lined='очко';}
                                if ($row['point']==51){$lined='очко';}if ($row['point']==61){$lined='очко';}
                                if ($row['point']==71){$lined='очко';}if ($row['point']==81){$lined='очко';}
                                if ($row['point']==91){$lined='очко';}if ($row['point']==101){$lined='очко';}
                                if ($row['point']>=2 && $row['point']<=4){$lined='очка';}
                                if ($row['point']>=22 && $row['point']<=24){$lined='очка';}
                                if ($row['point']>=32 && $row['point']<=34){$lined='очка';}
                                if ($row['point']>=42 && $row['point']<=44){$lined='очка';}
                                if ($row['point']>=52 && $row['point']<=54){$lined='очка';}
                                if ($row['point']>=62 && $row['point']<=64){$lined='очка';}
                                if ($row['point']>=72 && $row['point']<=74){$lined='очка';}
                                if ($row['point']>=82 && $row['point']<=84){$lined='очка';}
                                if ($row['point']>=92 && $row['point']<=94){$lined='очка';}
                                if ($row['point']>=102 && $row['point']<=104){$lined='очка';}
                                if ($row['point']>=5 && $row['point']<=20){$lined='очков';}
                                if ($row['point']>=25 && $row['point']<=30){$lined='очков';}
                                if ($row['point']>=35 && $row['point']<=40){$lined='очков';}
                                if ($row['point']>=45 && $row['point']<=50){$lined='очков';}
                                if ($row['point']>=55 && $row['point']<=60){$lined='очков';}
                                if ($row['point']>=65 && $row['point']<=70){$lined='очков';}
                                if ($row['point']>=75 && $row['point']<=80){$lined='очков';}
                                if ($row['point']>=85 && $row['point']<=90){$lined='очков';}
                                if ($row['point']>=95 && $row['point']<=100){$lined='очков';}
                                if ($row['point']>=105 && $row['point']<=110){$lined='очков';}
                              ?>
                                            <h4>
                                                <?=$lined?>
                                            </h4>
                                        </div>
                            </div>
                        </div>


                        <?php } ?>
                    </div>
                        <div class="col-xs-3" id="trstc" style="margin-right:0;">
                        <a href="<?=$link3?>?stat=gkeepers&div=amateur"><div class="row" id="trtop"><h4>ВРАТАРИ</h4></div></a>
                        <?php
                        $sql = "SELECT * FROM `$players` WHERE tname='1' && `game`>'0' && pos='Вр' ORDER BY KN, lostgoal, game DESC, sname LIMIT 4";
                        $records = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($records))
                            {
                        ?>


                        <div class="row" id="trstats">
                            <div class="col-xs-3">
                                <img src="<?=$row['img']?>" alt="" id="trimg" style="background:none;">
                            </div>
                            <div class="col-xs-6">
                                <table id="playerstats_table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"><h3><?=$row['sname']?></h3></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding-right:0;padding-left:0;text-align:left;width:70px;"><h4>#<?=$row['num']?></h4>
                                                    </td>
                                                    <td style="padding-right:0;padding-left:0;text-align:center;width:82.5px;">
                                                        <h4><?=$row['pos']?></h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                            </div>
                            <div class="col-xs-3">
                                <div class="row" style="margin:0;padding:0;">
                                            <h1><?=$row['KN']?></h1>
                                </div>
                                <div class="row" style="margin:0;padding:0;">
                                            <?php
                                            $lined='КН';
                                            ?>
                                            <h4>
                                                <?=$lined?>
                                            </h4>
                                        </div>
                            </div>
                        </div>


                        <?php } ?>
                    </div>
                    </div>
                </div>
                </div>
            <div class="row" style="width:1200px;margin:0;padding:0;">
                <img src="img/playoff_empty.png" alt="" style="width:1200px;margin:0;padding:0;">
            </div>
        </section>
        <section>
            <div class="row" style="margin:0;padding:0;width:100%;">
                <br><br>
            </div>
        </section>
    </div>


    <!-- -----------------------------------BASE----------------------------- -->
    <script>
        var keys1 = <?=$keys?>;
        var keys2 = <?=$keys2?>;
        if(keys1==0){keys1=<?=$keys2?>;} //else if (keys1>1) { keys1--; }
        if(keys2==0){keys1--;}
        //keys1--;
    </script>
    <?php require_once 'header/footer.php';
          require_once 'header/metastyle_end.php';
    ?>

</body>

</html>