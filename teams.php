<?php
$dir = "";
require_once $dir.'login/login.php';
$title = "ИЖЕВСКАЯ ХОККЕЙНАЯ ЛИГА";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'header/metastyle.php'; ?>
    <title><?=$title?> | Команды</title>
</head>

<body class="body">
    <?php require_once 'header/topper.php'; 
    ?>
    <div class="section" id="background">
   <div class="row" style="text-align:center;width:100%;margin:0;padding:0;">
                <br>
            </div>
           
        <section id="main_block" style="height:auto;padding-bottom:10px;">
            <div class="main">
            
               <div class="container" id="teamslist">
                   <div class="row">
                       <h1>КОМАНДЫ</h1>
                   </div>
                   <div class="row2" style="margin-top:-2px;">
                      
                      <?php 
                       
                           $link9="team.php";
                           require_once 'statmodule/teams_spb.php'; 
                       
                       ?>
                   </div>
               </div>
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