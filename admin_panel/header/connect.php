<?php

define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'u3247279_default');
define('MYSQL_PASSWORD', '618cR8eCeS1hSHuX');
define('MYSQL_DB', 'u3247279_izhhlru_20');

function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
    if (!mysqli_set_charset($link,"utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}

?>