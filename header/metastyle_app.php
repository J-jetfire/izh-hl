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
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1221px, maximum-scale=1.0">
    <link rel="shortcut icon" href="img/favicons/favicon-96x96.png" type="" />
    <!-- Bootstrap & STYLE -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylewebapp.css">
    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>