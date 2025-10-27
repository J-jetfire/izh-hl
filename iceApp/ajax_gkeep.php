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
     $check = $_POST['check'];
      $gnow = $_POST['gnow'];
       $team = $_POST['team'];
        $ztime = $_POST['ztime'];

    $players = "players8";
        $review = "protokol_review8_".$prtk;
            $squad = "protokol_squad8_".$prtk;

if ($check == 3){
    
    $sql = "SELECT * FROM $players WHERE id='$gnow'"; // 
    $records = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($records);

    $num = $row['num'];
    $name = $row['name'];
    $sname = $row['sname'];
    
    // 1st gkeeper of team
    $id = $row['id'];
    $sql = "UPDATE `$players` SET `game` = `game` + '1' WHERE `id`='$id'";
    $records = mysqli_query($link, $sql);
    
    $time = "0:00";
    $move = "Вратарь";
    $player = "".$num." ".$name." ".$sname.""; 
    $etc = "";
    
    $sql = "INSERT INTO `$review` (time, team, move, player, motion, etc) VALUES ('$time', '$team', '$move', '$player', '$motion', '$etc')"; // 
    $records = mysqli_query($link, $sql);
    
    } 
else {
$g_array = $_POST['g_array'];
$min = $_POST['min']; // minutes
$sec = $_POST['sec'];    
$quarter = $_POST['qrtr'];
$gprev = $_POST['gprev'];

$motion = "";
$move = "";
$player = "";
$etc = "";


if ($ztime==1){
    //==============================if time goes BACKwards
if ($quarter==1){
    $timemin = 19-$min;}
if ($quarter==2){
    $timemin = 39-$min;}
if ($quarter==3){
    $timemin = 59-$min;}
if ($quarter==4){
    $timemin = 64-$min;}

    if ($sec!=0) {$timesec = 60-$sec;}else{$timesec = "00";$timemin++;}
    if ($timesec<10 && $timesec>0) {$timesec = "0".$timesec;}
    $time = $timemin.":".$timesec; 
}
if ($ztime==2){
    //========================if time goes TOwards
if ($quarter==1){
    $timemin = $min;}
if ($quarter==2){
    $timemin = 20+$min;}
if ($quarter==3){
    $timemin = 40+$min;}
if ($quarter==4){
    $timemin = 60+$min;}

    if ($sec!=0) {$timesec = $sec;}else{$timesec = "00";}
    if ($timesec<10 && $timesec>0) {$timesec = "0".$timesec;}
    $time = $timemin.":".$timesec; 
}


if ($quarter==5){
    $time = " ";}

if ($check==1){
    $move = "Тайм-аут";
}

if ($check==2){
$sql = "SELECT * FROM $players WHERE id='$gnow'"; // 
$records = mysqli_query($link, $sql);
$row = mysqli_fetch_array($records);

$num = $row['num'];
$name = $row['name'];
$sname = $row['sname'];
$id = $row['id'];
    
    // 2nd gkeeper of team
    if(!in_array($gnow, $g_array)){
        $sql = "UPDATE `$players` SET `game` = `game` + '1' WHERE `id`='$id'";
        $records = mysqli_query($link, $sql);
    }
    
   $player = "".$num." ".$name." ".$sname.""; 

$sql = "SELECT * FROM $players WHERE id='$gprev'"; // 
$records = mysqli_query($link, $sql);
$row = mysqli_fetch_array($records);

$num = $row['num'];
$name = $row['name'];
$sname = $row['sname'];
    $motion = "<= ".$num." ".$name." ".$sname.""; 
    $move = "Смена вратаря";
}
    $sql = "INSERT INTO `$review` (time, team, move, player, motion, etc) VALUES ('$time', '$team', '$move', '$player', '$motion', '$etc')"; // 
    $records = mysqli_query($link, $sql);    
    
    }
?>