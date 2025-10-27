<?php
$dir = "";
require_once $dir.'login/login.php';
    $link = $con;//db_connect(); // подключение к базе данных через функцию

$prtk = $_GET['protokol'];
$cup = 7;
require_once "GAME_INFO_8.php";

$title = "ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА";
?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php include_once 'header/metastyle.php'; ?>
        <link rel="stylesheet" href="css/styleprtk.css">
        <?php
//====================== ENTER MATCH DATA HERE (down)      
     $protokol1 = "protokol_squad8_".$prtk;
    $protokol2 = "protokol_review8_".$prtk;
    
require_once 'header/connect.php';// connect to mysql

$calendar = "calendar8";    
// select query
    $sql = "SELECT * FROM `$calendar` WHERE date = '$datematch' AND home ='$hometeam' AND away='$awayteam' AND time='$time'";
    $sql2 = "SELECT * FROM `$protokol1` WHERE team='$hometeam' ORDER BY pos";
    $sql22 = "SELECT * FROM `$protokol1` WHERE team='$awayteam' ORDER BY pos"; 
    $sql3 = "SELECT * FROM `$protokol2`";
    //execute the query
    $records = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($records);
    
    $records2 = mysqli_query($link,$sql2);
    $records22 = mysqli_query($link,$sql22);

    $records3 = mysqli_query($link,$sql3);
