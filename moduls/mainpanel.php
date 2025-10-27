<!-- PANEL WITH BUTTONS OF CONTROL & PLAYERS -->
    <section id="mainpanel">
        <div class="row" style="margin:0;padding:0;">
            <div class="col-xs-4 text-center" style="margin:0;padding:0;">
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
                       
<form action="fastaddplayer.php" method=post>
                <table id="table_newplayer" style="width:300px;">
                   <tr>
                    <td nowrap><input type='text' size=5 name='number1' value="" placeholder="№"></td>
                    <td nowrap><input type='text' size=5 name='pos1' value="" placeholder="Поз"></td>
                    <td nowrap><input type='text' name='sname1' value="" placeholder="Фамилия"></td>
                    <td nowrap><input type='text' name='name1' value="" placeholder="Имя"></td>
                    <td nowrap><input type="submit" value="Добавить" class=""> </td>
               <td nowrap style="display:none;"> <input type="hidden" name=prtk value="<?=$prtk?>"> </td>
               <td nowrap style="display:none;"> <input type="hidden" name=team value="<?=$hometeam?>"> </td>
                   </tr>
                </table>
</form>
                   
                    </div>
                </div>
                <!--knopki home-->
            </div>

            <div class="col-xs-4 text-center" style="margin:0;padding:0;">
                <div class="row" id="buttons">
                    <input type="button" value="БВ" id="team" onclick=shot()>
                    <input type="button" value="ЗБ" id="team" onclick=bshot()>
                </div>
                <div class="row" id="buttons">
                    <input type="button" value="ГОЛ" id="teamshot" data-toggle="modal" data-target="#myModalBoxREVIEWG">
                </div>
                <div class="row" id="buttons">
                    <input type="button" value="◀ Вбр" id="team" onclick=VBR(true)>
                    <input type="button" value="Вбр ▶ " id="team" onclick=VBR(false)>
                </div>
                <div class="row" id="buttons">
                    <input type="button" value="Штраф" id="team" data-toggle="modal" data-target="#myModalBoxREVIEWP">
                    <input type="button" value="ВР / ТА" id="team" data-toggle="modal" data-target="#myModalBoxREVIEWT">
                </div>
                <div class="row" id="buttons">
                   <hr>
                    <input type="button" value="1 пер." id="teampenalty" onclick=period(1)>
                    <input type="button" value="2 пер." id="teampenalty" onclick=period(2)> 
                    <input type="button" value="3 пер." id="teampenalty" onclick=period(3)><br>
                    <input type="button" value="ОТ" id="teampenalty" onclick=period(4)>
                    <input type="button" value="Бул." id="teampenalty" onclick=period(5)>
                </div>

            </div>
            <div class="col-xs-4 text-center" style="margin:0;padding:0;">
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
                       <form action="fastaddplayer.php" method=post>
                <table id="table_newplayer" style="width:300px;">
                   <tr>
                    <td nowrap><input type='text' size=5 name='number1' value="" placeholder="№"></td>
                    <td nowrap><input type='text' size=5 name='pos1' value="" placeholder="Поз"></td>
                    <td nowrap><input type='text' name='sname1' value="" placeholder="Фамилия"></td>
                    <td nowrap><input type='text' name='name1' value="" placeholder="Имя"></td>
                    <td nowrap><input type="submit" value="Добавить" class=""> </td>
               <td nowrap style="display:none;"> <input type="hidden" name=prtk value="<?=$prtk?>"> </td>
               <td nowrap style="display:none;"> <input type="hidden" name=team value="<?=$awayteam?>"> </td>
                   </tr>
                </table>
</form>
                       <br>
                        <h5>РЕДАКТИРОВАНИЕ / ОТМЕНА СТАТИСТИКИ</h5>
                    </div>
                </div>
                <!--knopki away-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <label id="label_period"> Статистика периода </label> <br>
                <label id="label_period_end"> Стат. матча </label>
            </div>
            <div class="col-md-4 text-center">
                <div class="row">
                    <input type="button" value="Матч окончен" id="gameover" onclick=period(6) data-toggle="modal" data-target="#myModalBoxEXIT">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <!--knopki reset-->
                <div class="row">
                    <input type="button" value="-БВ" id="resetstat" onclick=NoShot()>
                    <input type="button" value="-Гол" id="resetstat" onclick=NoGoal()>
                    <input type="button" value="-Пас" id="resetstat" onclick=NoPas()>
                    <input type="button" value="◀ Вбр" id="resetstat" onclick=NoVBRALL(true)>
                    <input type="button" value="Вбр ▶" id="resetstat" onclick=NoVBRALL(false)>
                    <br>
                    <input type="button" value="-ЗБ" id="resetstat" onclick=nobshot()>
                    <input type="button" value="-Вбр" id="resetstat" onclick=NoVBR(true)>
                    <input type="button" value="-ПВбр" id="resetstat" onclick=NoVBR(false)>
                    <input type="button" value="-2м." id="resetstat" onclick=NoPenalty(2)>
                    <input type="button" value="-5м." id="resetstat" onclick=NoPenalty(5)>
                </div>
            </div>
        </div>
    </section>
    <!-- PANEL WITH BUTTONS OF CONTROL & PLAYERS -->