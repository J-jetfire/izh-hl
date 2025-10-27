<?php
            include_once "header/connect.php"; 
            $link = db_connect(); // подключение к базе данных через функцию

            $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
               $records = mysqli_query($link,$sql);
               while ($row = mysqli_fetch_array($records)){
                    $idofcup = $row['id'];
                    $cuplogo = $row['cuplogo'];
                    $league = $row['league'];
                    $season = $row['season'];
                    $part = $row['part'];
                }
    ?>
       <div class="container1" style="padding:0;text-align:center;height:250px;margin:auto;width:1200px;">
        <div class="row" style="margin:0;text-align:center;height:160px;">
            <div class="col-xs-3 text-right" style="width:250px;"><img src="../<?=$cuplogo?>" alt="" style="width:160px;"></div>
            <div class="col-xs-9 text-left">
                <h1 style="text-align:left;margin:30px 10px 10px 0;"><?=$league?> <?=$season?></h1>
                 <h2 style="text-align:left;margin:20px 10px 10px 0;"><?=$part?></h2>
             </div>    
        </div>

        <form action="header/leagueupdate.php" method="post" id="add_m" enctype="multipart/form-data">            
            <select name="id_l" id="chnglg" class="form-item" style="width:1100px;text-align:center;">
                <?php
                $table = "cupstats";
                $sql = "SELECT * FROM `$table` ORDER BY identity DESC";
                $records = mysqli_query($link,$sql);
                    while ($row = mysqli_fetch_array($records)){
                ?>
                <option value="<?=$row['identity'];?>" style="text-align:center;"
                       <?php
                        if ($row['cup']==$idofcup) { echo 'selected'; }
                        ?>><?=$row['league'].' '.$row['season'].' | '.$row['part']?></option>
                        <?php } ?>
            </select>       
        </form>
    </div>