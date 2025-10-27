            <div class="container" id="statslist">
                   <div class="row">
                       <h1>СТАТИСТИКА КОМАНД</h1>
                   </div>
                   <div class="row2" style="padding: 10px 0 10px 0;margin-top:-2px;">

                      <table id="tablemain2">
                        <thead>
                            <tr>
                                <th style="text-shadow:none;">#</th>
                                <th style="text-shadow:none;"></th>
                                <th style="text-shadow:none;" class="teamleft">Команда</th>
                                <th style="text-shadow:none;">И</th>
                                <th style="text-shadow:none;">В</th>
                                <th style="text-shadow:none;">Н</th>
                                <th style="text-shadow:none;">П</th>
                                <th style="text-shadow:none;">Ш</th>
                                <th style="text-shadow:none;">ПШ</th>
                                <th style="text-shadow:none;">РШ</th>
                                <th style="text-shadow:none;">О</th>
                                <th style="text-shadow:none;">Штр</th>
                                <th style="text-shadow:none;">Бол</th>
                                <th style="text-shadow:none;">ШБ</th>
                                <th style="text-shadow:none;">ПШБ</th>
                                <th style="text-shadow:none;">Мен</th>
                                <th style="text-shadow:none;">ПШМ</th>
                                <th style="text-shadow:none;">ШМ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $sql = "SELECT * FROM `$cuptable` WHERE cup=1 ORDER BY point DESC, team ASC LIMIT 10";// Кубок Покрышкина
                        //$sql = "SELECT * FROM `$cuptable` WHERE cup='1' ORDER BY point DESC, win DESC, winb DESC, goal DESC, diffgoal DESC";
                        $records = mysqli_query($con,$sql);
                            $k=0;
                    while($row = mysqli_fetch_array($records)){
                        $k++;
                       echo' <tr>';
                       echo'     <td style="text-shadow:none;">'.$k.'</td>';
                       echo'     <td style="text-shadow:none;"><img src="'.$row['logo'].'" alt="" id="table_logo"></td>';
                       echo'     <td style="text-shadow:none;" class="teamleft">'.$row['team'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['game'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['win'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['winb'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['lost'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['goal'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['lostgoal'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['diffgoal'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['point'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['penalty'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['PP'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['goalPP'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['lostPP'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['LP'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['lostLP'].'</td>';
                       echo'     <td style="text-shadow:none;">'.$row['goalLP'].'</td>';
                       echo' </tr>';
                            }
                            ?>
                        </tbody>
                       </table>

                   </div>
            </div>

            <div class="container" id="statslist" style="margin-top:20px;">
                   <div class="row" style="border-radius:50px;">
                       <h1>СТАТИСТИКА ИГРОКОВ</h1>
                   </div>
                   <div class="row2" style="padding: 20px 0 10px 0;background:none;">
                       <div class="col-xs-6">
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=snipers"><div class="row" style="height:50px;">
                                   <h4>СНАЙПЕРЫ</h4>
                               </div></a>

                            <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY goal DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>ГОЛЫ: <?=$row['goal']?></h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>


                           </div>
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=assists"><div class="row" style="height:50px;">
                                   <h4>АССИСТЕНТЫ</h4>
                               </div></a>

                           <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY assist DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>ПЕРЕДАЧИ: <?=$row['assist']?></h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>
                           </div>
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=points"><div class="row" style="height:50px;">
                                   <h4>БОМБАРДИРЫ</h4>
                               </div></a>

                               <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY point DESC, goal DESC, assist DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>ОЧКИ: <?=$row['point']?></h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>
                           </div>
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=shots"><div class="row" style="height:50px;">
                                   <h4>БР.В СТВОР</h4>
                               </div></a>

                               <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY shot DESC, shotperc DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>БВ: <?=$row['shot']?></h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>
                           </div>
                       </div>
                       <div class="col-xs-6">
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=bshots"><div class="row" style="height:50px;">
                                   <h4>ЗАБЛ. БРОСКИ</h4>
                               </div></a>

                               <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY bshot DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>ЗБ: <?=$row['bshot']?></h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>

                           </div>
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=faceoff"><div class="row" style="height:50px;">
                                   <h4>ВБРАСЫВАНИЯ</h4>
                               </div></a>

                               <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' && (wfaceoff!=0 || lfaceoff!=0) ORDER BY wfaceoff-lfaceoff DESC, faceoffperc DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>Вбр: <?=$row['wfaceoff']?>/<?=$row['lfaceoff']?></h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>
                           </div>
                           <div class="col-xs-3" style="height: 245px;">
                               <a href="<?=$link3?>?stat=penalty"><div class="row" style="height:50px;">
                                   <h4>ШТРАФ</h4>
                               </div></a>

                               <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' ORDER BY penalty DESC, game, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>ШТРАФ: <?=$row['penalty']?> мин.</h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>
                           </div>
                           <div class="col-xs-3" style="margin-right: 0;height: 245px;">
                               <a href="<?=$link3?>?stat=gkeepers"><div class="row" style="height:50px;">
                                   <h4>ВРАТАРИ</h4>
                               </div></a>

                               <div class="row1" id="row11" style="padding:10px 0 10px 0;margin-top:-2px;">
                                <?php
                                    $sql = "SELECT * FROM `$players` WHERE tname='1' && `game`>'0' && pos='Вр' ORDER BY refshot DESC, KN, lostgoal, game DESC, sname LIMIT 1";
                                    $records = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_array($records))
                                    {
                                ?>


                                <div class="row1">
                                    <img src="<?=$row['img']?>" alt="" style="background:none;">
                                </div>
                                <div class="row1" style="margin:10px;padding:0;">
                                    <h5><?=$row['name']?></h5>
                                    <h5><?=$row['sname']?></h5>
                                    <h4>%ОБ: <?=$row['refshot']?>%</h4>

                                </div>


                                <?php
                                    }
                                ?>


                            </div>
                           </div>
                       </div>
                   </div>

            </div>
