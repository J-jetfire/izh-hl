<div class="container" id="statslist">
                   <div class="row">
                       <h1>СНАЙПЕРЫ</h1>
                   </div>
                   
                   <div class="row2" style="padding: 10px 0 10px 0;margin-top:-2px;">
                      <?php require_once'statmodule/menu2.php'; ?>
                   
                   
                   
                      <table id="team_table2">

                    <thead>
                        <tr>
                                <th></th>
                                <th></th>
                                <th>ИГРОК</th>
                                <th>КОМАНДА</th>
                                <th>#</th>
                                <th>Поз</th>
                                <th>Игры</th>
                                <th>Голы</th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php       
      	$sql = "SELECT * FROM `$players` WHERE tname='1' && goal!='0' ORDER BY goal DESC, game, sname ";

    $records = mysqli_query($con,$sql);    
                    $k=0;
                        while($row = mysqli_fetch_array($records)){
                            $k++;
                            
                           ?>
                        <tr  class="tdclas">
                                <td>
                                    <?=$k?>
                                </td>
                                <td style="padding:0;"><img src="<?=$row['img']?>" alt="" id="shmak2" style="background:none;"></td>
                                <td>
                                    <h4>
                                        <?=$row['name']?>
                                            <?=$row['sname']?>
                                    </h4>
                                </td>
                                <td>
                                    <?=$row['team']?>
                                </td>
                                <td>
                                    <?=$row['num']?>
                                </td>
                                <td>
                                    <?=$row['pos']?>
                                </td>
                                <td>
                                    <?=$row['game']?>
                                </td>
                                <td>
                                    <?=$row['goal']?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                   </div>
</div>