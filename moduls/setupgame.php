<!-- HEADER WITH SETUP PRE-MATCH ***need to require /file.php*** -->
    <section id="title">
        <div class="container" style="margin:10px 4% 10px 4%;padding:0;width:92%;">
            <div class="row">
                <div class="col-xs-4 text-left">
                   <?php $league = 'Белые ночи';
                         $season = '2018'; ?>
                    <label id="label_league"><h3><?=$league?> <?=$season?></h3></label>
                </div>
                <div class="col-xs-4 text-center">
                 <div class="row" style="padding:0;margin:0;">Отсчёт времени на табло</div>
                  <div class="col-xs-4 text-right" style="padding:0;"><h5>Прямой</h5></div>
                  <div class="col-xs-4" style="padding:0;">
                         <p class="btn-switch">					
                          <input type="radio" id="yes" name="switch" class="btn-switch__radio btn-switch__radio_yes" />
                          <input type="radio" checked id="no" name="switch" class="btn-switch__radio btn-switch__radio_no" />		
                          <label for="yes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><= </span></label>								  <label for="no" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">=></span></label>
                          </p>
                          </div>
                  <div class="col-xs-4 text-left" style="padding:0;"><h5>Обратный</h5></div>
                      
                </div>
                <div class="col-xs-4 text-right">
                    <label id="date"><h3><?=$time?> / <?=$datematch?> </h3></label>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-xs-5 text-right" style="padding:0;">
                    <label id="labelteam1"><h2>ХК "<?=$hometeam?>"</h2></label> <br>
                    <button data-toggle="modal" id="sostav_1" href="#myModalBoxEX">Изменить номер игроку</button>
                    <button data-toggle="modal" id="sostav_1" href="#myModalBox">Состав команды Хозяев на матч</button>
                </div>
                <div class="col-xs-2 text-center" style="padding:0;">
                    <h2><label id="labelscore">0:0</label></h2>
                </div>
                <div class="col-xs-5 text-left" style="padding:0;">
                    <label id="labelteam1"><h2>ХК "<?=$awayteam?>"</h2></label>
                    <br>
                    <button data-toggle="modal" id="sostav_1" href="#myModalBox2">Состав команды Гостей на матч</button>
                    <button data-toggle="modal" id="sostav_1" href="#myModalBoxEX2">Изменить номер игроку</button>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER WITH SETUP PRE-MATCH -->