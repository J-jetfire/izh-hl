<div class="col-xs-9 text-left" style="margin:0;padding:0;left:0;"></div>
<div class="col-xs-3 text-right" style="margin:0;padding:0;">
    <div class="row">
        <a title="Группа VK" target="_blank" href="https://vk.com/" style="margin:0 15px 0 0;"><img src="img/svg/vk.png" alt="" style="height:20px;"></a>
       <a title="Канал на YouTube" target="_blank" href="https://www.youtube.com/" style="margin:0 15px 0 0;"><img src="img/svg/youtube.png" alt=""></a>
       <a title="Страница Instagram" target="_blank" href="https://www.instagram.com/" style="margin:0 40px 0 0;"><img src="img/svg/inst.png" alt="" style="height:26px;"></a>
       <a title="Войти в аккаунт" class="open" href="#"><img src="img/svg/login.png" alt=""></a>
    </div>
    <div class="row">
       <div class="mover">
        <div class="row" style="height:30px;text-align:right;">
            <div class="col-xs-8 text-left" style="margin:0;padding:0;"><h4 style="margin:5px 0 0 20px;">| <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Авторизация';?></h4></div>
            <div class="col-xs-4" style="margin:0;padding:0;">
            <a title="Войти в аккаунт" class="closeds" href="#"><img src="img/svg/login.png" alt="" style="height:26px;width:auto;margin:0 25px 0 0;"></a>
            </div>
        </div>
        <div class="row login_row">
         
         <?php
			
			if(!$_SESSION['id']):
			
			?>
         
          <form class="clearfix" action="" method="post" style="margin:0;padding:0;">
          
            <?php
				if($_SESSION['msg']['login-err'])
					{
						//echo '<div class="err">'.$_SESSION['msg']['login-err'].'</div>';
						unset($_SESSION['msg']['login-err']);
					}
			?>
         <div class="row" style="margin:0;padding:0;">
          <div class="col-xs-4 text-right" style="margin:0;padding:0;">
              <label>Логин:</label><br>
              <label>Пароль:</label>
          </div>
          <div class="col-xs-8" style="margin:0;padding:0;">
              <input type="text" name="username" id="username" placeholder=" Введите логин" class="login-place" value="" size="23" required><br>
              <input type="password" placeholder=" Введите пароль" class="login-place" name="password" id="password" size="23" required>
          </div>
         </div>
        <div class="row" style="margin:0;padding:0;text-align:center;">
            <label>Запомнить меня</label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1">
           <br>
           <input type="submit" name="submit" value="Login" class="login-btn">
        </div>   
           
           </form>
                       
            <?php
			
			else:
			
			?>
            <h5 style="margin:10px 0 10px 0;text-align:center;">
            <?php 
                if ($_SESSION['usr']=='superadmin_18ihl') { echo 'Хоккейная Нация'; } 
                else if ($_SESSION['usr']=='admin_18ihl') { echo 'Администратор Лиги'; }
                else { echo 'Статист'; }
            ?></h5>
            <?php if ($_SESSION['usr']=='superadmin_18ihl' || $_SESSION['usr']=='admin_18ihl') { ?> 
                 <a href="admin_panel/index.php"><button type="button" class="btn"><h5>Панель администратора</h5></button></a>
            <?php } ?>
            <?php if ($_SESSION['usr']=='statist') { ?> 
                 <a href="admin_panel/index.php"><button type="button" class="btn"><h5>Панель статиста</h5></button></a>
            <?php } ?>
           
            <a href="?logoff"><button type="button" class="btn"><h5>Выйти</h5></button></a>
            <?php
			endif;
			?>
           
           </div>
       </div>
    </div>
</div>