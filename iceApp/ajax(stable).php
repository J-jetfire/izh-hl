<?php 
$prtk = $_POST['prtk'];
$ids = $_POST['identy'];
$cup = $_POST['cup'];
$hometeam = $_POST['ht'];
$awayteam = $_POST['at'];

$idgwin = $_POST['gwin'];
//----------------- ДАННЫЕ МАТЧА --------------------------------
$scorehome = $_POST['scoreone']; // счет хозяев
$scoreaway = $_POST['scoretwo']; // счет гостей

$shotshome = $_POST['shotsone']; // броски хозяев
$shotsaway = $_POST['shotstwo']; // броски гостей

$bshotshome = $_POST['block1']; // Z броски хозяев
$bshotsaway = $_POST['block2']; // Z броски гостей

$faceoffhome = $_POST['faceoffone']; // вбрасывания хозяев
$faceoffaway = $_POST['faceofftwo']; // вбрасывания гостей
    
$penaltyhome = $_POST['penaltyone']; // штрафы хозяев
$penaltyaway = $_POST['penaltytwo']; // штрафы гостей

$gpl = $_POST['gplay'];
//---------------------- ДАННЫЕ ИГРОКОВ --------------------------

$playergoal = $_POST['goals']; // голы игроков
$playerpas = $_POST['assists']; // пасы игроков
$playershot = $_POST['shots']; // броски по воротам игроков
$playerfaceoff = $_POST['faceoff']; // выигранные вбрасывания игроков
$playersfflost = $_POST['facelost']; //проигранные вбр игр-в.
$playerpenalty = $_POST['penalty']; // штрафы игроков
$playerblocked = $_POST['blocked']; // blocked shots of players

$lostG = $_POST['lostgoal'];
$allshot = $_POST['allshot'];

//-------------------- ДАННЫЕ ПО ПЕРИОДАМ --------------------------
$ghome = $_POST['goalhome']; // голы по периодам хозяев
$gaway = $_POST['goalaway']; // голы по периодам гостей
$shome = $_POST['shothome']; // бв по периодам хозяев
$saway = $_POST['shotaway']; // бв по периодам гостей
$fhome = $_POST['faceoff1home']; // вбр по периодам хозяев
$faway = $_POST['faceoff2away']; // вбр по периодам гостей
$phome = $_POST['penalty1home']; // штрафы по периодам хозяев
$paway = $_POST['penalty2away']; // штрафы по периодам гостей

$bshome = $_POST['bshot1'];  // зб по периодам хозяев
$bsaway = $_POST['bshot2'];  // зб по периодам гостей
//-----------------------------------------------------------------

//--------------- ВЫВОД ЧЕРЕЗ БРАУЗЕР -----------------------
$protokol = "protokol_squad_".+$prtk;
$calendar = "calendardinamo17";

require_once 'header/connect.php';// connect to mysql
//============================================================================================================================

//============================================================================================================================
foreach ($ids as $key => $id) {
   $con->query("UPDATE players_playoff17 SET game = game+'$gpl[$key]', goal = goal+'$playergoal[$key]', assist = assist+'$playerpas[$key]', point = goal+assist, shot = shot+'$playershot[$key]', bshot=bshot+'$playerblocked[$key]', wfaceoff = wfaceoff+'$playerfaceoff[$key]', lfaceoff = lfaceoff+'$playersfflost[$key]', penalty = penalty+'$playerpenalty[$key]', lostgoal= lostgoal+'$lostG[$key]', allshot= allshot+'$allshot[$key]' WHERE id = '$ids[$key]' " );
   $con->query("UPDATE players_playoff17 SET shotperc=goal*100 / shot WHERE shot!='0' ");
   $con->query("UPDATE players_playoff17 SET faceoffperc=(wfaceoff*100 / (wfaceoff+lfaceoff)) WHERE (wfaceoff+lfaceoff)!='0' ");
   $con->query("UPDATE players_playoff17 SET KN=lostgoal / game WHERE pos='Вр' ");
   $con->query("UPDATE players_playoff17 SET refshot= 100-(lostgoal*100 / allshot) WHERE pos='Вр' AND allshot!='0'  ");
}

