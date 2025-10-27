<?php 
$options = get_players($link, $idofcup);
if(isset($_POST['new_val']) ){
    if (update_players($link, $idofcup)){
        exit("SAVED");
    } else {
        exit("ERROR");
    }
    
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>РЕДАКТИРОВАТЬ СТАТИСТИКУ ИГРОКОВ | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
       <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        
        <?php if (empty($_POST)){ ?>
        <br>
        <h3 class="cap_h3">ВЫБЕРИТЕ КОМАНДУ</h3>
        <form action="data_edit.php?action=players" method="post" id="add_m">
            <select name="team2" id="add_l" class="form-item" required>
                <?php
                $table="cuptable".$idofcup;
                $sql = "SELECT * FROM `$table` ORDER BY team";
                $records = mysqli_query($link,$sql);
                    while ($row = mysqli_fetch_array($records)){
                ?>
                <option value="<?=$row['team'];?>"><?=$row['team']?></option>
                <?php } ?>
            </select>   <br>
            <input type="submit" value="ВЫБРАТЬ КОМАНДУ" class="btn" style="width:540px;">
        </form>
        <?php } else { ?>
        <br>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ ХК "<?=$_POST['team2']?>"</h3>
        <table class="zebra">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>№</th>
                    <th>Поз</th>
                    <th>Игрок</th>
                    <th>И</th>
                    <th>Г</th>
                    <th>А</th>
                    <th>О</th>
                    <th>+/-</th>
                    <th>БВ</th>
                    <th>ЗБ</th>
                    <th>ВВбр</th>
                    <th>ПВбр</th>
                    <th>Штр</th>
                    <th>ПШ</th>
                    <th>ГР</th>
                    <th>ГБ</th>
                    <th>ГМ</th>
                    <th>ГП</th>
                    <th>Бр</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach ($options as $option): ?>
                <tr>
                    <td><?=$option['id']?></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="num"><?=$option['num']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="pos"><?=$option['pos']?></div></td>
                    <td><div data-id="<?=$option['id']?>" contenteditable="false" data-name="name"><?=mb_substr($option['name'], 0, 1, 'UTF-8')?>. <?=$option['sname']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="game"><?=$option['game']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="goal"><?=$option['goal']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="assist"><?=$option['assist']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="point"><?=$option['point']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="plusminus"><?=$option['plusminus']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="shot"><?=$option['shot']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="bshot"><?=$option['bshot']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="wfaceoff"><?=$option['wfaceoff']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="lfaceoff"><?=$option['lfaceoff']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="penalty"><?=$option['penalty']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="lostgoal"><?=$option['lostgoal']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="ge"><?=$option['ge']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="gb"><?=$option['gb']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="gm"><?=$option['gm']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="gwin"><?=$option['gwin']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="allshot"><?=$option['allshot']?></div></td>
                    <!-- diffgoal / cup -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
        
        <div id="loader"><span></span></div>
        <div id="mes-edit"></div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script3.js"></script>
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>