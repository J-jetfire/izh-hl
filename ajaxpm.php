<?php 
require_once 'iceApp/connect.php';// connect to mysql
        $link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }

$prtk = $_POST['protokolnum'];
$players = "players8";
$ids = $_POST['identy'];
//----------------- ДАННЫЕ МАТЧА --------------------------------
$playerspm = $_POST['players']; // счет хозяев

$protokol = "protokol_squad8_".$prtk;

//--------------- ВЫВОД В БД -----------------------
foreach ($ids as $key => $id) {
   $sql = "UPDATE `$players` SET `plusminus` = `plusminus`+'$playerspm[$key]' WHERE `id` = '$ids[$key]' AND pos!='Вр'";
    $records = mysqli_query($link, $sql);
}

foreach ($ids as $key => $id) {
   $sql = "UPDATE `$protokol` SET `plusminus` = '$playerspm[$key]' WHERE `id` = '$ids[$key]'  AND pos!='Вр'";
    $records = mysqli_query($link, $sql);
}

?>