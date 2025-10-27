<?php 
$dir = "../";
$options = get_articles($link);

if(isset($_POST['new_val']) ){
    if (update_articles($link)){
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
    <link rel="stylesheet" href="css/styleprtk.css">
    <title>РЕДАКТИРОВАТЬ СТАТЬИ | ADMIN PANEL</title>
</head>

<body>
    <?php include_once "header/header.php"; ?>
    <?php require_once 'header/league.php'; ?>

    <div class="container" style="padding:0;text-align:center;">

        <!-- Добавление данных - панель выбора -->
        <?php include_once "views/data_edit_nav.php"; ?>
        <!-- Добавление данных - панель выбора -->

        <?php if(!isset($_GET['page'])){ ?>
        <h3 class="cap_h3">ВЫБЕРИТЕ СТАТЬЮ</h3>
           <?php foreach ($options as $option): ?>
           <a href="data_edit.php?action=articles&page=<?=$option['identity']?>" style="height:200px;">
            <div class="row" id="selectingpage">
              <div class="col-xs-4 text-left" style="width:295px;">
                  <img src="<?=$dir.$option['img']?>" alt="">
              </div>
              <div class="col-xs-8 text-left">
                  <div class="row" style="height:70px;"><h3><?=mb_substr($option['title'], 0, 110, 'UTF-8')?></h3></div>
                  <div class="row" style="height:90px;"><p><?=mb_substr($option['comment'], 0, 370, 'UTF-8')?>...</p></div>
                  <div class="row" style="text-align:right;"><p><?=$option['date']?></p></div>
              </div>
            </div>
         </a>   
        <?php endforeach; ?>    
        <?php } else { 
        $page = $_GET['page'];
        $options = get_article($link);
        ?>
        <h3 class="cap_h3">РЕДАКТИРОВАТЬ СТАТЬЮ</h3>
            <?php foreach ($options as $option): ?>
            <div class="row" id="articlepage">
                <div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="title" data-page="<?=$page?>"><h1><?=$option['title']?></h1></div>
                <img src="<?=$dir.$option['img']?>" alt="">
                <h4><text> <xmp class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="text" data-page="<?=$page?>"><?=$option['text']?></xmp></text> </h4>            
                <br>
                <div class="edit" data-id="<?=$option['identity']?>" contenteditable="true" data-name="comment" data-page="<?=$page?>"><h4><?=$option['comment']?></h4></div>
            
            
            </div>
            
            
           
              
                
           <?php endforeach; ?>

        <?php } ?>

        <div id="loader"><span></span></div>
        <div id="mes-edit"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script5.js"></script>

    <?php include_once "header/footer.php"; ?>
</body>

</html>
