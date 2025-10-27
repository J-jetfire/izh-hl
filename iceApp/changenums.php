<!-- CHANGE NUMs OF HOMETEAM -->
<div id="myModalBoxEX" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Изменить номер игрока команды Хозяев</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">

                <?php 
                        require_once "editfunctions.php";
                        //require_once "../modals/users.php"; // функции
                        
                        $options = get_players1($link, $hometeam, $idofcup);
                        $options2 = get_players1($link, $awayteam, $idofcup);
                
                        if(isset($_POST['new_val']) ){
                            
                            if (update_players($link, $idofcup)){
                                exit("SAVED");
                            } else {
                                exit("ERROR");
                            }
                        }
                       ?>
                <table id="table_changenum2">
                   
                    <tr>
                        <th>#</th>
                        <th>Номер</th>
                        <th>Фамилия</th>
                        <th>ИМЯ</th>
                    </tr>
                    
                    <?php 
                    $k = 0; 
                    foreach ($options as $option): 
                    $k++; 
                    ?>
                        <tr>
                            <td nowrap>
                                <?=$k?>
                            </td>
                            <td nowrap><div class="edit" data-prtk="<?=$prtk?>" data-id="<?=$option['id']?>" contenteditable="true"><?=$option['num']?></div></td>
                            <td nowrap><?=$option['sname']?></td>
                            <td nowrap><?=$option['name']?></td>
                        </tr>
                        <?php endforeach; ?>
                </table>
                <br>
                <div class="row"> <br> </div>
            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                <button id="updte1" type="button" class="closemod" data-dismiss="modal">Закрыть окно</button>
            </div>
        </div>
    </div>
</div>
<!-- CHANGE NUMs OF HOMETEAM -->
    
    
    <!-- CHANGE NUMs OF AWAYTEAM -->
    <div id="myModalBoxEX2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Изменить номер игрока команды Гостей</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                <table id="table_changenum2">
                   
                    <tr>
                        <th>#</th>
                        <th>Номер</th>
                        <th>Фамилия</th>
                        <th>ИМЯ</th>
                    </tr>
                    
                    <?php 
                    $k = 0; 
                    foreach ($options2 as $option): 
                    $k++; 
                    ?>
                        <tr>
                            <td nowrap>
                                <?=$k?>
                            </td>
                            <td nowrap><div class="edit" data-prtk="<?=$prtk?>" data-id="<?=$option['id']?>" contenteditable="true"><?=$option['num']?></div></td>
                            <td nowrap><?=$option['sname']?></td>
                            <td nowrap><?=$option['name']?></td>
                        </tr>
                        <?php endforeach; ?>
                </table>
                <br>
                <div class="row"> <br> </div>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                    <button id="updte1" type="button" class="closemod" data-dismiss="modal">Закрыть окно</button>
                </div>
            </div>
        </div>
    </div>
    <script src="iceApp/script.js"></script>
    <!-- CHANGE NUMs OF AWAYTEAM -->