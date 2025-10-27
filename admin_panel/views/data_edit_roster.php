<?php 
if (isset($_GET['team'])) {
            $_POST['team2']=$_GET['team'];
        }
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
    <title>РЕДАКТИРОВАТЬ ДАННЫЕ ИГРОКОВ | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
       <?php include_once "views/data_edit_nav.php";?>
        <!-- Добавление данных - панель выбора -->
        
        <?php if (empty($_POST)){ ?>
        <br>
        <h3 class="cap_h3">ВЫБЕРИТЕ КОМАНДУ</h3>
        <form action="data_edit.php?action=roster" method="post" id="add_m">
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
        <h3 class="cap_h3">ХК "<?=$_POST['team2']?>"</h3>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ ЛИЧНЫЕ ДАННЫЕ ИГРОКОВ</h3>
        <table class="zebra">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th style="width:70px;">ФОТО</th>
                    <th>ДР</th>
                    <th>Команда</th>
                    <th>№</th>
                    <th>Поз</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Рост</th>
                    <th>Вес</th>
                    <th>Хват</th>
                    <th>Город</th>
                </tr>
            </thead>
            <tbody>
               <?php $key=0; foreach ($options as $option): ?>
                <tr> 
                    <td title="УДАЛИТЬ МАТЧ"><div><a href="data_edit.php?action=roster&team=<?=$_POST['team2']?>&delete=<?=$option['id']?>"><button>X</button></a></div></td>
                    <td><?=$option['id']?></td>
                    <td><input name="img" type="file" class="uploadfile" id="imgchange" style="width:70px;" data-id="<?=$option['id']?>"></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="birthdate"><?=$option['birthdate']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="team"><?=$option['team']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="num"><?=$option['num']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="pos"><?=$option['pos']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="name"><?=$option['name']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="sname"><?=$option['sname']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="tname"><?=$option['tname']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="height"><?=$option['height']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="weight"><?=$option['weight']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="hand"><?=$option['hand']?></div></td>
                    <td><div class="edit" data-id="<?=$option['id']?>" contenteditable="true" data-name="status"><?=$option['status']?></div></td>
                    <!-- diffgoal / cup -->
                </tr>
                <?php $key++; endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    <script type="text/javascript">    
    $('input[type=file]').change(function(e){
    //$("#upload").click(function() {
      //e.preventDefault();
         var id = $(this).data('id');
	     var file_data = $(this).prop('files')[0];
	     var form_data = new FormData();
	     form_data.append('img', file_data);
	     form_data.append('id', id);
	     alert(form_data);
	     $.ajax({
	                url: 'functions/changeimg.php',
	                dataType: 'text',
	                cache: false,
	                contentType: false,
	                processData: false,
	                data: form_data,
	                type: 'post',
	                success: function(php_script_response){
	                    alert(php_script_response);
	                }
	     });
        return false;
	});

    </script>
    
    <script src="js/script3_2.js"></script>
    
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>