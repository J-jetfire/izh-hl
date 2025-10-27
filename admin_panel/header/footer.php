<div class="row" style="height:50px;width:100%;">
        
</div>
     <br><br>
          <div class="row" id="footer">
            <div class="col-xs-2 col-md-offset-1"> 
               <a href="/index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="col-xs-9 text-left"> 
               <h3 style="color:white;font-size:15px;line-height:1.4;margin-top:0;">ОФИЦИАЛЬНЫЙ ИНФОРМАЦИОННЫЙ ПОРТАЛ</h3>
               <h4 style="margin-top:10px;color:white;font-size:13px;">Все права защищены | ИХЛ © 2020</h4>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){ 
$("#chnglg").on('change', function() {
    var selected = $(this).val();
     $.ajax({
       type: "POST", //Метод отправки
       url: "header/leagueupdate.php", //путь до php фаила отправителя
       data: {
          id_l: selected
       },
           success: function(data) {
               location.reload();
            }
       });
    
});
});
</script>