<?php
$dir = "";
require_once $dir.'login/login.php';
$title = "ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'header/metastyle.php'; ?>
    <title><?=$title?> | Календарь</title>

</head>

<body class="body">
    <?php require_once 'header/topper.php'; ?>
    <!-- -------------------------------------BASE-----------------------------  -->
    <div class="section" id="background">
         <div class="row" style="text-align:center;width:100%;margin:0;padding:0;">
                <br>
            </div>

        <section id="main_block">
            <div class="main">

                <style type="text/css">
                    #table_logo{
                        width: auto;
                        height: 60px;
                    }
                </style>

                <?php 

$calendar = 'calendar8';
$lin = 'protokol25.php?protokol=';

?>
<div class="container" id="teamslist">
                   <div class="row">
                       <h1>КАЛЕНДАРЬ МАТЧЕЙ</h1>
                   </div>
                   <div class="row2" style="padding: 10px 0 10px 0;margin-top:-2px;">
                       <table id="tablemain2">
                                <thead>
                                    <tr style="height:40px;">
                                        <th>#</th>
                                        <th>Дата</th>
                                        <th>Время</th>
                                        <th>Место</th>
                                        <th>Хозяева</th>
                                        <th></th>
                                        <th>Счёт</th>
                                        <th></th>
                                        <th>Гости</th>
                                    </tr>
                                </thead>

                                <tbody style="height:46px;">

                                    <?php
    $sql = "SELECT * FROM `$calendar` ORDER BY id ";
    $records = mysqli_query($con,$sql);    
                    $k=0;
                        while($row = mysqli_fetch_array($records)){
                            $k++;
                            
                           ?>
                                        <tr class="tdclas" style="height:46px;">
                                            <td onClick="window.location.href='<?=$lin?><?=$row['id'] ?>'">

                                                <?=$k ?>
                                            </td>
                                            <td onClick="window.location.href='<?=$lin?><?=$row['id'] ?>'">
                                                <?=date("d.m.Y",strtotime($row['date']))?>
                                            </td>
                                            <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <?=$row['time']?>
                                            </td>
                                            <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <?=$row['place']?>
                                            </td>
                                            <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <?=$row['home']?>
                                            </td>
                                            <td style="padding: 0px 5px;" onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <img src="<?=$row['logohome'] ?>" alt="" id="table_logo" style="height:45px;">
                                            </td>
                                            <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <h4><strong><?=$row['result']?></strong></h4>
                                            </td>
                                            <td style="padding: 0px 5px;" onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <img src="<?=$row['logoaway'] ?>" alt="" id="table_logo" style="height:45px;">
                                            </td>
                                            <td onClick="window.location.href='<?=$lin ?><?=$row['id'] ?>'">
                                                <?=$row['away']?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                   </div>
               </div>

            </div>
        </section>
        <div class="row" style="text-align:center;width:1200px;margin:10px 0 20px 0;padding:0;">
            
        </div>
    </div>
<script>var keys1 = 0;</script>
    <!-- -----------------------------------BASE----------------------------- -->
    <?php require_once 'header/footer.php';
          require_once 'header/metastyle_end.php';
    ?>

</body>

</html>