<?php

    $servername = "localhost";
    $username = "u3247279_default";
    $password = "618cR8eCeS1hSHuX";
    $dbname = "u3247279_izhhlru_20";
	
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, $dbname);
	mysqli_set_charset($con,"utf8");

    $database = "u3247279_izhhlru_20";
    
    $league="ИХЛ";
    $season="2025-2026";
    
    $calendar = "calendar8";
?>