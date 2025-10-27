<?php
     require_once 'header/connect.php';
          
    $prtk = $_GET['protokol'];
    //require_once 'header/connect.php';// connect to mysql
    //$link = db_connect();
    $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
                $league = $row['league'];
                $season = $row['season'];
                $part = $row['part'];
             }    
    $cup = 2;
    $calendar = 'calendar2';

    //====================== ENTER DATE OF MATCH
    
    //====================== ENTER LOGO LINKS
    $sql = "SELECT * FROM $calendar WHERE id='$prtk' ";
    $records = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($records);
    $datematch = $row['date'];
    $time = $row['time'];
    $hometeam = $row['home'];
    $awayteam = $row['away'];
    $league = $row['league'];
    $season = $row['season'];
    $part = $row['part'];
    $logohome = $row['logohome'];
    $logoaway = $row['logoaway'];
    $result = $row['result'];
    //$equiphome = $row['equiphome'];
    //$equipaway = $row['equipaway'];
?>