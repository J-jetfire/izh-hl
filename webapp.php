<?php
$dir = "";
require_once $dir.'login/login.php';
if(!$_SESSION['usr']) {
    require_once 'header/topper3.php';
die; 
} else if($_SESSION['usr']<>'superadmin_18ihl' && $_SESSION['usr']<>'admin_18ihl' && $_SESSION['usr']<>'statist') {
    require_once 'header/topper3.php';
die; 
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include_once 'header/metastyle_app.php'; ?>
    <title>iceApp by AndreyKarimov</title>
    
    
    <?php
    //$prtk = $_GET['protokol'];
        //require_once 'header/connect.php';// connect to mysql
        $link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }
        $players = "players8";
        include_once "GAME_INFO_8.php";
        
        if ($result<>'-') {
            require_once 'header/topper3.php';
            die;
        }
//====================== ENTER MATCH DATA HERE (up)   
    ?>
    <script>
        var protokol = <?=$prtk?>;
        var cup1 = "<?=$cup?>";
        var team1 = "<?=$hometeam?>";
        var team2 = "<?=$awayteam?>";
    </script>
    <script>
        var identifiers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var playernames = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        var playersurnames = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        //var strings1 = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        var playernums = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        
         var poz = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        var i = 0;

    </script>
    <?php 
        include 'iceApp/dbteams.php';
        while($row = mysqli_fetch_array($result_1, MYSQLI_ASSOC)){
        ?>
    <script>
        identifiers[i] = <?=$row['id']?>;
        playernums[i] = <?=$row['num']?>;
        playernames[i] = "<?=$row['name']?>";
        playersurnames[i] = "<?=$row['sname']?>";
        poz[i]= "<?=$row['pos']?>";
        i++;
    </script>
    <?php 
        }
        ?>

    <script>
        i = 30;

    </script>
    <?php 
        while($row = mysqli_fetch_array($result_2, MYSQLI_ASSOC)){
        ?>
    <script>
        identifiers[i] = <?=$row['id']?>;
        playernums[i] = <?=$row['num']?>;
        playernames[i] = "<?=$row['name']?>";
        playersurnames[i] = "<?=$row['sname']?>";
        poz[i]= "<?=$row['pos']?>";
        i++;
    </script>
    <?php 
        }
        ?>

</head>

