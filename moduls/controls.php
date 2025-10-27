    <!-- MODAL WITH GOAL DATA -->
    <div id="myModalBoxREVIEWG" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Подтверждение данных</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="row text-center">
                        <form name="addreview" id="addreview" action="">
                            <table id="table_changenum" style="height:200px;width:500px">
                                <tbody>
                                    <tr>
                                        <td colspan="4"> ГОЛ </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">МИНУТ</td>
                                        <td colspan="2"><input type=text id=min name=min value='' size="5" required="required"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">СЕКУНД</td>
                                        <td colspan="2"><input type=text id=sec name=sec value='' size="5" required="required"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">1-ый ПАС</td>
                                        <td colspan="2"><input type=text id=pas1 name=pas1 value='' size="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">2-ой ПАС</td>
                                        <td colspan="2"><input type=text id=pas2 name=pas2 value='' size="5"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="etcet" id=etc1 value=1><label for="etc1"class="goalstate" required="required">Равн.</label></td>
                                        <td><input type="radio" name="etcet" id=etc2 value=2><label for="etc2"class="goalstate" required="required">Бол.</label></td>
                                        <td><input type="radio" name="etcet" id=etc3 value=3><label for="etc3"class="goalstate" required="required">Мен.</label></td>
                                        <td><input type="radio" name="etcet" id=etc4 value=4><label for="etc4"class="goalstate" required="required">ENet</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="radio" name="etcet" id=etc5 value=5><label for="etc5"class="goalstate" required="required">Буллит</label></td>
                                        <td colspan="1"><input type="radio" name="etcet" id=etc6 value=6><label for="etc6"class="goalstate" required="required">6х5</label></td>
                                        <td colspan="1"><input type="radio" name="etcet" id=etc7 value=7><label for="etc7"class="goalstate" required="required">5х6</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><input type="button" class="closemod"  value="ЗАСЧИТАТЬ" id="addreviewbut"></td>
                                    </tr>
                                </tbody>
                            </table>
                          
                            <input type="hidden" value=<?=$prtk?> id=prtk name=prtk>
                            <input type="hidden" id=checker name=checker value=1>
                             
                            
                        </form>
                    </div>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                <button type="button" class="closemod" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div> 
    <!-- MODAL WITH GOAL DATA -->
       
       
    <!-- MODAL WITH PENALTY DATA -->
    <div id="myModalBoxREVIEWP" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Подтверждение данных</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="row text-center">
                        <form name="addreview2" id="addreview2" action="">
                            <table id="table_changenum" style="height:200px;width:500px">
                                <tbody>
                                    <tr>
                                        <td colspan="5"> УДАЛЕНИЕ </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">МИНУТ</td>
                                        <td colspan="2"><input type=text id=min2 name=min value='' size="5" required="required"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">СЕКУНД</td>
                                        <td colspan="2"><input type=text id=sec2 name=sec value='' size="5" required="required"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">УКАЖИТЕ НАРУШЕНИЕ</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><select name="pas12" id="pas12" required="required">
                               <option value=""></option>
                               <option value="Атака в область головы и шеи">Атака в область головы и шеи</option>
                               <option value="Атака вратаря">Атака вратаря</option>
                               <option value="Атака игрока не владеющего шайбой">Атака игрока не владеющего шайбой</option>
                               <option value="Атака соперника сзади">Атака соперника сзади</option>
                               <option value="Бросок клюшки">Бросок клюшки</option>
                               <option value="Грубость">Грубость</option>
                               <option value="Дисциплинарный штраф">Дисциплинарный штраф</option>
                               <option value="Драка">Драка</option>
                               <option value="Задержка игры">Задержка игры</option>
                               <option value="Задержка руками клюшки соперника">Задержка руками клюшки соперника</option>
                               <option value="Задержка соперника клюшкой">Задержка соперника клюшкой</option>
                               <option value="Задержка соперника руками">Задержка соперника руками</option>
                               <option value="Задержка шайбы руками">Задержка шайбы руками</option>
                               <option value="Игра высоко поднятой клюшкой">Игра высоко поднятой клюшкой</option>
                               <option value="Колющий удар">Колющий удар</option>
                               <option value="Нарушение численного состава">Нарушение численного состава</option>
                               <option value="Неправильная атака">Неправильная атака</option>
                                <option value="Неспортивное поведение">Неспортивное поведение</option>
                                <option value="Отсечение">Отсечение</option>
                               <option value="Подножка">Подножка</option>
                               <option value="Сдвиг ворот">Сдвиг ворот</option>
                               <option value="Толчок клюшкой">Толчок клюшкой</option>
                               <option value="Толчок соперника на борт">Толчок соперника на борт</option>
                                <option value="Удар головой">Удар головой</option>
                               <option value="Удар клюшкой">Удар клюшкой</option>
                               <option value="Удар коленом">Удар коленом</option>
                               <option value="Удар локтем">Удар локтем</option>
                               <option value="Удар ногой">Удар ногой</option>
                               <option value="Умышленный выброс шайбы">Умышленный выброс шайбы</option>  
                           </select></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="etcet" id=etc12 value=1><label for="etc12"class="goalstate">2 мин</label></td>
                                        <td><input type="radio" name="etcet" id=etc22 value=2><label for="etc22"class="goalstate">4 мин</label></td>
                                        <td><input type="radio" name="etcet" id=etc32 value=3><label for="etc32"class="goalstate">5 мин</label></td>
                                        <td><input type="radio" name="etcet" id=etc42 value=4><label for="etc42"class="goalstate">2+10</label></td>
                                        <td><input type="radio" name="etcet" id=etc52 value=5><label for="etc52"class="goalstate">5+20</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="radio" name="etcet" id=etc62 value=6><label for="etc62"class="goalstate" required="required">10</label></td>
                            
                                        <td colspan="2"><input type="radio" name="etcet" id=etc72 value=7><label for="etc72"class="goalstate" required="required">20</label></td>
                                        
                                        <td colspan="1"><input type="radio" name="etcet" id=etc82 value=8><label for="etc82"class="goalstate" required="required">2+2</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><input type="button" class="closemod"  value="ЗАСЧИТАТЬ" id="addreviewbut2"></td>
                                    </tr>
                                    
                                    </tbody>
                                    </table>
                                    
                           
                            <input type=hidden id=pas22 name=pas2 value=''>
                            <br>
                            <input type="hidden" value=<?=$prtk?> id=prtk2  name=prtk>
                            <input type="hidden" id=checker2 name=checker value=2>
                             
                        </form>
                    </div>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                <button type="button" class="closemod" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL WITH PENALTY DATA -->
    
    
    <!-- MODAL WITH GOALIE / TIME-OUT -->
    <div id="myModalBoxREVIEWT" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Вратари / Тайм-аут</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="row text-center">
                        <form name="addreview" id="addreview" action="">
                            <table id="table_changenum" style="height:200px;width:500px">
                                <tbody>
                                    <tr>
                                        <td colspan="4"> Смена вратаря / Тайм-аут </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">МИНУТ</td>
                                        <td colspan="2"><input type=text id=min3 name=min value='' size="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">СЕКУНД</td>
                                        <td colspan="2"><input type=text id=sec3 name=sec value='' size="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">◀ ХОЗЯЕВА</td>
                                        <td colspan="2">ГОСТИ ▶</td>
                                    </tr>
                                    <tr>
                                        <td><input type="button" class="closemod"  value="СМЕНА" id="gchange1"></td>
                                        <td><input type="button" class="closemod"  value="Т.аут" id="timeout1"></td>
                                        <td><input type="button" class="closemod"  value="СМЕНА" id="gchange2"></td>
                                        <td><input type="button" class="closemod"  value="Т.аут" id="timeout2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                <button type="button" class="closemod" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div> 
    <!-- MODAL WITH GOALIE / TIME-OUT -->