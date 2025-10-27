<?php
require_once 'connect.php';

$link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }
$players = "players".$idofcup[0];

$newval = (int)$_POST['new_val'];
$id = (int)$_POST['id'];
$prtk = (int)$_POST['prtk'];
$protokol = "protokol_squad".$idofcup[0]."_".+$prtk;

$sql = "UPDATE `$protokol` SET `num` = '$newval' WHERE `id` = '$id'";
$records = mysqli_query($link,$sql);

$sql = "UPDATE `$players` SET `num` = '$newval' WHERE `id` = '$id'";
$records = mysqli_query($link, $sql);


?>