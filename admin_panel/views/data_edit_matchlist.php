<?php 
$options = get_matchlist($link, $idofcup);
if(isset($_POST['new_val']) ){
    if (update_matchlist($link, $idofcup)){
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
    <title>EDIT MATCHLIST | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
       <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        <br>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ КАЛЕНДАРЬ МАТЧЕЙ</h3>
        <table class="zebra">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Кубок</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Место</th>
                    <th>Хозяева</th>
                    <th>Гости</th>
                    <th>Счёт</th>
                    
                </tr>
            </thead>
            <tbody>
               <?php foreach ($options as $option): ?>
                <tr>
                    <td title="УДАЛИТЬ МАТЧ"><div><a href="data_edit.php?action=matchlist&delete=<?=$option['id']?>"><button>X</button></a></div></td>
                    <td><?=$option['id']?></td>
                    <td><div data-id="<?=$option['id']?>" contenteditable="false" data-name="league"><?=$option['part']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="date"><?=$option['date']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="time"><?=$option['time']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="place"><?=$option['place']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="home"><?=$option['home']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="away"><?=$option['away']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="result"><?=$option['result']?></div></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="loader"><span></span></div>
        <div id="mes-edit"></div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script1.js"></script>
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>