<body>
   <section class="iceApp" style="margin:auto;width:1200px;">
   
    <!-- HEADER WITH SETUP PRE-MATCH ***need to require /file.php*** -->
    <?php require_once 'iceApp/setupgame.php'; ?>
    <!-- HEADER WITH SETUP PRE-MATCH -->

    <!-- PANEL WITH BUTTONS OF CONTROL & PLAYERS -->
    <?php require_once 'iceApp/mainpanel.php'; ?>
    <!-- PANEL WITH BUTTONS OF CONTROL & PLAYERS -->
    
    <!-- ROSTER OF HOMETEAM -->
    <?php require_once 'iceApp/rosters.php'; ?>
    <!-- ROSTER OF AWAYTEAM -->
    
    <!-- CHANGE NUMs OF HOMETEAM -->
    <?php require_once 'iceApp/changenums.php'; ?>
    <!-- CHANGE NUMs OF AWAYTEAM -->
    
    <div id="myModalBoxEXIT" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="width:400px;margin:auto;">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Подтверждение</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body" style="text-align:center;">
                    <h5 style="text-transform:uppercase;text-align:center;">Вы уверены что хотите завершить матч?</h5>
                    <button type="button" class="btn btn-primary" id="gameover1" data-dismiss="modal">ДА</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">НЕТ</button>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div> <!-- ПОДТВЕРЖДЕНИЕ ЗАКРЫТИЯ -->
    <!---- MODAL EXIT   -->
    
    <!-- MODAL WITH GOAL DATA -->
    <?php require_once 'iceApp/controls.php'; ?>
    <!-- MODAL WITH PENALTY DATA -->
    <!-- MODAL WITH GOALIE / TIME-OUT -->
    </section>
    <script> // ИЗМЕНИТЬ НАЗВАНИЯ КНОПОК И ЧЕКБОКСОВ НА НОМЕРА ИГРОКОВ
        var q = 0;
        while (q < 60) {
    if (playernums[q] != 0) {
            $("#button"+q).val(playernums[q]);
            document.getElementById("lab" + q).innerHTML = playernums[q] + " |" + poz[q] + "| " + playernames[q] + " " + playersurnames[q];
            }
            else if (playernums[q] == 0){
                $("#button"+q).val(" ");
            }
            q++;
        }
        var watch = newVal;
        setInterval(function() {
            if (watch !== newVal) {
                var q = 0;
                while (q < 60) {
                    if (identifiers[q] == id1) {
                        $("#button" + q).val(newVal);
                        document.getElementById("lab" + q).innerHTML = newVal + " |" + poz[q] + "| " + playernames[q] + " " + playersurnames[q];
                        playernums[q] = newVal;
                    }
                    q++;
                }
                watch = newVal;

                $.ajax({
                    url: 'iceApp/squaddie.php',
                    type: 'POST',
                    data: {
                        new_val: newVal,
                        id: id1,
                        prtk: protokol
                    },
                    beforeSend: function() {},
                    success: function(res) {
                        console.log(res);
                    },
                    error: function() {
                        alert('Error!');
                    },
                    complete: function() {}
                })

                console.log('Variable changed.', newVal);
            }
        }, 100);
    </script> <!-- REFRESH NUMBERS OF PLAYERS -->

    <!-- AJAX SENDING TO $PRTK => SQUADS -->
    <?php require_once 'iceApp/ajaxtosquad.php'; ?>
    <!-- AJAX SENDING TO $PRTK => SQUADS -->
    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php require_once 'header/metastyle_end_app.php'; ?>
    <!-- Inclins (below), or include individual files as needasdasded-->
   <script type="text/javascript">
        var z6 = 0;
         var ztime = 0;
          var z4 = 0;
           var z9 = 0;
        var gkeepsarray = [];
         var jjk = 0;
 
                $("#gchange1").click(function() {
                if (document.querySelector('#yes').checked){ztime = 1;}
                if (document.querySelector('#no').checked){ztime = 2;}
            
                    if (gkeeperIDh<0) {
                    var check = 3;
                    } else { var check = 2; }
                    setgkeeper();
                    var gkeep = identifiers[gkeeperIDh];
                    gpl[gkeeperIDh] = 1;
                    // gkeep = id of hometeam goalie
                    
                    if (check == 3) {
                        $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_gkeep.php", //путь до php фаила отправителя
                            data: {
                               team: team1,
                               prtk: protokol,
                               gnow: gkeep,
                               ztime: ztime,
                               check: check
                            },
                                success: function(data) {
                                 }
                            });
                    gkeepsarray[jjk] = identifiers[gkeeperIDh]; jjk++;
                    } else
                    if (gkeeperprevh>=0) {
                    var gpre = identifiers[gkeeperprevh];
                    var z1 = document.getElementById("min3").value;
                    var z2 = document.getElementById("sec3").value;
                    $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_gkeep.php", //путь до php фаила отправителя
                            data: {
                               min: z1,
                               sec: z2,
                               team: team1,
                               prtk: protokol,
                               qrtr: quarter,
                               gnow: gkeep,
                               gprev: gpre,
                               ztime: ztime,
                               g_array: gkeepsarray,
                               check: check
                            },
                                success: function(data) {
                                 }
                            });
                    gkeepsarray[jjk] = identifiers[gkeeperIDh]; jjk++;
                    }
                    $('#myModalBoxREVIEWT').modal('hide');
                    document.getElementById("min3").value = '';
                    document.getElementById("sec3").value = '';
                });
                $("#gchange2").click(function() {
                    if (document.querySelector('#yes').checked){ztime = 1;}
                if (document.querySelector('#no').checked){ztime = 2;}
                    
                    if (gkeeperIDa<0) {
                    var check = 3;
                    } else { var check = 2; }
                    setgkeeper();
                    var gkeep = identifiers[gkeeperIDa];
                    gpl[gkeeperIDa] = 1;
                    
                    if (check == 3) {
                        $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_gkeep.php", //путь до php фаила отправителя
                            data: {
                               team: team2,
                               prtk: protokol,
                               gnow: gkeep,
                               ztime: ztime,
                               check: check
                            },
                                success: function(data) {
                                 }
                            });
                        gkeepsarray[jjk] = identifiers[gkeeperIDa]; jjk++;
                    } else
                    if (gkeeperpreva>=0) {
                    var z1 = document.getElementById("min3").value;
                    var z2 = document.getElementById("sec3").value;
                    var gpre = identifiers[gkeeperpreva];    
                    $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_gkeep.php", //путь до php фаила отправителя
                            data: {
                               min: z1,
                               sec: z2,
                               team: team2,
                               prtk: protokol,
                               qrtr: quarter,
                               gnow: gkeep,
                               gprev: gpre,
                               ztime: ztime,
                               g_array: gkeepsarray,
                               check: check
                            },
                                success: function(data) {
                                 }
                            });
                        gkeepsarray[jjk] = identifiers[gkeeperIDa]; jjk++;
                }
                    $('#myModalBoxREVIEWT').modal('hide');
                    document.getElementById("min3").value = '';
                    document.getElementById("sec3").value = '';
                });
                // ==---------------------===================
                $("#timeout1").click(function() {
                    if (document.querySelector('#yes').checked){ztime = 1;}
                if (document.querySelector('#no').checked){ztime = 2;}
                    
                    var z1 = document.getElementById("min3").value;
                    var z2 = document.getElementById("sec3").value;
                    var gkeep = 0;
                    var gpre = 0;
                    var check = 1;
                    $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_gkeep.php", //путь до php фаила отправителя
                            data: {
                               min: z1,
                               sec: z2,
                               team: team1,
                               prtk: protokol,
                               qrtr: quarter,
                               gnow: gkeep,
                               gprev: gpre,
                                ztime: ztime,
                               check: check
                            },
                                success: function(data) {
                                    $('#myModalBoxREVIEWT').modal('hide');
                                 }
                            });
                    document.getElementById("min3").value = '';
                    document.getElementById("sec3").value = '';
                });
                $("#timeout2").click(function() {
                    if (document.querySelector('#yes').checked){ztime = 1;}
                if (document.querySelector('#no').checked){ztime = 2;}
                    
                    var z1 = document.getElementById("min3").value;
                    var z2 = document.getElementById("sec3").value;
                    var gkeep = 0;
                    var gpre = 0;
                    var check = 1;
                    $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_gkeep.php", //путь до php фаила отправителя
                            data: {
                               min: z1,
                               sec: z2,
                               team: team2,
                               prtk: protokol,
                               qrtr: quarter,
                               gnow: gkeep,
                               gprev: gpre,
                                ztime: ztime,
                               check: check
                            },
                                success: function(data) {
                                     $('#myModalBoxREVIEWT').modal('hide');
                                 }
                            });
                    document.getElementById("min3").value = '';
                    document.getElementById("sec3").value = '';
                });
                // ==---------------------===================
                $("#addreviewbut").click(function() { 
                    if (document.querySelector('#yes').checked){ztime = 1;}
                if (document.querySelector('#no').checked){ztime = 2;}
                    
                    if (document.querySelector('#etc1').checked){z6 = 1;} // equal
                    if (document.querySelector('#etc2').checked){z6 = 2;} // power-play
                    if (document.querySelector('#etc3').checked){z6 = 3;} // weak-play
                    if (document.querySelector('#etc4').checked){z6 = 4;} // empty net
                    if (document.querySelector('#etc5').checked){z6 = 5;} // bullit
                    if (document.querySelector('#etc6').checked){z6 = 6;} // 6x5
                    if (document.querySelector('#etc7').checked){z6 = 7;} // 5x6
                    
                    goal();
                    
                    
                    var z1 = document.getElementById("min").value;
                    var z2 = document.getElementById("sec").value;
                    var z3 = document.getElementById("prtk").value;
                    var z5 = document.getElementById("checker").value;
                    var z7 = document.getElementById("pas1").value;
                    var z8 = document.getElementById("pas2").value;
                    
                
                    var whowon = true;
                    var l=0;
                    while (l<60){
                        if (document.getElementById("button" + l).style.backgroundColor == a) {
                        z4 = identifiers[l];
                        if (l >= 0 && l <= 29) { team = team1; if (z6==4) {lostG[gkeeperIDa]--;}}
                        if (l >= 30 && l <= 59) { team = team2; if (z6==4) {lostG[gkeeperIDh]--;}}
                        document.getElementById("button" + l).style.backgroundColor = b;
                        }
                        l++;
                    }
                    if (team1 == team) {
                    l=0; whowon = true;
                    while (l<30){
                        if (playernums[l] == z7 && z7!=0) {
                        PlayerPas[l]++;
                        $.ajax({
                        url: 'iceApp/online/ajax_assist.php',
                        type: 'POST',
                        data: {
                            id: identifiers[l],
                            prtk: protokol,
                            whowon: whowon
                        }
                        });
                        }
                        if (playernums[l] == z8 && z8!=0) {
                        PlayerPas[l]++;
                        $.ajax({
                        url: 'iceApp/online/ajax_assist.php',
                        type: 'POST',
                        data: {
                            id: identifiers[l],
                            prtk: protokol,
                            whowon: whowon
                        }
                        });    
                        }
                        l++;
                    } }
                    if (team2 == team) {
                    l=30;whowon = false;
                    while (l<60){
                        if (playernums[l] == z7 && z7!=0) {
                        PlayerPas[l]++;
                        $.ajax({
                        url: 'iceApp/online/ajax_assist.php',
                        type: 'POST',
                        data: {
                            id: identifiers[l],
                            prtk: protokol,
                            whowon: whowon
                        }
                        });
                        }
                        if (playernums[l] == z8 && z8!=0) {
                        PlayerPas[l]++;
                        $.ajax({
                        url: 'iceApp/online/ajax_assist.php',
                        type: 'POST',
                        data: {
                            id: identifiers[l],
                            prtk: protokol,
                            whowon: whowon
                        }
                        });
                        }
                        l++;
                    } }
                        $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_review.php", //путь до php фаила отправителя
                            data: {
                                min: z1,
                                sec: z2,
                                prtk: z3,
                                idg: z4,
                                checker: z5,
                                etc: z6,
                                pas1: z7,
                                qrtr: quarter,
                                ztime: ztime,
                                pas2: z8
                            },
                                success: function(data) {
                                 $('#myModalBoxREVIEWG').modal('hide'); }
                            });
                    document.querySelector('#etc1').checked = false;
                    document.querySelector('#etc2').checked = false;
                    document.querySelector('#etc3').checked = false;
                    document.querySelector('#etc4').checked = false;
                    document.querySelector('#etc5').checked = false;
                    
                    document.getElementById("min").value = '';
                    document.getElementById("sec").value = '';
                    
                    document.getElementById("pas1").value = '';
                    document.getElementById("pas2").value = '';
                        });    
                // ==---------------------===================
                $("#addreviewbut2").click(function() { 
                    if (document.querySelector('#yes').checked){ztime = 1;}
                if (document.querySelector('#no').checked){ztime = 2;}
                    
                    if (document.querySelector('#etc12').checked){z6 = 1;z9 = 2;}
                    if (document.querySelector('#etc22').checked){z6 = 2;z9 = 4;}
                    if (document.querySelector('#etc32').checked){z6 = 3;z9 = 5;}
                    if (document.querySelector('#etc42').checked){z6 = 4;z9 = 12;}
                    if (document.querySelector('#etc52').checked){z6 = 5;z9 = 25;}
                    if (document.querySelector('#etc62').checked){z6 = 6;z9 = 10;}
                    if (document.querySelector('#etc72').checked){z6 = 7;z9 = 20;}
                    if (document.querySelector('#etc82').checked){z6 = 8;z9 = 4;}
                    if (document.querySelector('#etc92').checked){z6 = 9;z9 = 14;}
                    
                    Penalty(z9);
                    
                    var z1 = document.getElementById("min2").value;
                    var z2 = document.getElementById("sec2").value;
                    var z3 = document.getElementById("prtk2").value;
                    var z5 = document.getElementById("checker2").value;
                    var z7 = document.getElementById("pas12").value;
                    var z8 = document.getElementById("pas22").value;
                    var l=0;
                    while (l<60){
                        if (document.getElementById("button" + l).style.backgroundColor == a) {
                        z4 = identifiers[l];
                        document.getElementById("button" + l).style.backgroundColor = b;
                        }
                        l++;
                    }
                        $.ajax({
                            type: "POST", //Метод отправки
                            url: "iceApp/ajax_review.php", //путь до php фаила отправителя
                            data: {
                                min: z1,
                                sec: z2,
                                prtk: z3,
                                idg: z4,
                                checker: z5,
                                etc: z6,
                                pas1: z7,
                                qrtr: quarter,
                                ztime: ztime,
                                pas2: z8
                            },
                                success: function(data) {
                                 $('#myModalBoxREVIEWP').modal('hide'); }
                            });
                    document.querySelector('#etc12').checked = false;
                    document.querySelector('#etc22').checked = false;
                    document.querySelector('#etc32').checked = false;
                    document.querySelector('#etc42').checked = false;
                    document.querySelector('#etc52').checked = false;
                    document.querySelector('#etc62').checked = false;
                    document.querySelector('#etc72').checked = false;
                    document.querySelector('#etc82').checked = false;
                    document.getElementById("min2").value = '';
                    document.getElementById("sec2").value = '';
                    
                    document.getElementById("pas12").value = '';
                    document.getElementById("pas22").value = '';
                        }); 
                // GG WP FUNCTION ----------------------------------------
                $("#gameover1").click(function() {
                    $.ajax({
                        url: 'iceApp/ajax.php',
                        type: 'POST',
                        data: {
                            scoreone: score1,
                            scoretwo: score2,
                            shotsone: shots1,
                            shotstwo: shots2,
                            faceoffone: noVBRHome,
                            faceofftwo: noVBRAWAY,
                            penaltyone: BanHome,
                            penaltytwo: BanAWAY,
                            goals: PlayerGoal,
                            assists: PlayerPas,
                            shots: PlayerShot,
                            faceoff: PlayerFaceoff,
                            penalty: PlayerPenalty,
                            goalhome: g1,
                            goalaway: g2,
                            shothome: s1,
                            shotaway: s2,
                            bshot1: bs1,
                            bshot2: bs2,
                            faceoff1home: f1,
                            faceoff2away: f2,
                            penalty1home: p1,
                            penalty2away: p2,
                            facelost: PlayerFLost,
                            blocked: PlayerBlocked,
                            block1: bshots1,
                            block2: bshots2,
                            identy: identifiers,
                            prtk: protokol,
                            gplay: gpl,
                            ht: team1,
                            at: team2,
                            gwin: idgwin,
                            lostgoal: lostG,
                            allshot: allShot,
                            cup: cup1
                        },
                        success: function(data) {
                        }
                    });
                });

    </script>  
</body>
    <!--Запрос на коректное закрытие-->
<script type="text/javascript">
  window.onbeforeunload = function() {
    return "Вы действительно хотите выйти ? ";
  }
</script>
<!--Запрос на коректное закрытие end-->
</html>