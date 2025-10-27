<div id="menu2">
    <ul id="nav">

        <style type="text/css">
            #nav>li:hover {
                background-color: #fff
            }
            
            #team_table2 td {
                padding: 10px 5px;
            }
            #nav{
                margin:0;
                width: 1200px;
                background: -webkit-linear-gradient(#1c0e0d, #333132);
                background: -o-linear-gradient(#1c0e0d, #333132);
                background: linear-gradient(#1c0e0d, #333132);
            }
            
            #nav li a {
                display: block;
                color: #fff;
                line-height: 53px;
                text-align: center;
                font-size: 18px;
                font-style: italic;
                text-decoration: none;
                font-weight: bold;
            }
            
            #nav li a:hover {
                background: #fff;
                color:#333132;
            }
            
            #table_logo {
                width: auto;
                height: 50px;
            }

        </style>

        <li><a data-toggle="tab" href="#panel1" class="">СОСТАВ</a></li>
        <li><a data-toggle="tab" href="#panel2">МАТЧИ</a></li>
        <li><a data-toggle="tab" href="#panel3">СТАТИСТИКА</a></li>
    </ul>
</div>

<?php 
    
    // require_once "tabs_part.php";
    
    // if ($_GET['part']=="playoff") {
    //         $players = "players8";
    //     } else if ($_GET['part']=="regular") {
    //         $players = "players8_regular";
    //     }
    //     if (!$_GET['part']) {
    //         $_GET['part'] = "regular";
    //         $players = "players8";
    //     }

$players = "players8";
$calendar = 'calendar8';
$lin = 'protokol25.php?protokol=';
?>

<div class="tab-content">

    <div id="panel3" class="tab-pane fade in active">



                <table id="team_table2">

                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Поз</th>
                            <th>Игрок</th>
                            <th>И</th>
                            <th>Г</th>
                            <th>П</th>
                            <th>Очки</th>
                            <th>+/-</th>
                            <th>БВ</th>
                            <th>%БВ</th>
                            <th>ЗБ</th>
                            <th>Вбр</th>
                            <th>%Вбр</th>
                            <th>Штр</th>
                            <th>ПШ</th>
                            <th>%ОБ</th>
                        </tr>
                    </thead>

                    <tbody>


                    <?php       
    $sql = "SELECT * FROM `$players` WHERE team='$komanda' || team='($komanda)' ORDER BY pos, point DESC ";
    $records = mysqli_query($con, $sql);    
                    $k=0;
                        while($row = mysqli_fetch_array($records)){
                            $k++;
                            
                           ?>
                        <tr class="tdclas">
                            <td>

                                <?=$row['num'] ?>
                            </td>

                            <td>
                                <?=$row['pos'] ?>
                            </td>

                            <td>
                                <?php echo $row['name']." ".$row['sname'] ?>
                            </td>

                            <td>
                                <?php echo $row['game'] ?>
                            </td>

                            <td>
                                <?php echo $row['goal'] ?>
                            </td>

                            <td>
                                <?php echo $row['assist'] ?>
                            </td>

                            <td>
                                <?php echo $row['point'] ?>
                            </td>

                            <td>
                                <?php echo $row['plusminus'] ?>
                            </td>

                            <td>
                                <?php echo $row['shot'] ?>
                            </td>

                            <td>
                                <?php echo $row['shotperc'].'%'  ?>
                            </td>
                            <td>
                                <?php echo $row['bshot'] ?>
                            </td>
                            <td>
                                <?=$row['wfaceoff']?>/<?=$row['lfaceoff']?>
                            </td>
                            <td>
                                <?php echo $row['faceoffperc'].'%'  ?>
                            </td>
                            <td>
                                <?php echo $row['penalty'] ?>
                            </td>
                            <td>
                                <?php if ($row['pos']=="Вр") { echo $row['lostgoal']; } ?>
                            </td>
                            <td>
                                <?php if ($row['pos']=="Вр") {  echo $row['refshot']; } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            

            
        
    </div>


    <div id="panel1" class="tab-pane fade">


        <table id="team_table2">

            <thead>
                <tr>
                    <th>#</th>
                    <th></th>
                    <th>ИГРОК</th>
                    <th>№</th>
                    <th>Поз</th>
                    <th>Рост</th>
                    <th>Вес</th>
                    <th>Хват</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                                            
    $sql = "SELECT * FROM `$players` WHERE team='$komanda' ORDER BY pos";
    $records = mysqli_query($con,$sql);    
                    $k=0;
                        while($row = mysqli_fetch_array($records)){
                            $k++;
                           ?>
                           
                 
                           
                                   
                <tr  class="tdclas">
                    <td>
                        <?=$k?>
                    </td>
                    <td>
                        <img src="<?=$row['img']?>" alt="" id="shmak2" style="width:48px;background:none;padding:0;">
                    </td>
                    <td>
                        <?=$row['name']?>
                        <?=$row['sname']?>
                    </td>
                    <td>
                        <?=$row['num']?>
                    </td>
                    <td>
                        <?=$row['pos']?>
                    </td>
                    <td>
                        <?=$row['height']?>
                    </td>
                    <td>
                        <?=$row['weight']?>
                    </td>
                    <td>
                        <?=$row['hand']?>
                    </td>
                </tr>
                
                
                <?php } ?>
            </tbody>
        </table>

    </div>

    <div id="panel2" class="tab-pane fade">
        <table id="team_table2">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Место</th>
                    <th>Хозяева</th>
                    <th></th>
                    <th>Счёт</th>
                    <th></th>
                    <th>Гости</th>
                </tr>
            </thead>

            <tbody>


                <?php                                          
    $sql = "SELECT * FROM `$calendar` WHERE home='$komanda' || away='$komanda' ORDER BY id";
    $records = mysqli_query($con,$sql);    
                    $k=0;
                        while($row = mysqli_fetch_array($records)){
                            $k++;
                            
                           ?>
                <tr class="tdclas">
                    <td onClick="window.location.href='<?=$lin?><?=$row['id'] ?>'">

                        <?=$k ?>
                    </td>
                    <td onClick="window.location.href='<?=$lin?><?=$row['id'] ?>'">
                        <?=$row['date'] ?>
                    </td>
                    <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <?=$row['time']?>
                    </td>
                    <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <?=$row['place']?>
                    </td>
                    <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <?=$row['home']?>
                    </td>
                    <td style="padding: 0px 5px;" onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <img src="<?=$row['logohome'] ?>" alt="СХЛ" id="table_logo">
                    </td>
                    <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <h4><strong><?=$row['result']?></strong></h4>
                    </td>
                    <td style="padding: 0px 5px;" onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <img src="<?=$row['logoaway'] ?>" alt="СХЛ" id="table_logo">
                    </td>
                    <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                        <?=$row['away']?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</div>