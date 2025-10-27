<?php 

$prtk = $_POST['protokolnum'];

include_once "../protokolshn17/GAME_INFO_".$prtk.".php";

$ids = $_POST['identy'];
//----------------- ДАННЫЕ МАТЧА --------------------------------
$scorehome = $_POST['scoreone']; // счет хозяев
$scoreaway = $_POST['scoretwo']; // счет гостей

$shotshome = $_POST['shotsone']; // броски хозяев
$shotsaway = $_POST['shotstwo']; // броски гостей
    
$faceoffhome = $_POST['faceoffone']; // вбрасывания хозяев
$faceoffaway = $_POST['faceofftwo']; // вбрасывания гостей
    
$penaltyhome = $_POST['penaltyone']; // штрафы хозяев
$penaltyaway = $_POST['penaltytwo']; // штрафы гостей

//---------------------- ДАННЫЕ ИГРОКОВ --------------------------

$playergoal = $_POST['goals']; // голы игроков
$playerpas = $_POST['assists']; // пасы игроков
$playershot = $_POST['shots']; // броски по воротам игроков
$playerfaceoff = $_POST['faceoff']; // выигранные вбрасывания игроков
$playersfflost = $_POST['facelost']; //проигранные вбр игр-в.
$playerpenalty = $_POST['penalty']; // штрафы игроков

//-------------------- ДАННЫЕ ПО ПЕРИОДАМ --------------------------
$ghome = $_POST['goalhome']; // голы по периодам хозяев
$gaway = $_POST['goalaway']; // голы по периодам гостей
$shome = $_POST['shothome']; // бв по периодам хозяев
$saway = $_POST['shotaway']; // бв по периодам гостей
$fhome = $_POST['faceoff1home']; // вбр по периодам хозяев
$faway = $_POST['faceoff2away']; // вбр по периодам гостей
$phome = $_POST['penalty1home']; // штрафы по периодам хозяев
$paway = $_POST['penalty2away']; // штрафы по периодам гостей
//-----------------------------------------------------------------
$resultmatch = $scorehome.":".$scoreaway;
//--------------- ВЫВОД ЧЕРЕЗ БРАУЗЕР -----------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hockeynation";

$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($con, $dbname);

foreach ($ids as $key => $id) {
   $con->query("UPDATE players SET goal = goal+'$playergoal[$key]', assist = assist+'$playerpas[$key]', point = goal+assist, shot = shot+'$playershot[$key]', wfaceoff = wfaceoff+'$playerfaceoff[$key]', lfaceoff = lfaceoff+'$playersfflost[$key]', penalty = penalty+'$playerpenalty[$key]' WHERE id = '$ids[$key]' " );
}
//   $con->query("UPDATE players SET goal = '5' WHERE id = '10' ");

$con->query("UPDATE `$calendar` SET home1g='$ghome[0]', home2g='$ghome[1]', home3g='$ghome[2]', homeg='$scorehome', home1s='$shome[0]', home2s='$shome[1]', home3s='$shome[2]', homes='$shotshome', home1f='$fhome[0]', home2f='$fhome[1]', home3f='$fhome[2]', homef='$faceoffhome', home1p='$phome[0]', home2p='$phome[1]', home3p='$phome[2]', homep='$penaltyhome', away1g='$gaway[0]', away2g='$gaway[1]', away3g='$gaway[2]', awayg='$scoreaway', away1s='$saway[0]', away2s='$saway[1]', away3s='$saway[2]', aways='$shotsaway', away1f='$faway[0]', away2f='$faway[1]', away3f='$faway[2]', awayf='$faceoffaway', away1p='$paway[0]', away2p='$paway[1]', away3p='$paway[2]', awayp='$penaltyaway', result='$resultmatch' WHERE date = '$matchdate' AND home ='$hometeam' AND away='$awayteam' AND time='$matchtime' ");

if ($con->connect_error) {
    die("Connection failed:" .$con->connect_error);
}
echo "Connection successfull  ";

$con->close();
echo "and  Connection closed";


?>