<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once 'header/metastyle_app.php'; ?>
    <title>Плюс/минус игроков</title>
    <script type="text/javascript" href="webapppm.js" src="webapppm.js"></script>
    
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
//====================== ENTER MATCH DATA HERE (up)   
    ?>
    <script>
        var protokol = <?=$prtk?>;
        var cup1 = "<?=$cup?>";
        var team1 = "<?=$hometeam?>";
        var team2 = "<?=$awayteam?>";
    </script>
</head>

<body>

    <section id="title">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <label id="label_league"><h3><?=$league?> <?=$season?></h3></label>
                </div>
                <div class="col-sm-6 text-right">
                    <label id="date"><h3><?=$time?> / <?=$datematch?> </h3></label>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-5 text-right">
                    <label id="labelteam1"><h2>ХК "<?=$hometeam?>"</h2></label> <br>
                </div>
                <div class="col-sm-2 text-center">
                    <label id="labelscore"><h2>0:0</h2></label>
                </div>
                <div class="col-sm-5 text-left">
                    <label id="labelteam1"><h2>ХК "<?=$awayteam?>"</h2></label>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <section id="mainpanel">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="row" id="buttons">
                    <div class="row" id="buttons_row">
                        <input type="button" id="button0" value="1" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button1" value="2" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button2" value="3" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button3" value="4" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button4" value="5" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button5" value="6" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button6" value="7" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button7" value="8" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button8" value="9" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button9" value="10" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button10" value="11" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button11" value="12" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button12" value="13" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button13" value="14" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button14" value="15" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button15" value="16" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button16" value="17" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button17" value="18" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button18" value="19" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button19" value="20" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button20" value="21" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button21" value="22" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button22" value="23" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button23" value="24" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button24" value="25" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button25" value="26" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button26" value="27" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button27" value="28" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button28" value="29" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button29" value="30" class="button_normal" onclick=colorbutton(this)>
                    </div>

                    <div class="row" id="buttons">
                        <input type="button" value="Смена" id="reset" onclick=resetColor1()>
                    </div>
                </div>
                <!--knopki home-->
            </div>

            <div class="col-md-4 text-center">
                <div class="row" id="buttons">
                    <input type="button" value="Гол Хозяева" id="teamshot" onclick=plushome()>
                </div>
                <div class="row" id="buttons">
                     <input type="button" value="Гол Гости" id="teamshot" onclick=plusaway()>
                </div>
                <div class="row" id="buttons">
                    <input type="button" value="+" id="team" onclick=plus()>
                    <input type="button" value="-" id="team" onclick=minus()>
                </div>
                <div class="row" id="buttons">
                <input type="button" value="END" id="gameoverpm" data-toggle="modal" data-target="#myModalBoxEXIT">
                </div>
                <div class="row" id="buttons">
                <br>
                <input type="button" value="- Гол хозяева" id="reset" onclick=goal(true)>
                <input type="button" value="- Гол гости" id="reset" onclick=goal(false)>
                </div>
            </div>
            <!--knopki center-->

            <div class="col-md-4 text-center">
                <div class="row" id="buttons">
                    <div class="row" id="buttons_row">
                        <input type="button" id="button30" value="31" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button31" value="32" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button32" value="33" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button33" value="34" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button34" value="35" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button35" value="36" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button36" value="37" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button37" value="38" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button38" value="39" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button39" value="40" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button40" value="41" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button41" value="42" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button42" value="43" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button43" value="44" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button44" value="45" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button45" value="46" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button46" value="47" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button47" value="48" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button48" value="49" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button49" value="50" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button50" value="51" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button51" value="52" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button52" value="53" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button53" value="54" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button54" value="55" class="button_normal" onclick=colorbutton(this)>
                    </div>
                    <div class="row" id="buttons_row">
                        <input type="button" id="button55" value="56" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button56" value="57" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button57" value="58" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button58" value="59" class="button_normal" onclick=colorbutton(this)>
                        <input type="button" id="button59" value="60" class="button_normal" onclick=colorbutton(this)>
                    </div>

                    <div class="row" id="buttons">
                        <input type="button" value="Смена" id="reset" onclick=resetColor2()>
                    </div>
                </div>
                <!--knopki away-->
            </div>
        </div>
    </section>

