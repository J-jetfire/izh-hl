<?php 
require_once 'connect.php';// connect to mysql
        $link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }

include_once "../GAME_INFO_8.php";

$prtk = $_POST['prtk'];

//-------------------- ДАННЫЕ ПО ПЕРИОДАМ --------------------------
$ghome = $_POST['goal1']; // голы по периодам хозяев
$gaway = $_POST['goal2']; // голы по периодам гостей
$shome = $_POST['shot1']; // бв по периодам хозяев
$saway = $_POST['shot2']; // бв по периодам гостей
$fhome = $_POST['face1']; // вбр по периодам хозяев
$faway = $_POST['face2']; // вбр по периодам гостей
$phome = $_POST['pen1']; // штрафы по периодам хозяев
$paway = $_POST['pen2']; // штрафы по периодам гостей

$bshome = $_POST['bshot1'];  // зб по периодам хозяев
$bsaway = $_POST['bshot2'];  // зб по периодам гостей
//-----------------------------------------------------------------

$calendar = "calendar8";

$sql = "UPDATE `$calendar` SET home1g='$ghome[0]', home2g='$ghome[1]', home3g='$ghome[2]', home4g='$ghome[3]', home5g='$ghome[4]', home1s='$shome[0]', home2s='$shome[1]', home3s='$shome[2]', home4s='$shome[3]', home1bs='$bshome[0]', home2bs='$bshome[1]', home3bs='$bshome[2]', home4bs='$bshome[3]', home1f='$fhome[0]', home2f='$fhome[1]', home3f='$fhome[2]', home4f='$fhome[3]', home1p='$phome[0]', home2p='$phome[1]', home3p='$phome[2]', home4p='$phome[3]', away1g='$gaway[0]', away2g='$gaway[1]', away3g='$gaway[2]', away4g='$gaway[3]', away5g='$gaway[4]', away1s='$saway[0]', away2s='$saway[1]', away3s='$saway[2]', away4s='$saway[3]', away1bs='$bsaway[0]', away2bs='$bsaway[1]', away3bs='$bsaway[2]', away4bs='$bsaway[3]', away1f='$faway[0]', away2f='$faway[1]', away3f='$faway[2]', away4f='$faway[3]', away1p='$paway[0]', away2p='$paway[1]', away3p='$paway[2]', away4p='$paway[3]' WHERE id='$prtk'";
$records = mysqli_query($link, $sql);

?>