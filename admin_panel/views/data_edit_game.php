<?php 
$options = get_gamelist($link, $idofcup);
$protokol = get_game($link, $idofcup);

if(isset($_POST['new_val']) ){
    if (update_game($link, $idofcup)){
        exit("SAVED");
    } else {
        exit("ERROR");
    }
    
}
if($_GET['addrow']=='true'){
    $addrow = add_row($link, $idofcup);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include_once "header/meta.php"; ?>
    <link rel="stylesheet" href="css/styleprtk.css">
    <title>EDIT PLAYERS | ADMIN PANEL</title>
</head>

<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>

    <div class="container" style="padding:0;text-align:center;">

        <!-- Добавление данных - панель выбора -->
        <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->

        <?php if(!isset($_GET['protokol'])){ ?>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ ПРОТОКОЛ МАТЧА / ВВОД МАТЧА</h3>
        <table class="zebra">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Кубок</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Хозяева</th>
                    <th>Гости</th>
                    <th>Счёт</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($options as $option): ?>
                <tr>
                    <td>
                        <?=$option['id']?>
                    </td>
                    <td>
                        <div>
                            <?=$option['part']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['date']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['time']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['home']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['away']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['result']?>
                        </div>
                    </td>
                    <td><a href="data_edit.php?action=game&protokol=<?=$option['id']?>"><button>РЕД.</button></a></td>
                    <td><a href="../webapp.php?protokol=<?=$option['id']?>" target="_blank"><button>ОТКРЫТЬ В ПРОГРАММЕ</button></a></td>
                    <td><a href="../webapppm.php?protokol=<?=$option['id']?>" target="_blank"><button>ОТКРЫТЬ +/-</button></a></td>
                    <td><a href="../protokol25.php?protokol=<?=$option['id']?>" target="_blank"><button>ОТКРЫТЬ НА САЙТЕ</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } else { 
        $prtk = $_GET['protokol'];
        ?>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ МАТЧ</h3>
       
                <?php 
                    foreach ($protokol as $protokols): $row = $protokols;  endforeach; 
                ?>
                

        <div class="section" id="maintheme">
            <div class="row" id="upperrow">
                <div class="col-xs-9 text-left">
                    <h4 style="margin:10px;font-weight:700;color:black;">
                        <?=$row['league']?> | <?=$row['part']?> | <?=$row['season']?> 
                    </h4>
                </div>
                <div class="col-xs-3 text-right">
                    <h4 style="margin:10px;font-weight:700;color:black;">
                        <?=$row['date']?> |
                            <?=$row['time']?>
                    </h4>
                </div>

                <div class="row">
                    <div class="col-xs-2 text-center" id="rowimg"> <br>
                    </div>
                    <div class="col-xs-3 text-center" id="rowimg" style="padding:60px 0 10px 0;color:black;">
                        <h2>
                            <?=$row['home']?>
                        </h2>
                    </div>
                    <div class="col-xs-2 text-center" id="rowimg">
                        <br><br>
                        <h1><label><div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="result"><?=$row['result']?></div></label></h1><br>

                    </div>
                    <div class="col-xs-3 text-center" id="rowimg" style="padding:60px 0 10px 0;color:black;">
                        <h2>
                            <?=$row['away']?>
                        </h2>
                    </div>
                    <div class="col-xs-2 text-center" id="rowimg"> <br>
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
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home1g"><?=$row['home1g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home2g"><?=$row['home2g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home3g"><?=$row['home3g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home4g"><?=$row['home4g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home5g"><?=$row['home5g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="homeg"><?=$row['homeg']?></div>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away1g"><?=$row['away1g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away2g"><?=$row['away2g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away3g"><?=$row['away3g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away4g"><?=$row['away4g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away5g"><?=$row['away5g']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="awayg"><?=$row['awayg']?></div>
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
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home1f"><?=$row['home1f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home2f"><?=$row['home2f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home3f"><?=$row['home3f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home4f"><?=$row['home4f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="homef"><?=$row['homef']?></div>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away1f"><?=$row['away1f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away2f"><?=$row['away2f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away3f"><?=$row['away3f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away4f"><?=$row['away4f']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="awayf"><?=$row['awayf']?></div>
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
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home1s"><?=$row['home1s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home2s"><?=$row['home2s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home3s"><?=$row['home3s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home4s"><?=$row['home4s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="homes"><?=$row['homes']?></div>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away1s"><?=$row['away1s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away2s"><?=$row['away2s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away3s"><?=$row['away3s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away4s"><?=$row['away4s']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="aways"><?=$row['aways']?></div>
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
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home1p"><?=$row['home1p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home2p"><?=$row['home2p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home3p"><?=$row['home3p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="home4p"><?=$row['home4p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="homep"><?=$row['homep']?></div>
                            </td>
                        </tr>
                        <tr class='tdclas'>
                            <td nowrap>
                                <?=$row['away']?>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away1p"><?=$row['away1p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away2p"><?=$row['away2p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away3p"><?=$row['away3p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="away4p"><?=$row['away4p']?></div>
                            </td>
                            <td nowrap>
                                <div class="edit" data-prtk="<?=$prtk?>" data-tabl="calendar" data-id="<?=$row['id']?>" contenteditable="true" data-name="awayp"><?=$row['awayp']?></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

            <?php
            $review = get_review($link, $idofcup);
            $squad = get_squad($link, $idofcup, $row['home']);
            $squad2 = get_squad2($link, $idofcup, $row['away']);
    
    
            //foreach ($review as $row3):   endforeach; 
            //foreach ($squad as $row2):   endforeach;
            //foreach ($squad2 as $row22):   endforeach;
            ?>


                <div class="row">
                    <div class="col-xs-12" id="dropmarg2">
                        <table id="protokol_table_main" style="text-align:center;">
                            <tr>
                                <th class='tdclaslast'> ID </th>
                                <th class='tdclaslast'> Время </th>
                                <th class='tdclasfirst'> Команда </th>
                                <th class='tdclasnext2'> Событие </th>
                                <th nowrap class='tdclasfirst'> Игрок </th>
                                <th class='tdclasnext3'> Действие </th>
                                <th class='tdclaslast'></th>
                                <th class='tdclaslast'></th>
                            </tr>
                            <?php 
               foreach ($review as $row3): ?>
                            <tr class='tdclas'>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="identity"><?=$row3['identity']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="time"><?=$row3['time']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="team"><?=$row3['team']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="move"><?=$row3['move']?></div>
                                </td>
                                <td nowrap>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="player"><?=$row3['player']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="motion"><?=$row3['motion']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_review" data-id="<?=$row3['identity']?>" contenteditable="true" data-name="etc"><?=$row3['etc']?></div>
                                </td>
                               <td title="УДАЛИТЬ СТРОКУ"><div class="edit"><a href="data_edit.php?action=game&protokol=<?=$prtk?>&delete=<?=$row3['identity']?>"><button>X</button></a></div></td>
                            </tr>
                            <?php endforeach; 
                            ?>
                       <tr>
                           <td colspan="8" title="ДОБАВИТЬ СТРОКУ"><div><a href="data_edit.php?action=game&protokol=<?=$prtk?>&addrow=true"><button>ДОБАВИТЬ СТРОКУ</button></a></div></td>
                       </tr>
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
                                <th> +/- </th>
                                <th> БВ </th>
                                <th> ЗБ </th>
                                <th> ВВбр </th>
                                <th> ПВбр </th>
                                <th> Штр </th>
                                <th> ПШ </th>
                                <th> Бр </th>
                                <th></th>
                            </tr>

                            <?php 
                    $key=0;
               foreach ($squad as $row2):   
                   $key++;?>
                            <tr class='tdclas'>
                                <td>
                                    <?=$key?>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="num"><?=$row2['num']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="pos"><?=$row2['pos']?></div>
                                </td>
                                <td nowrap>
                                        <?=mb_substr($row2['name'], 0, 1, 'UTF-8')?>. <?=$row2['sname']?>
                                </td>
                                <td style='padding-left:5px;padding-right:5px;'>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="goal"><?=$row2['goal']?></div>
                                </td>
                                <td style='padding-left:5px;padding-right:5px;'>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="assist"><?=$row2['assist']?></div>
                                </td>
                                
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="plusminus"><?=$row2['plusminus']?></div>
                                </td>
                               
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="shot"><?=$row2['shot']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="bshot"><?=$row2['bshot']?></div>
                                </td>

                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="wfaceoff"><?=$row2['wfaceoff']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="lfaceoff"><?=$row2['lfaceoff']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="penalty"><?=$row2['penalty']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="lostgoal"><?=$row2['lostgoal']?></div>
                                </td>
                                <?php if ($row2['pos']=='Вр') { ?>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row2['id']?>" contenteditable="true" data-name="allshot"><?=$row2['allshot']?></div>
                                </td>
                                <?php } else { ?>
                                <td> </td>
                                <?php } ?>
                                <td title="УДАЛИТЬ СТРОКУ"><div class="edit"><a href="data_edit.php?action=game&protokol=<?=$prtk?>&delete=<?=$row2['id']?>&squad=true"><button>X</button></a></div></td>
                            </tr>
                            <?php endforeach;
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
                                <th> Г </th>
                                <th> П </th>
                                <th> +/- </th>
                                <th> БВ </th>
                                <th> ЗБ </th>
                                <th> ВВбр </th>
                                <th> ПВбр </th>
                                <th> Штр </th>
                                <th> ПШ </th>
                                <th> Бр </th>
                                <th></th>
                            </tr>




                            <?php 
                    $key=0;
               foreach ($squad2 as $row22):   
                   $key++;?>
                            <tr class='tdclas'>
                                <td>
                                    <?=$key?>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="num"><?=$row22['num']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="pos"><?=$row22['pos']?></div>
                                </td>
                                <td nowrap>
                                        <?=mb_substr($row22['name'], 0, 1, 'UTF-8')?>. <?=$row22['sname']?>
                                </td>
                                <td style='padding-left:5px;padding-right:5px;'>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="goal"><?=$row22['goal']?></div>
                                </td>
                                <td style='padding-left:5px;padding-right:5px;'>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="assist"><?=$row22['assist']?></div>
                                </td>
                                
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="plusminus"><?=$row22['plusminus']?></div>
                                </td>
                                
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="shot"><?=$row22['shot']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="bshot"><?=$row22['bshot']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="wfaceoff"><?=$row22['wfaceoff']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="lfaceoff"><?=$row22['lfaceoff']?></div>
                                </td>
                               
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="penalty"><?=$row22['penalty']?></div>
                                </td>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="lostgoal"><?=$row22['lostgoal']?></div>
                                </td>
                                <?php if ($row22['pos']=='Вр') { ?>
                                <td>
                                    <div class="edit" data-prtk="<?=$prtk?>" data-tabl="protokol_squad" data-id="<?=$row22['id']?>" contenteditable="true" data-name="allshot"><?=$row22['allshot']?></div>
                                </td>
                                <?php } else { ?>
                                <td> </td>
                                <?php } ?>
                                <td title="УДАЛИТЬ СТРОКУ"><div class="edit"><a href="data_edit.php?action=game&protokol=<?=$prtk?>&delete=<?=$row22['id']?>&squad=true"><button>X</button></a></div></td>
                            </tr>
                            <?php endforeach;
                ?>

                        </table>
                    </div>
                </div>
        </div>

        <?php } ?>

        <div id="loader"><span></span></div>
        <div id="mes-edit"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script4.js"></script>

    <?php include_once "header/footer.php"; ?>
</body>

</html>
