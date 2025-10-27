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
    $min = $_POST['min'];   // id of gkeeper

    $sql = "UPDATE `$players` SET `penalty` = `penalty` + '$min' WHERE id = '$id' ";
    $records = mysqli_query($link, $sql);
     // SCORER
    $sql = "UPDATE `$squad` SET `penalty` = `penalty` + '$min' WHERE id = '$id' ";
    $records = mysqli_query($link, $sql);
    //==============================================================
?>