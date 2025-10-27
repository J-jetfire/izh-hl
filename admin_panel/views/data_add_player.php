<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>НОВЫЙ ИГРОК | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
       <?php include_once "views/data_add_nav.php"; 
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
             }
        $table="cuptable".$idofcup;
        ?>
        <!-- Добавление данных - панель выбора -->
        <h3 class="cap_h3">НОВЫЙ ИГРОК</h3>
        <form action="data_add.php?action=<?=$_GET['action']?>" method="post" id="add_m" enctype="multipart/form-data">
            <input type="text" class="form-item" name="sname" value="" placeholder="Фамилия" autofocus required autocomplete="off">
            <input type="text" class="form-item" name="name" value="" placeholder="Имя" required autocomplete="off">
            <input type="text" class="form-item" name="tname" value="" placeholder="Отчество" required autocomplete="off"> <br>
            
            <select name="pos" class="form-item" required>
                <option value="Нп" selected>Нападающий</option>
                <option value="Зщ">Защитник</option>
                <option value="Вр">Вратарь</option>
            </select>
            
            <input type="number" class="form-item" name="num" value="" placeholder="Номер" required autocomplete="off" min="1" max="99">
            
            <input type="date" class="form-item" name="birthdate" value="" required autocomplete="off">
            
            <br>
            <input type="number" class="form-item" name="height" value="" placeholder="Рост" required autocomplete="off" min="50" max="250">
            <input type="number" class="form-item" name="weight" value="" placeholder="Вес" required autocomplete="off" min="15" max="200">
            
            <select name="hand" class="form-item" required>
                <option value="Левый" selected>Левый</option>
                <option value="Правый">Правый</option>
            </select>
            
            <!-- <input type="text" class="form-item" name="hand" value="" placeholder="Хват" required autocomplete="off"> -->
            
            <br>
            <div class="col-xs-6 text-center" style="margin:0;padding:0 0 0 38px;"> 
            
            <input name="img" type="file" id="add_l" class="uploadfile" value="img/players/unknown.png">
            
            <!--<input type="text" class="form-item" name="img" value="img/players/unknown.png" placeholder="img/players/unknown.png" required id="add_l" autocomplete="off">-->
            
            
            </div>
            
            
            <div class="col-xs-6 text-left" style="margin:0;padding:0;">
            
            <select name="team" id="add_l" class="form-item" required>
                <?php
                $sql = "SELECT * FROM `$table` ORDER BY team";
                $records = mysqli_query($link,$sql);
                    while ($row = mysqli_fetch_array($records)){
                ?>
                <option value="<?=$row['team'];?>"><?=$row['team']?></option>
                <?php } ?>
            </select>       
            
            </div>
           
           
            <!-- 
            <input type="text" class="form-item" name="img" value="img/players/unknown.png" placeholder="img/players/unknown.png" required id="add_l">
             -->
            
            <br><br>
            
            <!-- id / img / league / cup / season(dropdown list?) / status - автоматическое добавление  -->
            <input type="submit" value="ДОБАВИТЬ ИГРОКА" class="btn">
        </form>
        
        
    </div>
    
    
    
    <?php include_once "header/footer.php"; ?>
</body>
<script>
$(document).ready( function() {
    $(".uploadfile input[type=file]").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         $("#filename").val(filename);
    });
});
    </script>
</html>