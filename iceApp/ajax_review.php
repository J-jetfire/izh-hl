<?php 
    require_once 'connect.php';// connect to mysql
        $link = db_connect();
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }

        //require "../GAME_INFO_".$idofcup[0].".php";
        $prtk = $_POST['prtk'];

  $players = "players".$idofcup[0];
     $review = "protokol_review".$idofcup[0]."_".$prtk;
        $squad = "protokol_squad".$idofcup[0]."_".$prtk;
    $calendar = "calendar".$idofcup[0];

            $league = "ИХЛ";
            $idofcup = 7;
            $cupcheck = "cuptable7";
            
$min = trim($_POST['min']);           // minutes
$sec = trim($_POST['sec']);           // seconds
$ztime = $_POST['ztime'];

$idgoal = $_POST['idg'];   // id igroka
$etc = $_POST['etc'];           // etc (Power play/ penalty mins)

$pas1 = $_POST['pas1'];
$pas2 = $_POST['pas2'];


$checker = $_POST['checker'];       // check is it goal or penalty
//--------------------------------------------------------
$quarter = $_POST['qrtr'];
$motion = "";
$move = "";

$sql = "SELECT * FROM `$players` WHERE id='$idgoal' ";
$records = mysqli_query($link, $sql);
$row = mysqli_fetch_array($records);

$num = $row['num'];
$name = $row['name'];
$sname = $row['sname'];
$team = $row['team'];

$ge = 0;
$gb = 0;
$gm = 0;


    $sql = "SELECT * FROM $calendar WHERE id='$prtk' ";
    $records = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($records);
    $hometeam = $row['home'];
    $awayteam = $row['away'];



if ($pas1>0){
    $sql = "SELECT * FROM `$players` WHERE team='$team' AND num='$pas1' ";
    $records = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($records);
    $pas1 = $row['num']." ".$row['name']." ".$row['sname'];
    $pas1 = trim($pas1);
}
if ($pas2>0){
    $sql = "SELECT * FROM `$players` WHERE team='$team' AND num='$pas2' ";
    $records = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($records);
    $pas2 = ", ".$row['num']." ".$row['name']." ".$row['sname'];
    $pas2 = trim($pas2);
}

if ($checker == 1){
$ge = 0;
$gb = 0;
$gm = 0;
    $move = "Гол";
    $motion = $pas1."".$pas2;
    if ($etc == 1){
    $etc = "Равн.";
    $ge = 1;
    }
    if ($etc == 2){
    $etc = "Бол.";
    $gb = 1;
    }
    if ($etc == 3){
    $etc = "Мен.";
    $gm = 1;
    }
    if ($etc == 4){
    $etc = "en";
    }
    if ($etc == 5){
    $etc = ""; $move="Буллит";
    }
    if ($etc == 6){
    $etc = "6х5";
    }
    if ($etc == 7){
    $etc = "5х6";
    }
    
    $sql = "UPDATE `$players` SET ge=ge+'$ge', gb=gb+'$gb', gm=gm+'$gm' WHERE id='$idgoal'"; // &&&&&&&&&&&&&&&&&
    $records = mysqli_query($link, $sql);
    
    if ($team == $hometeam){ $agteam = $awayteam; }
    else { $agteam = $hometeam; }
    
    $sql = "UPDATE `$cupcheck` SET `goalPP`=`goalPP`+'$gb', `goalLP`=`goalLP`+'$gm' WHERE `team`='$team'"; $records = mysqli_query($link, $sql);
    $sql = "UPDATE `$cupcheck` SET `lostPP`=`lostPP`+'$gm', `lostLP`=`lostLP`+'$gb' WHERE `team`='$agteam'"; $records = mysqli_query($link, $sql);
}

if ($checker == 2){
    $move = "Удаление";
    $motion = $pas1;
    
    if ($etc == "1"){
    $etc = "2 мин.";
    }
    if ($etc == "2"){
    $etc = "4 мин.";
    }
    if ($etc == "3"){
    $etc = "5 мин.";
    }
    if ($etc == "4"){
    $etc = "2+10";
    }
    if ($etc == "5"){
    $etc = "5+20";
    }
    if ($etc == "6"){
    $etc = "10";
    }
    if ($etc == "7"){
    $etc = "20";
    }
    if ($etc == "8"){
    $etc = "2+2";
    }
    if ($etc == "9"){
    $etc = "2+2+10";
    }
    if ($team == $hometeam){ $agteam = $awayteam; }
    else { $agteam = $hometeam; }
    
    $sql = "UPDATE `$cupcheck` SET `LP`=`LP`+'1' WHERE `team`='$team'";
    $records = mysqli_query($link, $sql);
    
    $sql = "UPDATE `$cupcheck` SET `PP`=`PP`+'1' WHERE `team`='$agteam'";
    $records = mysqli_query($link, $sql);
}


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

//===================================================END OF TIMING

if ($quarter==5){
    $time = " ";}

$player = "".$num." ".$name." ".$sname."";
$move = trim($move);
$player = trim($player);
$motion = trim($motion);
$etc = trim($etc);

    $sql = "INSERT INTO `$review` (time, team, move, player, motion, etc) VALUES ('$time', '$team', '$move', '$player', '$motion', '$etc')";
    $records = mysqli_query($link, $sql);
?>