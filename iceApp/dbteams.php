<?php
    require 'GAME_INFO_8.php';
    
    $sql_1 = "SELECT * FROM $players WHERE team = '$hometeam' ORDER BY num";
    
    $sql_2 = "SELECT * FROM $players WHERE team = '$awayteam' ORDER BY num";

    $result_1 = mysqli_query($link, $sql_1); // 
    $result_2 = mysqli_query($link, $sql_2);
?>