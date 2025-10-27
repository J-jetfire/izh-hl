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
$lost = $_POST['lostg']; // id of gkeeper


    $sql = "UPDATE `$players` SET `goal` = `goal`+'1', `shot` = `shot` + '1', `point`=`point` + '1' WHERE id = '$id' ";
    $records = mysqli_query($link, $sql);
     // SCORER
    $sql = "UPDATE `$squad` SET `goal` = `goal`+'1', `shot` = `shot` + '1', `point`=`point` + '1' WHERE id = '$id' ";
    $records = mysqli_query($link, $sql);

    // SHOT PERCENTAGE
    $sql = "UPDATE `$players` SET `shotperc`=(`goal`*100/`shot`) WHERE `shot`!='0' AND id = '$id' ";
    $records = mysqli_query($link, $sql);




    //==============================================================
    $sql = "UPDATE `$players` SET `lostgoal` = `lostgoal`+'1', `allshot` = `allshot` + '1' WHERE id = '$lost' ";
    $records = mysqli_query($link, $sql);
    
    // GOALKEEPER
    $sql = "UPDATE `$squad` SET `lostgoal` = `lostgoal` + '1', `allshot` = `allshot` + '1' WHERE id = '$lost' ";
    $records = mysqli_query($link, $sql);

    $sql = "UPDATE `$squad` SET `refshot` = 100-(`lostgoal`*100 / `allshot`) WHERE `id`= '$lost' AND `pos`='Вр' AND `allshot`!='0' ";
    $records = mysqli_query($link, $sql);

    $sql = "UPDATE `$players` SET `refshot` = 100-(`lostgoal`*100 / `allshot`) WHERE `id`= '$lost' AND `pos`='Вр' AND `allshot`!='0' ";
    $records = mysqli_query($link, $sql);

    $sql = "UPDATE `$players` SET `KN` = `lostgoal`/`game`, `refshot` = 100-(`lostgoal`*100 / `allshot`) WHERE `id` = '$lost' AND `pos`='Вр' AND `allshot`!='0' ";
    $records = mysqli_query($link, $sql);

?>