<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include_once "header/meta.php"; ?>
    <title>ДОБАВИТЬ СОСТАВ КОМАНДЫ | ADMIN PANEL</title>
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
        <h3 class="cap_h3">ДОБАВИТЬ ИГРОКОВ В КОМАНДУ</h3>
        <?php if (!empty($_POST)) $_GET['amt'] = $_POST['amt']; 
         if (!$_GET['amt']){ ?>
        <form action="data_add.php?action=<?=$_GET['action']?>" method="post" id="add_m">
           <label>ВЫБЕРИТЕ КОМАНДУ</label><br>  
            <select name="team" id="add_l" class="form-item" required>
                <?php
                $sql = "SELECT * FROM `$table` ORDER BY team";
                $records = mysqli_query($link,$sql);
                    while ($row = mysqli_fetch_array($records)){
                ?>
                <option value="<?=$row['team'];?>"><?=$row['team']?></option>
                <?php } ?>
            </select> <br>
            <label>ВЫБЕРИТЕ КОЛ-ВО ИГРОКОВ</label><br>
            <input type="number" id="add_l" class="form-item" name="amt" value="30" placeholder="Кол-во игроков" required min="1" max="30"> <br><br>
            <input type="submit" value="Ввод состава" class="btn">
        </form>
        <?php } else { ?>
        <form action="data_add.php?action=<?=$_GET['action']?>&amt=<?=$_GET['amt']?>" method="post"  id="add_m" enctype="multipart/form-data">
            <?php $i=0; while ($i<>$_GET['amt']) { $i++;?>
            <h3><?=$i?></h3>
            <input type="text" class="hidden" name="team" value="<?=$_POST['team']?>">
            <input type="text" class="form-item" name="sname[]" value="" placeholder="Фамилия" autofocus required autocomplete="off">
            <input type="text" class="form-item" name="name[]" value="" placeholder="Имя" required autocomplete="off">
            <input type="text" class="form-item" name="tname[]" value="о" placeholder="Отчество" required autocomplete="off"> <br>
            
            <select name="pos[]" class="form-item" required>
                <option value="Нп" selected>Нападающий</option>
                <option value="Зщ">Защитник</option>
                <option value="Вр">Вратарь</option>
            </select>
            
            <input type="number" class="form-item" name="num[]" value="<?=$i?>" placeholder="Номер" required autocomplete="off" min="1" max="99">
            
            <input type="date" class="form-item" name="birthdate[]" value="1991-01-01" required autocomplete="off">
            
            <br>
            <input type="number" class="form-item" name="height[]" value="180" placeholder="Рост" required autocomplete="off" min="50" max="250">
            <input type="number" class="form-item" name="weight[]" value="80" placeholder="Вес" required autocomplete="off" min="15" max="200">
            
            <select name="hand[]" class="form-item" required>
                <option value="Левый" selected>Левый</option>
                <option value="Правый">Правый</option>
            </select>
            
            <br>
            <div class="col-xs-12 text-center" style="margin:0;padding:0 0 0 38px;"> 
            
            <input name="img[]" type="file" id="add_l" class="uploadfile" value="img/players/unknown.png" style="width:1100px;">
            
            </div>
            
            <br><br>
            <?php } ?>
            <!-- team / id / img / league / cup / season(dropdown list?) / status - автоматическое добавление  -->
            <input type="submit" value="Добавить Состав" class="btn">
        </form>
        <?php } ?>

    </div>



    <?php include_once "header/footer.php"; ?>
</body>

</html>
