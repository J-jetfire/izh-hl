<?php 
$options = get_table($link, $idofcup);
if(isset($_POST['new_val']) ){
    if (update_table($link, $idofcup)){
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
    <title>EDIT TABLE | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
       <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        <br>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ ТУРНИРНУЮ ТАБЛИЦУ</h3>
        <table class="zebra">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Команда</th>
                    <th>И</th>
                    <th>В</th>
                    
                    <th>ВБ</th>
                    <th>ПБ</th>
                    
                    <th>П</th>
                    <th>Ш</th>
                    <th>ПШ</th>
                    <th>О</th>
                    <th>Штр</th>
                    <th>Бол</th>
                    <th>ШБ</th>
                    <th>ПБ</th>
                    <th>Мен</th>
                    <th>ПМ</th>
                    <th>ШМ</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach ($options as $option): ?>
                <tr>
                    <td><?=$option['identity']?></td>
                    <td><div data-id="<?=$option['identity']?>" contenteditable="false" data-name="team"><?=$option['team']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="game"><?=$option['game']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="win"><?=$option['win']?></div></td>
                    
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="winb"><?=$option['winb']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="lostb"><?=$option['lostb']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="lost"><?=$option['lost']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="goal"><?=$option['goal']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="lostgoal"><?=$option['lostgoal']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="point"><?=$option['point']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="penalty"><?=$option['penalty']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="PP"><?=$option['PP']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="goalPP"><?=$option['goalPP']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="lostPP"><?=$option['lostPP']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="LP"><?=$option['LP']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="lostLP"><?=$option['lostLP']?></div></td>
                    <td><div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="goalLP"><?=$option['goalLP']?></div></td>
                    <!-- diffgoal / cup -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="loader"><span></span></div>
        <div id="mes-edit"></div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script2.js"></script>
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>