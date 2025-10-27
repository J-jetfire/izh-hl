<?php 
        require_once '../header/connect.php';// connect to mysql
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($records)){
            $idofcup = $row['id'];
        }
        
        include_once "GAME_INFO_".$idofcup[0].".php";
        
        $prtk = $_POST['prtk'];
        $id = $_POST['identy'];
        $check = $_POST['check'];
        $k = $_POST['k'];

        
        $players = "players".$idofcup[0];
        $prtk = $_POST['protokolnum'];
        $ids = $_POST['identy'];
//----------------- ДАННЫЕ МАТЧА --------------------------------
$playerspm = $_POST['players']; // счет хозяев

$protokol = "protokol_squad".$idofcup[0]."_".+$prtk;

//--------------- ВЫВОД В БД -----------------------


foreach ($ids as $key => $id) {
   $con->query("UPDATE `$players` SET plusminus = plusminus+'$playerspm[$key]' WHERE id = '$ids[$key]' " );
}

foreach ($ids as $key => $id) {
   $con->query("UPDATE `$protokol` SET plusminus = '$playerspm[$key]' WHERE id = '$ids[$key]' " );
}

if ($con->connect_error) {
    die("Connection failed:" .$con->connect_error);
}
$con->close();
?>