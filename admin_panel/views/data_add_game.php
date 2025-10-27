<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>НОВЫЙ МАТЧ | ADMIN PANEL</title>
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
        <h3 class="cap_h3">НОВЫЙ МАТЧ</h3>
       
        <form action="data_add.php?action=<?=$_GET['action']?>" method="post" id="add_m">
            
            <!-- <input type="text" class="form-item" name="part" value="" placeholder=" Регулярка/Плей-офф" required>-->
            <div class="col-xs-4 text-center" style="margin:0;padding:0 0 0 50px;"><h4 style="margin:5px;padding:0;">ДАТА</h4></div>
            <div class="col-xs-4 text-center" style="margin:0;padding:0;"><h4 style="margin:5px;padding:0;">ВРЕМЯ</h4></div>
            <div class="col-xs-4 text-center" style="margin:0;padding:0 50px 0 0;"><h4 style="margin:5px;padding:0;">ЛЕДОВАЯ АРЕНА</h4></div>
            <input type="date" class="form-item" name="date" value="" placeholder=" Дата (дд.мм.гггг)" required autocomplete="off">
            
            <input type="time" class="form-item" name="time" value="" placeholder=" Время (чч:мм)" required autocomplete="off">
            
            
            <select name="place" class="form-item" required>
                <option value='ЛД "Молодежный"'>ЛД "Молодежный"</option>
                <option value='ЦАС "Удмуртия"'>ЦАС "Удмуртия"</option>
            </select> 
            <br>
            
            <div class="col-xs-6 text-center" style="margin:0;padding:0;"><h4 style="margin:5px;padding:0;">ХОЗЯЕВА</h4></div>
            <div class="col-xs-6 text-center" style="margin:0;padding:0;"><h4 style="margin:5px;padding:0;">ГОСТИ</h4></div>
              
            <select name="home" id="add_l" class="form-item" required>
                <?php
                $sql = "SELECT * FROM `$table` ORDER BY team";
                $records = mysqli_query($link,$sql);
                    while ($row = mysqli_fetch_array($records)){
                ?>
                <option value="<?=$row['team'];?>"><?=$row['team']?></option>
                <?php } ?>
            </select>   
            <select name="away" id="add_l" class="form-item" required>
                <?php
                $sql = "SELECT * FROM `$table` ORDER BY team";
                $records = mysqli_query($link,$sql);
                    while ($row = mysqli_fetch_array($records)){
                ?>
                <option value="<?=$row['team'];?>"><?=$row['team']?></option>
                <?php } ?>
            </select>
            
            <br><br>
            <!-- division / result / logohome / logoaway - автоматическое добавление  -->
            <input type="submit" value="ДОБАВИТЬ МАТЧ" class="btn">
        </form>
        
        
    </div>
    
    
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>