//========= match review
    ?>

            <title>ХК "<?=$hometeam?>" - ХК "<?=$awayteam?>"</title>
            <style>
                .col-md-6 {
                    text-align: center;
                }
            </style>
    </head>

    <body>
        <?php require_once 'header/topper.php';
        ?>
        <div class="section" id="background">
            <div class="row" style="text-align:center;width:100%;margin:0;padding:0;"><br>
            </div>
        <div class="section" id="maintheme" style="min-height:1250px;">
            <div class="row" id="upperrow">
                <div class="rowX">
                  <div class="col-xs-9 text-left">
                    <h4 style="margin:10px;font-weight:700;">
                        <?=$league?>
                            <?=$season?>
                            <?=$part?>
                    </h4>
                </div>
                <div class="col-xs-3 text-right">
                    <h4 style="margin:10px;font-weight:700;">
                         <?=date("d.m.Y",strtotime($datematch))?> |
                            <?=$time?>
                    </h4>
                </div>
                </div>
                <div class="rowZ">
                    <div class="row">
                    <div class="col-xs-2 text-center" id="rowimg">
                        <img src="<?=$logohome ?>" alt="СХЛ" id="table_logo">
                        <br>
                    </div>
                    <div class="col-xs-3 text-left" id="rowimg" style="padding:30px 0 10px 0;width:280px;">
                           <h2><?=$hometeam?></h2>
                    </div>
                    <div class="col-xs-2 text-center" id="rowimg"  style="width:225px;">
                           <br>
                        <h1><label style="color:#fff;" id="<?=$prtk?>"><?=$row['result']?></label></h1><br>
                        
                    </div>
                    <div class="col-xs-3 text-right" id="rowimg" style="padding:30px 0 10px 0;width:280px;">
                           <h2><?=$awayteam?></h2>
                    </div>
                    <div class="col-xs-2 text-center" id="rowimg">
                            <img src="<?=$logoaway ?>" alt="СХЛ" id="table_logo">
                        <br>
                    </div>
                </div>
                </div>
            </div>


            <div class="row" style="text-align:center;">
                <div class="col-xs-6" id="dropmarg">
                    <table id="protokol_table" style="text-align:center;">
                        <tr>
                            <th nowrap class='tdclasfirst'> Команда </th>
                            <th> 1-й </th>
                            <th> 2-й </th>
                            <th> 3-й </th>
                            <th> ОТ </th>
                            <th> Б </th>
                            <th nowrap class='tdclaslast'> Голы </th>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['home']?>
                            </td>
                            <td nowrap>
                                <?=$row['home1g']?>
                            </td>
                            <td nowrap>
                                <?=$row['home2g']?>
                            </td>
                            <td nowrap>
                                <?=$row['home3g']?>
                            </td>
                            <td nowrap>
                                <?=$row['home4g']?>
                            </td>
                            <td nowrap>
                                <?=$row['home5g']?>
                            </td>
                            <td nowrap>
                                <?=$row['homeg']?>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <?=$row['away1g']?>
                            </td>
                            <td nowrap>
                                <?=$row['away2g']?>
                            </td>
                            <td nowrap>
                                <?=$row['away3g']?>
                            </td>
                            <td nowrap>
                                <?=$row['away4g']?>
                            </td>
                            <td nowrap>
                                <?=$row['away5g']?>
                            </td>
                            <td nowrap>
                                <?=$row['awayg']?>
                            </td>
                        </tr>
                    </table>

                    <table id="protokol_table" style="text-align:center;">
                        <tr>
                            <th nowrap class='tdclasfirst'> Команда </th>
                            <th> 1-й </th>
                            <th> 2-й </th>
                            <th> 3-й </th>
                            <th> ОТ </th>
                            <th nowrap class='tdclaslast'> Вбр </th>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['home']?>
                            </td>
                            <td nowrap>
                                <?=$row['home1f']?>
                            </td>
                            <td nowrap>
                                <?=$row['home2f']?>
                            </td>
                            <td nowrap>
                                <?=$row['home3f']?>
                            </td>
                            <td nowrap>
                                <?=$row['home4f']?>
                            </td>
                            <td nowrap>
                                <?=$row['homef']?>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <?=$row['away1f']?>
                            </td>
                            <td nowrap>
                                <?=$row['away2f']?>
                            </td>
                            <td nowrap>
                                <?=$row['away3f']?>
                            </td>
                            <td nowrap>
                                <?=$row['away4f']?>
                            </td>
                            <td nowrap>
                                <?=$row['awayf']?>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="col-xs-6" id="dropmarg">
                    <table id="protokol_table" style="text-align:center;">
                        <tr>
                            <th nowrap class='tdclasfirst'> Команда </th>
                            <th> 1-й </th>
                            <th> 2-й </th>
                            <th> 3-й </th>
                            <th> ОТ </th>
                            <th nowrap class='tdclaslast'> БВ </th>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['home']?>
                            </td>
                            <td nowrap>
                                <?=$row['home1s']?>
                            </td>
                            <td nowrap>
                                <?=$row['home2s']?>
                            </td>
                            <td nowrap>
                                <?=$row['home3s']?>
                            </td>
                            <td nowrap>
                                <?=$row['home4s']?>
                            </td>
                            <td nowrap>
                                <?=$row['homes']?>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <?=$row['away1s']?>
                            </td>
                            <td nowrap>
                                <?=$row['away2s']?>
                            </td>
                            <td nowrap>
                                <?=$row['away3s']?>
                            </td>
                            <td nowrap>
                                <?=$row['away4s']?>
                            </td>
                            <td nowrap>
                                <?=$row['aways']?>
                            </td>
                        </tr>
                    </table>

                    <table id="protokol_table" style="text-align:center;">
                        <tr>
                            <th nowrap class='tdclasfirst'> Команда </th>
                            <th> 1-й </th>
                            <th> 2-й </th>
                            <th> 3-й </th>
                            <th> ОТ </th>
                            <th nowrap class='tdclaslast'> Штр </th>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['home']?>
                            </td>
                            <td nowrap>
                                <?=$row['home1p']?>
                            </td>
                            <td nowrap>
                                <?=$row['home2p']?>
                            </td>
                            <td nowrap>
                                <?=$row['home3p']?>
                            </td>
                            <td nowrap>
                                <?=$row['home4p']?>
                            </td>
                            <td nowrap>
                                <?=$row['homep']?>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <?=$row['away1p']?>
                            </td>
                            <td nowrap>
                                <?=$row['away2p']?>
                            </td>
                            <td nowrap>
                                <?=$row['away3p']?>
                            </td>
                            <td nowrap>
                                <?=$row['away4p']?>
                            </td>
                            <td nowrap>
                                <?=$row['awayp']?>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="row">
               <div class="col-xs-12" id="dropmarg2">
                <table id="protokol_table_main" style="text-align:center;">
                    <tr>
                        <th class='tdclaslast'> Время </th>
                        <th class='tdclasfirst'> Команда </th>
                        <th class='tdclasnext2'> Событие </th>
                        <th nowrap class='tdclasfirst'> Игрок </th>
                        <th class='tdclasnext3'> Действие </th>
                        <th class='tdclaslast'>  </th>
                    </tr>
                    <?php 
               while($row3 = mysqli_fetch_array($records3)){
                echo "<tr class='tdclas'>";
                    echo "<td>".$row3['time']."</td>";
                    echo "<td>".$row3['team']."</td>";
                    echo "<td>".$row3['move']."</td>";
                    echo "<td nowrap >".$row3['player']."</td>";
                    echo "<td>".$row3['motion']."</td>";
                    echo "<td>".$row3['etc']."</td>";
                echo "</tr>";
               }
                ?>
                </table>
            </div>
            </div>
            <div class="row">
                <div class="col-xs-6 text-center" id="dropmarg">
                    <table id="protokol_table_sostav" style="text-align:center;">
                        
                       
                            
                        <tr>
                            <th> # </th>
                            <th> № </th>
                            <th> Поз </th>
                            <th class='tdclasfirst'> Игрок </th>
                            <th> Г </th>
                            <th> П </th>
                            <th> О </th>
                            
                            <th> БВ </th>
                            <th> ЗБ </th>
                            <th> Вбр </th>
                            <th> Штр </th>
                            <th> ПШ </th>
                            <th> ОБ </th>
                        </tr>
                        
                       
                        
                      
                        <?php 
                    $key=0;
               while($row2 = mysqli_fetch_array($records2)){
                   $key++;
                echo "<tr class='tdclas'>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$row2['num']."</td>";
                    echo "<td>".$row2['pos']."</td>";
                    echo "<td nowrap>".$row2['name']." ".$row2['sname']."</td>";
                    echo "<td style='padding-left:5px;padding-right:5px;'>".$row2['goal']."</td>";
                    echo "<td style='padding-left:5px;padding-right:5px;'>".$row2['assist']."</td>";
                    echo "<td style='padding-left:5px;padding-right:5px;'>".$row2['point']."</td>";
                    
                    echo "<td>".$row2['shot']."</td>";
                    echo "<td>".$row2['bshot']."</td>";
                    
                    echo "<td>".$row2['wfaceoff']."/".$row2['lfaceoff']."</td>";
                    echo "<td>".$row2['penalty']."</td>";
                    echo "<td>".$row2['lostgoal']."</td>";
                   if ($row2['pos']=='Вр') {
                     echo "<td>".$row2['refshot']."%</td>";
                   } else {
                    echo "<td> </td>";
                   }
                echo "</tr>";
               }
                ?>
               
                    </table>
                </div>
                <div class="col-xs-6 text-center" id="dropmarg">
                    <table id="protokol_table_sostav" style="text-align:center;">
                       
                        
                       
                        <tr>
                            <th> # </th>
                            <th> № </th>
                            <th> Поз </th>
                            <th class='tdclasfirst'> Игрок </th>
                            <th > Г </th>
                            <th > П </th>
                            <th > О </th>
                            
                            <th> БВ </th>
                            <th> ЗБ </th>
                            <th> Вбр </th>
                            <th> Штр </th>
                            <th> ПШ </th>
                            <th> ОБ </th>
                        </tr>
                       
                        
                       
                        
                        <?php 
                    $key=0;
               while($row22 = mysqli_fetch_array($records22)){
                   $key++;
                echo "<tr class='tdclas'>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$row22['num']."</td>";
                    echo "<td>".$row22['pos']."</td>";
                    echo "<td nowrap>".$row22['name']." ".$row22['sname']."</td>";
                    echo "<td style='padding-left:5px;padding-right:5px;'>".$row22['goal']."</td>";
                    echo "<td style='padding-left:5px;padding-right:5px;'>".$row22['assist']."</td>";
                    echo "<td style='padding-left:5px;padding-right:5px;'>".$row22['point']."</td>";
                   
                    echo "<td>".$row22['shot']."</td>";
                    echo "<td>".$row22['bshot']."</td>";
                    
                    echo "<td>".$row22['wfaceoff']."/".$row22['lfaceoff']."</td>";
                    echo "<td>".$row22['penalty']."</td>";
                    echo "<td>".$row22['lostgoal']."</td>";
                   if ($row22['pos']=='Вр') {
                     echo "<td>".$row22['refshot']."%</td>";
                   } else {
                    echo "<td> </td>";
                   }
                echo "</tr>";
               }
                ?>
               
                    </table>
                </div>
            </div>
        </div>
       <script>var keys1 = 0;</script>
<?php 
        include_once 'header/footer.php';
          include 'header/metastyle_end.php';
    ?>
</div>
    </body>

    </html>
