<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once "header/meta.php"; ?>
    <title>НОВАЯ СТАТЬЯ | ADMIN PANEL</title>
</head>
<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>
    
    <div class="container" style="padding:0;text-align:center;">
       
        <!-- Добавление данных - панель выбора -->
        <?php include_once "views/data_add_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->
        <h3 class="cap_h3">НОВАЯ СТАТЬЯ</h3>
        <form action="data_add.php?action=<?=$_GET['action']?>" method="post" id="add_m" enctype="multipart/form-data">
               <label>
                   ИЗОБРАЖЕНИЕ<br>
                   <input type="file" name="img" id="add_l" value="" class="form-item" required style="width:1100px;height:100px;">
               </label> <br>
               <label>
                   ЗАГОЛОВОК<br>
                   <input type="text" name="title" id="add_l" value="" class="form-item" autofocus required style="width:1100px;" autocomplete="off">
               </label> <br>
               <label>
                   ТЕКСТ<br>
                   <textarea name="content" class="form-item" id="add_l" style="height:300px;width:1100px;" required autocomplete="off"></textarea>
               </label><br>
               <input type="submit" value="Добавить статью" class="btn">
           
            
        </form>
        
        
    </div>
    
    
    
    <?php include_once "header/footer.php"; ?>
</body>
</html>