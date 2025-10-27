<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>НОВЫЙ ТУРНИР/КУБОК | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
        <?php include_once "views/data_add_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        <h3 class="cap_h3">НОВЫЙ ТУРНИР / КУБОК</h3>
        <?php
                $table="cupstats";
                $sql = "SELECT * FROM `$table` ORDER BY identity DESC LIMIT 1";
                $records = mysqli_query($link,$sql);
                while ($row = mysqli_fetch_array($records)){
                    $id_l = $row['identity'];
                }
                //if ($part="Регулярный чемпионат") {$part="";}
        ?>
        <form action="data_add.php?action=<?=$_GET['action']?>" method="post" id="add_m">
            <select name="season" class="form-item" required>
                <option value="2018">2018</option>
                <option value="2018-2019" selected>2018-2019</option>
                <option value="2019">2019</option>
                <option value="2019-2020">2019-2020</option>
           </select>
            <input type="text" class="form-item" name="league" value="" placeholder=" Введите название турнира / кубка" required autocomplete="off">
            
            <select name="part" class="form-item" required>
                <option value="Регулярный чемпионат" selected>Регулярный чемпионат</option>
                <option value="Плей-офф">Плей-офф</option>
           </select>
            
            <input type="hidden" class="form-item" name="id_l" value="<?=$id_l?>">
            <!-- division(Лига)- автоматическое добавление  --> 
            <br><br>
            <input type="submit" value="ДОБАВИТЬ ТУРНИР/КУБОК" class="btn">
        </form>
        
        
    </div>
    
    
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>