<?php 
    require_once '../connect.php';// connect to mysql
        $link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }

$prtk = $_POST['prtk'];
  $players = "players".$idofcup[0];
        $squad = "protokol_squad".$idofcup[0]."_".$prtk;
    $calendar = "calendar".$idofcup[0];

$id = $_POST['id'];     // id of scorer
$won = $_POST['whowon'];// true || false
$faceoff = $_POST['faceoff']; // true || false || which team won

    if ($won == 'true') {
        // update winner
        $sql = "UPDATE `$players` SET `wfaceoff` = `wfaceoff` + '1' WHERE `id` = '$id' ";
        $records = mysqli_query($link, $sql);
        // WINNER
        $sql = "UPDATE `$squad` SET `wfaceoff` = `wfaceoff` + '1' WHERE `id` = '$id' ";
        $records = mysqli_query($link, $sql);
        // FACEOFF PERCENTAGE
        $sql = "UPDATE `$players` SET `faceoffperc` = (`wfaceoff`*100 / (`wfaceoff`+`lfaceoff`)) WHERE (`wfaceoff`+`lfaceoff`)!='0' AND `id` = '$id'";
        $records = mysqli_query($link, $sql);
        
        
    } else if ($won == 'false') {
        // update looser
        $sql = "UPDATE `$players` SET `lfaceoff` = `lfaceoff` + '1' WHERE `id` = '$id' ";
        $records = mysqli_query($link, $sql);
        // LOOSER
        $sql = "UPDATE `$squad` SET `lfaceoff` = `lfaceoff` + '1' WHERE `id` = '$id' ";
        $records = mysqli_query($link, $sql);
        // FACEOFF PERCENTAGE
        $sql = "UPDATE `$players` SET `faceoffperc` = (`wfaceoff`*100 / (`wfaceoff`+`lfaceoff`)) WHERE (`wfaceoff`+`lfaceoff`)!='0' AND `id` = '$id'";
        $records = mysqli_query($link, $sql);
    }









?>