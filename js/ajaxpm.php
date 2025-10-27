<?php 

$prtk = $_POST['protokolnum'];

include_once "../protokolshn17/GAME_INFO_".$prtk.".php";

$ids = $_POST['identy'];
//----------------- ДАННЫЕ МАТЧА --------------------------------
$playerspm = $_POST['players']; // счет хозяев
$gamesplayed = $_POST['gamesplayed'];

//--------------- ВЫВОД В БД -----------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hockeynation";

$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($con, $dbname);

foreach ($ids as $key => $id) {
   $con->query("UPDATE players SET game = game+'$gamesplayed[$key]', plusminus = plusminus+'$playerspm[$key]' WHERE id = '$ids[$key]' " );
}

if ($con->connect_error) {
    die("Connection failed:" .$con->connect_error);
}
echo "Connection successfull  ";

$con->close();
echo "  Connection closed";

?>