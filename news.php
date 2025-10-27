<?php
$dir = "";
require_once $dir.'login/login.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'header/metastyle.php'; ?>
    <title>ИХЛ 2019-2020 | Новости</title>

</head>

<body class="body">
    <?php require_once 'header/topper.php'; ?>
    <!-- -------------------------------------BASE-----------------------------  -->
    <?php require_once 'header/connect.php'; ?>

    <div class="section" id="background">

        <div class="row" style="text-align:center;width=100%;margin:0;padding:0;">
            <br>
        </div>
        
        <section id="main_block" style="padding-bottom:0;">
            <div class="main">
            <div class="row" id="newslist">

                <?php
                            $news = "news";
                            $sql = "SELECT * FROM $news ORDER BY id DESC"; // ВЫБОРКА ДАННЫХ ИЗ БД
                            $records = mysqli_query($con, $sql); // СОРТИРОВКА ДАННЫХ
                            $k=0;
                            
                            while($row = mysqli_fetch_array($records, MYSQLI_ASSOC)){
                            $k++; ?>

                <div class='row plin'>
                    <a style="text-decoration: none;" href="newspage.php?page=<?= $row['id'] ?>">
                        <div class='col-xs-4 text-left' style='padding:0 10px 0 10px;'><img src="<?= $row['image'] ?>" style='width:354px;height: 220px;border-radius:30px;'></div>

                        <div class='col-xs-8 text-left' style='padding-left: 10px;'>

                            <div class='row'>
                                <p style='font-size: 24px; font-weight: bold; padding: 0 10px 0 0;'>
                                    <?= $row['title'] ?>
                                </p>
                            </div>
                            <div class='row'>
                                <p style='padding-left: 0;padding-right:10px;font-weight: 300; font-size: 18px'>
                                    <?= mb_substr($row['link'], 0, 250, 'UTF-8')?>...</p>
                            </div>

                        </div>
                    </a>
                </div>
                <?php
}
?>
           </div>
            </div>

        </section>

        <section>
            <div class="row" style="margin:0;padding:0;width:100%;">
            </div>
        </section>
        <br><br>

    </div>
<script>var keys1 = 0;</script>
    <!-- -----------------------------------BASE----------------------------- -->
    <?php require_once 'header/footer.php';
          require_once 'header/metastyle_end.php';
    ?>
</body>

</html>
