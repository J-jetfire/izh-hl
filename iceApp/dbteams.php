<?php
$sql = "SELECT * FROM $calendar WHERE id=$prtk";
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

$cup = $idofcup; // Используем ID кубка из БД

$sql_1 = "SELECT * FROM $players WHERE team = '$hometeam' ORDER BY num";
$sql_2 = "SELECT * FROM $players WHERE team = '$awayteam' ORDER BY num";

$result_1 = mysqli_query($con, $sql_1);
$result_2 = mysqli_query($con, $sql_2);
?>