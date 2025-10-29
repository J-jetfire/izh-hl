<?php
    require_once 'header/connect.php';
    
    // Проверяем, что protokol передан в запросе
    if (!isset($_GET['protokol']) || empty($_GET['protokol'])) {
        // Если protokol не передан, устанавливаем значения по умолчанию
        $datematch = '';
        $time = '';
        $hometeam = '';
        $awayteam = '';
        $league = getCurrentLeague();
        $season = getCurrentSeason();
        $part = getCurrentPart();
        $logohome = '';
        $logoaway = '';
        $result = '-';
        $row = array(); // Пустой массив для protokol25.php
    } else {
        $prtk = $_GET['protokol'];

        // Все переменные кубка уже инициализированы в cup_config.php
        // $idofcup, $league, $season, $part уже определены
        
        // Получаем подключение к БД
        $con = getDBConnection();
        
        // Получаем данные матча
        $sql = "SELECT * FROM $calendar WHERE id=$prtk";
        $records = mysqli_query($con,$sql);
        
        // Проверяем результат запроса
        if ($records && mysqli_num_rows($records) > 0) {
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
            // $row остается доступным для использования в protokol25.php
        } else {
            // Если матч не найден, устанавливаем значения по умолчанию
            $datematch = '';
            $time = '';
            $hometeam = '';
            $awayteam = '';
            $league = getCurrentLeague();
            $season = getCurrentSeason();
            $part = getCurrentPart();
            $logohome = '';
            $logoaway = '';
            $result = '-';
            $row = array(); // Пустой массив для protokol25.php
        }
    }
?>