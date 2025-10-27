<?php 
        require_once 'connect.php';// connect to mysql
        $link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }
        
        // include_once "GAME_INFO_3.php";
        
        $prtk = $_POST['prtk'];
        $id = $_POST['identy'];
        $check = $_POST['check'];

        $protokol = "protokol_squad".$idofcup[0]."_".+$prtk;
        $players = "players".$idofcup[0];

//-----------------------------------------------------------

//--------------- ВЫВОД ЧЕРЕЗ БРАУЗЕР -----------------------

        $sql = "SELECT * FROM `$players` WHERE `id`='$id'";
        $records = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($records);
            $num = $row['num'];
            $pos = $row['pos'];
            $name = $row['name'];
            $sname = $row['sname'];
            $team = $row['team'];
    // CHECK ID OF ADDED PLAYER
        $sql = "SELECT * FROM `$protokol` WHERE `id`='$id' ";
        $records = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($records);
        $checkplayer = $row['id'];

if ($check == 1) {
    if ( $checkplayer < 1 ) {  // CHECK ID OF ADDED PLAYER
        $sql = "INSERT INTO `$protokol` (`num`, `pos`, `name`, `sname`, `goal`, `assist`, `point`, `plusminus`, `shot`, `bshot`, `wfaceoff`, `lfaceoff`, `penalty`, `lostgoal`, `allshot`, `refshot`, `team`, `id`) VALUES ('$num', '$pos', '$name', '$sname', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$team', '$id')";
        $records = mysqli_query($link, $sql);
    }
    if ( ($checkplayer < 1) && ($pos<>'Вр') ) {
        $sql = "UPDATE $players SET `game`=`game`+'1' WHERE `id` = '$id'";
        $records = mysqli_query($link, $sql);
    }
    
}
if ($check == 2) {
    $sql = " DELETE FROM `$protokol` WHERE `id` = '$id'";
    $records = mysqli_query($link,$sql);
    if ($pos<>'Вр') {
        $sql = "UPDATE $players SET `game`=`game`-'1' WHERE `id` = '$id'";
        $records = mysqli_query($link, $sql);
    }
}



?>