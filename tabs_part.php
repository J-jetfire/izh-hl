<?php 
    $playoff = "?num=".$_GET['num']."&part=playoff";
    $regular = "?num=".$_GET['num']."&part=regular";
?>
   <div id="menu2">
    <ul id="nav2">
        <style type="text/css">
            #nav2>li:hover {
                background-color: #fff
            }
            #nav2>li {
                width: 50%;
                list-style: none;
                float: left;
                background: -webkit-linear-gradient(#1c0e0d, #333132);
                background: -o-linear-gradient(#1c0e0d, #333132);
                background: linear-gradient(#1c0e0d, #333132);
            }
            
            #nav2 li a {
                display: block;
                color: #fff;
                line-height: 53px;
                text-align: center;
                font-size: 15px;
                text-decoration: none;
                font-weight: bold;
            }
            
            #nav2 li a:hover {
                color: #000;
                background-color: #fff;
            }
            <?php if ($_GET['part']=="playoff") { ?>
                  #nav2pf {
                        color: #000!important;
                        background-color: #fff!important;
                    }  
            <?php } else { ?>
                    #nav2reg {
                        color: #000!important;
                        background-color: #fff!important;
                    }  
            <?php } ?>
        </style>

        <li><a href="<?=$regular?>" id="nav2reg">РЕГУЛЯРНЫЙ ЧЕМПИОНАТ</a></li>
        <li><a href="<?=$playoff?>" id="nav2pf">PLAY-OFF</a></li>
    </ul>
</div>

<br>