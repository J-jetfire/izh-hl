<!-- HEADER WITH SETUP PRE-MATCH ***need to require /file.php*** -->
    <section id="title">
        <div class="container" style="margin:10px 4% 10px 4%;padding:0;width:92%;">
            <div class="row">
                <div class="col-xs-4 text-left">
                    <label id="label_league"><h3><?=$league?><br><?=$part?><br><?=$season?></h3></label>
                </div>
                <div class="col-xs-4 text-center">
                 <div class="row" style="padding:0;margin:0;"></div>
                  <div class="col-xs-4 text-right" style="padding:0;"><h5>Прямой отсчёт</h5></div>
                  <div class="col-xs-4" style="padding:0;">
                         <p class="btn-switch">					
                          <input type="radio" checked id="yes" name="switch" class="btn-switch__radio btn-switch__radio_yes" />
                          <input type="radio" id="no" name="switch" class="btn-switch__radio btn-switch__radio_no" />		
                          <label for="yes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><= </span></label>								  <label for="no" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">=></span></label>
                          </p>
                          </div>
                  <div class="col-xs-4 text-left" style="padding:0;"><h5>Обратный отсчёт</h5></div>
                      
                </div>
                <div class="col-xs-4 text-right">
                    <label id="date"><h3><?=$time?> | <?=date("d.m.Y",strtotime($datematch))?> </h3></label>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-xs-5 text-right" style="padding:0;">
                    <label id="labelteam1"><h2 style="margin-top:0;">ХК "<?=$hometeam?>"</h2></label> <br>
                    <button data-toggle="modal" id="sostav_1" href="#myModalBoxEX">Изменить номер игроку</button>
                    <button style="margin-right:60px;" data-toggle="modal" id="sostav_1" href="#myModalBox">Состав команды Хозяев</button>
                </div>
                <div class="col-xs-2 text-center" style="padding:0;">
                    <h2 style="margin:10px 0 0 0;"><label id="labelscore" style="font-size:36px;">0:0</label></h2>
                </div>
                <div class="col-xs-5 text-left" style="padding:0;">
                    <label id="labelteam1"><h2 style="margin-top:0;">ХК "<?=$awayteam?>"</h2></label>
                    <br>
                    <button style="margin-left:60px;" data-toggle="modal" id="sostav_1" href="#myModalBox2">Состав команды Гостей</button>
                    <button data-toggle="modal" id="sostav_1" href="#myModalBoxEX2">Изменить номер игроку</button>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER WITH SETUP PRE-MATCH -->