<!-- Modal 1 -->
    <div id="myModalBox" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Отметьте состав команды Хозяев на этот матч</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">

                    <form action="#">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <p><input type="checkbox" id="option1" value="a31"> <label for="option1" id="lab0"> </label> <br>
                                    <input type="checkbox" id="option2" value="a32"> <label for="option2" id="lab1"> </label> <br>
                                    <input type="checkbox" id="option3" value="a33"> <label for="option3" id="lab2"></label> <br>
                                    <input type="checkbox" id="option4" value="a34"> <label for="option4" id="lab3"></label> <br>
                                    <input type="checkbox" id="option5" value="a35"> <label for="option5" id="lab4"></label> <br>
                                    <input type="checkbox" id="option6" value="a36"> <label for="option6" id="lab5"></label> <br>
                                    <input type="checkbox" id="option7" value="a37"> <label for="option7" id="lab6"></label> <br>
                                    <input type="checkbox" id="option8" value="a38"> <label for="option8" id="lab7"></label> <br>
                                    <input type="checkbox" id="option9" value="a39"> <label for="option9" id="lab8"></label> <br>
                                    <input type="checkbox" id="option10" value="a40"> <label for="option10" id="lab9"></label> <br></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p><input type="checkbox" id="option11" value="a41"> <label for="option11" id="lab10"> </label> <br>
                                    <input type="checkbox" id="option12" value="a42"> <label for="option12" id="lab11"> </label> <br>
                                    <input type="checkbox" id="option13" value="a43"> <label for="option13" id="lab12"></label> <br>
                                    <input type="checkbox" id="option14" value="a44"> <label for="option14" id="lab13"></label> <br>
                                    <input type="checkbox" id="option15" value="a45"> <label for="option15" id="lab14"></label> <br>
                                    <input type="checkbox" id="option16" value="a46"> <label for="option16" id="lab15"></label> <br>
                                    <input type="checkbox" id="option17" value="a47"> <label for="option17" id="lab16"></label> <br>
                                    <input type="checkbox" id="option18" value="a48"> <label for="option18" id="lab17"></label> <br>
                                    <input type="checkbox" id="option19" value="a49"> <label for="option19" id="lab18"></label> <br>
                                    <input type="checkbox" id="option20" value="a50"> <label for="option20" id="lab19"></label> <br></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p><input type="checkbox" id="option21" value="a51"> <label for="option21" id="lab20"> </label> <br>
                                    <input type="checkbox" id="option22" value="a52"> <label for="option22" id="lab21"> </label> <br>
                                    <input type="checkbox" id="option23" value="a53"> <label for="option23" id="lab22"></label> <br>
                                    <input type="checkbox" id="option24" value="a54"> <label for="option24" id="lab23"></label> <br>
                                    <input type="checkbox" id="option25" value="a55"> <label for="option25" id="lab24"></label> <br>
                                    <input type="checkbox" id="option26" value="a56"> <label for="option26" id="lab25"></label> <br>
                                    <input type="checkbox" id="option27" value="a57"> <label for="option27" id="lab26"></label> <br>
                                    <input type="checkbox" id="option28" value="a58"> <label for="option28" id="lab27"></label> <br>
                                    <input type="checkbox" id="option29" value="a59"> <label for="option29" id="lab28"></label> <br>
                                    <input type="checkbox" id="option30" value="a60"> <label for="option30" id="lab29"></label> <br></p>

                            </div>
                        </div>
                    </form>


                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModalBox2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Отметьте состав команды Гостей на этот матч</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">

                    <form action="#">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <p><input type="checkbox" id="option31" value="a31"> <label for="option31" id="lab30"> </label> <br>
                                    <input type="checkbox" id="option32" value="a32"> <label for="option32" id="lab31"> </label> <br>
                                    <input type="checkbox" id="option33" value="a33"> <label for="option33" id="lab32"></label> <br>
                                    <input type="checkbox" id="option34" value="a34"> <label for="option34" id="lab33"></label> <br>
                                    <input type="checkbox" id="option35" value="a35"> <label for="option35" id="lab34"></label> <br>
                                    <input type="checkbox" id="option36" value="a36"> <label for="option36" id="lab35"></label> <br>
                                    <input type="checkbox" id="option37" value="a37"> <label for="option37" id="lab36"></label> <br>
                                    <input type="checkbox" id="option38" value="a38"> <label for="option38" id="lab37"></label> <br>
                                    <input type="checkbox" id="option39" value="a39"> <label for="option39" id="lab38"></label> <br>
                                    <input type="checkbox" id="option40" value="a40"> <label for="option40" id="lab39"></label> <br></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p><input type="checkbox" id="option41" value="a41"> <label for="option41" id="lab40"> </label> <br>
                                    <input type="checkbox" id="option42" value="a42"> <label for="option42" id="lab41"> </label> <br>
                                    <input type="checkbox" id="option43" value="a43"> <label for="option43" id="lab42"></label> <br>
                                    <input type="checkbox" id="option44" value="a44"> <label for="option44" id="lab43"></label> <br>
                                    <input type="checkbox" id="option45" value="a45"> <label for="option45" id="lab44"></label> <br>
                                    <input type="checkbox" id="option46" value="a46"> <label for="option46" id="lab45"></label> <br>
                                    <input type="checkbox" id="option47" value="a47"> <label for="option47" id="lab46"></label> <br>
                                    <input type="checkbox" id="option48" value="a48"> <label for="option48" id="lab47"></label> <br>
                                    <input type="checkbox" id="option49" value="a49"> <label for="option49" id="lab48"></label> <br>
                                    <input type="checkbox" id="option50" value="a50"> <label for="option50" id="lab49"></label> <br></p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p><input type="checkbox" id="option51" value="a51"> <label for="option51" id="lab50"> </label> <br>
                                    <input type="checkbox" id="option52" value="a52"> <label for="option52" id="lab51"> </label> <br>
                                    <input type="checkbox" id="option53" value="a53"> <label for="option53" id="lab52"></label> <br>
                                    <input type="checkbox" id="option54" value="a54"> <label for="option54" id="lab53"></label> <br>
                                    <input type="checkbox" id="option55" value="a55"> <label for="option55" id="lab54"></label> <br>
                                    <input type="checkbox" id="option56" value="a56"> <label for="option56" id="lab55"></label> <br>
                                    <input type="checkbox" id="option57" value="a57"> <label for="option57" id="lab56"></label> <br>
                                    <input type="checkbox" id="option58" value="a58"> <label for="option58" id="lab57"></label> <br>
                                    <input type="checkbox" id="option59" value="a59"> <label for="option59" id="lab58"></label> <br>
                                    <input type="checkbox" id="option60" value="a60"> <label for="option60" id="lab59"></label> <br></p>

                            </div>
                        </div>
                    </form>


                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    
    <div id="myModalBoxEXIT" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Подтверждение</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <h5>Вы уверены что хотите завершить матч и обновить статистику?</h5>
                    <button type="button" class="btn btn-primary" id="gameoverpm1" data-dismiss="modal">ДА</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">НЕТ</button>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    