foreach ($ids as $key => $id) {
   $con->query("UPDATE `$protokol` SET goal = '$playergoal[$key]', assist = '$playerpas[$key]', point = '$playergoal[$key]'+'$playerpas[$key]', shot = '$playershot[$key]', bshot = '$playerblocked[$key]', wfaceoff = '$playerfaceoff[$key]', lfaceoff = '$playersfflost[$key]', penalty = '$playerpenalty[$key]', allshot='$allshot[$key]', lostgoal='$lostG[$key]' WHERE id = '$ids[$key]' " );
   $con->query("UPDATE `$protokol` SET refshot=100-(lostgoal*100 / allshot) WHERE id = '$ids[$key]' AND pos='Вр' AND allshot!='0'  " );
}

//=====================================================================

$cupcheck = "tabledinamo17pf";
//======
if ($scorehome > $scoreaway && $ghome[4]==0 && $ghome[3]==0) {
$con->query("UPDATE `$cupcheck` SET game=game+ '1', win=win+ '1', goal=goal+'$scorehome', lostgoal=lostgoal+'$scoreaway', point=point+ '3' WHERE team='$hometeam' ");
    
$con->query("UPDATE `$cupcheck` SET game=game+ '1', lost=lost+ '1', goal=goal+'$scoreaway', lostgoal=lostgoal+'$scorehome' WHERE team='$awayteam' ");
    
$resultmatch = $scorehome.":".$scoreaway;
}  //======================== ЕСЛИ ХОЗЯЕВА ВЫИГРАЛИ В ОСНОВНОЕ ВРЕМЯ =====================

if ($scorehome > $scoreaway && $ghome[4]==0 && $ghome[3]!=0) {
$con->query("UPDATE `$cupcheck` SET game=game+ '1', winO=winO+ '1', goal=goal+'$scorehome', lostgoal=lostgoal+'$scoreaway', point=point+ '2' WHERE team='$hometeam' ");
    
$con->query("UPDATE `$cupcheck` SET game=game+ '1', lostO=lostO+ '1', goal=goal+'$scoreaway', lostgoal=lostgoal+'$scorehome', point=point+ '1' WHERE team='$awayteam' ");
    
$resultmatch = $scorehome.":".$scoreaway." (ОТ)";
}  //======================== ЕСЛИ ХОЗЯЕВА ВЫИГРАЛИ В ОверТайме =====================

if ($scorehome > $scoreaway && $ghome[4]!=0) {
$con->query("UPDATE `$cupcheck` SET game=game+ '1', winB=winB+ '1', goal=goal+'$scorehome', lostgoal=lostgoal+'$scoreaway', point=point+ '2' WHERE team='$hometeam' ");
    
$con->query("UPDATE `$cupcheck` SET game=game+ '1', lostB=lostB+ '1', goal=goal+'$scoreaway', lostgoal=lostgoal+'$scorehome', point=point+ '1' WHERE team='$awayteam' ");
    
$resultmatch = $scorehome.":".$scoreaway." (Б)";
}  //======================== ЕСЛИ ХОЗЯЕВА ВЫИГРАЛИ ПО БУЛЛИТАМ =====================

//======================== ГОСТИ ============================================================
if ($scorehome < $scoreaway && $gaway[4]==0 && $gaway[3]==0) {
$con->query("UPDATE `$cupcheck` SET game=game+ '1', win=win+ '1', goal=goal+'$scoreaway', lostgoal=lostgoal+'$scorehome', point=point+ '3' WHERE team='$awayteam' ");
    
$con->query("UPDATE `$cupcheck` SET game=game+ '1', lost=lost+ '1', goal=goal+'$scorehome', lostgoal=lostgoal+'$scoreaway' WHERE team='$hometeam' ");
$resultmatch = $scorehome.":".$scoreaway;
}  //======================== ЕСЛИ ГОСТИ ВЫИГРАЛИ В ОСНОВНОЕ ВРЕМЯ =====================

