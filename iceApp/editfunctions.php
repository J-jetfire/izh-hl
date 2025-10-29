<?php   

function get_players1($link, $team, $idofcup){
    // Обеспечиваем валидные значения
    $tableSuffix = (int)$idofcup;
    if (!$link || !($link instanceof mysqli)) {
        if (function_exists('getDBConnection')) {
            $link = getDBConnection();
        }
    }

    $players = "players{$tableSuffix}";
    $teamEsc = $link ? mysqli_real_escape_string($link, (string)$team) : (string)$team;
    $query = "SELECT * FROM `$players` WHERE `team`='$teamEsc' ORDER BY num";
    $result = $link ? mysqli_query($link, $query) : false;

    $options = array();
    if ($result && $result instanceof mysqli_result) {
        while($row = mysqli_fetch_assoc($result)){
            $options[$row['id']] = $row;
        }
    }
    return $options;
}

function update_players($link, $idofcup){
    $tableSuffix = (int)$idofcup;
    if (!$link || !($link instanceof mysqli)) {
        if (function_exists('getDBConnection')) {
            $link = getDBConnection();
        }
    }

    $players = "players{$tableSuffix}";
    $value = isset($_POST['new_val']) ? mysqli_real_escape_string($link, (string)$_POST['new_val']) : '';
    $idy = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    
    if ($idy <= 0) return false;

    $query = "UPDATE `$players` SET `num` = '$value' WHERE `id` = $idy";
    $res = $link ? mysqli_query($link, $query) : false;
    
    return ($res && mysqli_affected_rows($link) >= 0);
}

?>