<script>
  var identifiers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var playernames = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        var playersurnames = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        var strings1 = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ];
        var playernums = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var i = 0;

    </script>
    <?php 
        include_once 'iceApp/dbteams.php';
        while($row = mysqli_fetch_array($result_1, MYSQLI_ASSOC)){
        ?>
    <script>
        identifiers[i] = <?=$row['id']?>;
        playernums[i] = <?=$row['num']?>;
        playernames[i] = "<?=$row['name']?>";
        playersurnames[i] = "<?=$row['sname']?>";
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
        i++;
    </script>
    <?php 
        }
        ?>

    <script> // ИЗМЕНИТЬ НАЗВАНИЯ КНОПОК И ЧЕКБОКСОВ НА НОМЕРА ИГРОКОВ
        var q=0;
        while (q<60) {
    if (playernums[q] != 0) {
            //strings1[q] = "playernums[q]" + " " + playernames[q] + " " + playersurnames[q];
            $("#button"+q).val(playernums[q]);
            document.getElementById("lab" + q).innerHTML = playernums[q] + " " + playernames[q]+ " " + playersurnames[q];// playernums[q] + " " playernames[q] + " " + playersurnames[q];
            }
            else if (playernums[q] == 0){
                $("#button"+q).val(" ");
                //document.getElementById("#lab"+q).innerHTML = ' ';
            }
    //document.getElementById("lab"+q).innerHTML = playernames[q]+" "+playersurnames[q];
            q++;
        }
    </script>

   <?php require_once 'header/metastyle_end_app.php'; ?>
    <link rel="stylesheet" href="css/stylewebapp.css">
    <script type="text/javascript" href="webapppm.js" src="webapppm.js"></script>
<!-- Inclins (below), or include individual files as needasdasded -->
    <script type="text/javascript">
        $(document).ready(
            function() {
   // GG WP FUNCTION ----------------------------------------      
                
        $("#gameoverpm1").click(function () {
        $.ajax({
            url: 'ajaxpm.php',
            type: 'POST',
            data: {
                players: PlayerPM,
                identy: identifiers,
                protokolnum: protokol
            }
        });
    });
            }
        );

    </script>
</body>

</html>
