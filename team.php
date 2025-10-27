<?php
$dir = "";
require_once $dir.'login/login.php';
$title = "ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА";
$team = $_GET['num'];
$cuptable = "cuptable8";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'header/metastyle.php';
    require_once 'header/connect.php';
    $sql = "SELECT * FROM `$cuptable`";
    $records = mysqli_query($con,$sql);  
     while($row = mysqli_fetch_array($records)){
         if ($row['identity']==$team) {
             $komanda = $row['team'];
             $teamlogo = $row['logo'];
         }
     }
    ?>
    <title><?=$title?> | <?=$komanda?> </title>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#team_table2").tablesorter();
        });

    </script>
</head>

<body class="body">
    <?php require_once 'header/topper.php';
    ?>

    <div class="section" id="background">
       <div class="row" style="text-align:center;width=100%;margin:0;padding:0;">
                <br>
            </div>
        <section id="main_block" style="height:auto;">
            <div class="main">
            <div class="container" id="teampage">
                <div class="row1">
                       <h1>ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА</h1>
                </div>
            <div class="row2" style="margin-top:-2px;">
                <div class="row" style="margin:0;padding:0;">
                    <div class="col-xs-3" style="margin:0;padding:0;">
                        <img src="<?=$teamlogo?>" alt="" id="table_logo2">
                    </div>
                    <div class="col-xs-9 text-left" style="margin:40px 0 0 0;padding:0;">
                        <h2 style="margin-top:10px;margin-bottom:10px;color:white;font-weight:bold;text-transform:uppercase;font-style:italic;">ХК "<?=$komanda?>"</h2>
                    </div>
               </div>
               <div class="row" style="margin:0;padding:0;">
<!--таблици Статистика, Команды, Калиндарь-->
                <?php 
                    require_once 'sen_stat_kom_kal.php';
                ?>
<!--/таблици Статистика, Команды, Калиндарь-->
                </div>
                <br>
                </div>
            </div>
                
            </div>
        </section>
        <section>
            <div class="row" style="margin:0;padding:0;width:100%;">
                <br><br>
            </div>
        </section>
    </div>
<script>var keys1 = 0;</script>
    <!-- -----------------------------------BASE----------------------------- -->
    <?php require_once 'header/footer.php';
          require_once 'header/metastyle_end.php';
    ?>

</body>

</html>