if ($scorehome < $scoreaway && $gaway[4]==0 && $gaway[3]!=0) {
$con->query("UPDATE `$cupcheck` SET game=game+ '1', winO=winO+ '1', goal=goal+'$scoreaway', lostgoal=lostgoal+'$scorehome', point=point+ '2' WHERE team='$awayteam' ");
    
$con->query("UPDATE `$cupcheck` SET game=game+ '1', lostO=lostO+ '1', goal=goal+'$scorehome', lostgoal=lostgoal+'$scoreaway', point=point+ '1' WHERE team='$hometeam' ");

$resultmatch = $scorehome.":".$scoreaway." (ОТ)";
}  //======================== ЕСЛИ ГОСТИ ВЫИГРАЛИ В ОверТайме =====================

if ($scorehome < $scoreaway && $gaway[4]!=0) {
$con->query("UPDATE `$cupcheck` SET game=game+ '1', winB=winB+ '1', goal=goal+'$scoreaway', lostgoal=lostgoal+'$scorehome', point=point+ '2' WHERE team='$awayteam' ");
    
$con->query("UPDATE `$cupcheck` SET game=game+ '1', lostB=lostB+ '1', goal=goal+'$scorehome', lostgoal=lostgoal+'$scoreaway', point=point+ '1' WHERE team='$hometeam' ");

$resultmatch = $scorehome.":".$scoreaway." (Б)";
}  //======================== ЕСЛИ ГОСТИ ВЫИГРАЛИ ПО БУЛЛИТАМ =====================

$con->query("UPDATE `$cupcheck` SET diffgoal=goal-lostgoal "); // РАЗНИЦА ШАЙБ
$con->query("UPDATE `$cupcheck` SET penalty=penalty+'$penaltyhome' WHERE team='$hometeam' "); // ШТРАФЫ
$con->query("UPDATE `$cupcheck` SET penalty=penalty+'$penaltyaway' WHERE team='$awayteam' "); // ШТРАФЫ
//============ UPDATE TABLES ==================================================
$con->query("UPDATE `$calendar` SET home1g='$ghome[0]', home2g='$ghome[1]', home3g='$ghome[2]', home4g='$ghome[3]', home5g='$ghome[4]', homeg='$scorehome', home1s='$shome[0]', home2s='$shome[1]', home3s='$shome[2]', home4s='$shome[3]', homes='$shotshome', home1bs='$bshome[0]', home2bs='$bshome[1]', home3bs='$bshome[2]', home4bs='$bshome[3]', homebs='$bshotshome', home1f='$fhome[0]', home2f='$fhome[1]', home3f='$fhome[2]', home4f='$fhome[3]', homef='$faceoffhome', home1p='$phome[0]', home2p='$phome[1]', home3p='$phome[2]', home4p='$phome[3]', homep='$penaltyhome', away1g='$gaway[0]', away2g='$gaway[1]', away3g='$gaway[2]', away4g='$gaway[3]', away5g='$gaway[4]', awayg='$scoreaway', away1s='$saway[0]', away2s='$saway[1]', away3s='$saway[2]', away4s='$saway[3]', aways='$shotsaway', away1bs='$bsaway[0]', away2bs='$bsaway[1]', away3bs='$bsaway[2]', away4bs='$bsaway[3]', awaybs='$bshotsaway', away1f='$faway[0]', away2f='$faway[1]', away3f='$faway[2]', away4f='$faway[3]', awayf='$faceoffaway', away1p='$paway[0]', away2p='$paway[1]', away3p='$paway[2]', away4p='$paway[3]', awayp='$penaltyaway', result='$resultmatch' WHERE id='$prtk' ");
//==================================================================================

$con->query("UPDATE players_playoff17 SET gwin=gwin+ '1' WHERE id='$idgwin' ");

// записали победный гол
if ($con->connect_error) {
    die("Connection failed:" .$con->connect_error);
}
$con->close();
?>


















