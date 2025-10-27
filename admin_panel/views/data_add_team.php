<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>НОВАЯ КОМАНДА | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
        <?php include_once "views/data_add_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        <h3 class="cap_h3">НОВАЯ КОМАНДА</h3>
        <form action="data_add.php?action=<?=$_GET['action']?>" method="post" id="add_m" enctype="multipart/form-data">
          <div class="row" style="width:1120px;margin:0 40px 0 40px;">
           <div class="col-xs-6 text-center" style="margin:0;padding:0;">
               <label>ЛОГОТИП КОМАНДЫ</label><br>
               <input name="img" type="file" class="uploadfile" value="img/logotypes/temp.png" reqired>
           </div>
           <div class="col-xs-6 text-center" style="margin:0;padding:0;">
              <label>НАЗВАНИЕ КОМАНДЫ</label><br>
               <input type="text" class="form-item" name="team" value="" placeholder="Название команды" autofocus required id="add_l">
           </div>
           </div> 
            <!-- <input type="text" class="form-item" name="logo" value="img/logotypes/temp.png" placeholder="Логотип" required> -->
            
            
        
            <!-- division(Лига)- автоматическое добавление  -->
            <input type="submit" value="Добавить команду" class="btn">
        </form>
        
        
    </div>
    
    
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>