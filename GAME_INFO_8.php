<?php
    require_once 'header/connect.php';
          
    $prtk = $_GET['protokol'];

    // Все переменные кубка уже инициализированы в cup_config.php
    // $idofcup, $league, $season, $part уже определены
    
    // Получаем подключение к БД
    $con = getDBConnection();
    
    // Получаем данные матча
    $sql = "SELECT * FROM $calendar WHERE id=$prtk";
    $records = mysqli_query($con,$sql);
    
    // Проверяем результат запроса
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