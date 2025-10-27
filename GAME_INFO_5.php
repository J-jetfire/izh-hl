<?php
     require_once 'header/connect.php';
          
    $prtk = $_GET['protokol'];

    $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
                $league = $row['league'];
                $season = $row['season'];
                $part = $row['part'];
             }    
    $cup = 5;
    $calendar = 'calendar5';

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
?>