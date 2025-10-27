<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

$db_host		= 'localhost';
$db_user		= 'u3247279_default';
$db_pass		= '618cR8eCeS1hSHuX';
$db_database	= 'u3247279_izhhlru_20'; 

$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>