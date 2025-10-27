<?php
$dir = "";
require_once $dir.'login/login.php';
?>
<!DOCTYPE html>
<html lang="ru">
<?php $page = $_GET['page'];?>
<head>
    <?php require_once 'header/metastyle.php'; ?>
    <title>ИХЛ 2019-2020 | Новости</title>

</head>

<body class="body">
    <?php require_once 'header/topper.php'; ?>
    <!-- -------------------------------------BASE-----------------------------  -->
    <?php require_once 'header/connect.php'; 
    $sql = "SELECT * FROM news ORDER BY id DESC";
    $records = mysqli_query($con,$sql);
    ?>
    
    <div class="section" id="background">
        
         <div class="row" style="text-align:center;width=100%;margin:0;padding:0;">
            <br>
        </div>
        
       <section id="main_block" style="">
            <div class="main">

               <style type="text/css">
                
                   dinamonews1{
                       width:100%;
                       
                       text-align: left;
                       margin: 0;
                       padding: 0;
                   }
                   img{
                       width:600px;
                       height: auto;
                       text-align: left;
                       padding: 0 15px 0 0;
                   }
                   #newslist img {
                        width: 800px;
                        text-align: center;
                    }
                   
                </style>
                
                <div class="row" id="newslist">
                <?php
                        $sql = "SELECT * FROM news WHERE id='$page' ";
                        $records = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($records)){      ?>
                            <div class="row" id="dinamonews1" style="margin:0;padding:0;text-align:left;">
                                <h3 style="color:#fff;text-align:center;">
                                        <?=$row['title']?>
                                </h3>
                                    <div class="row" style="margin:auto; padding:0; width:1100px;text-align:center;">
                                    <h4 style="color:#fff;">    
                                    
                                    <?=$row['text']?>
                                    </h4>
                                    </div>
                               
                            </div>
                            <?php
            } ?>
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
