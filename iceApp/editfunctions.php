<?php   


        function get_players1($link, $team, $idofcup){
            $players = "players".$idofcup[0];
            $query = "SELECT * FROM `$players` WHERE `team`='$team' ORDER BY num";
            $result = mysqli_query($link, $query);
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['id']]=$row;
            }
            return $options;
        }

            function update_players($link, $idofcup){
                $players = "players".$idofcup[0];
                $field = isset($_POST['field']) ? $_POST['field'] : '';
                $value = mysqli_real_escape_string($link, $_POST['new_val']);
                $idy = (int)$_POST['id'];
                
                $query = "UPDATE `$players` SET `num` = '$value' WHERE `id` = $idy";
                $res = mysqli_query($link, $query);
            
                if( mysqli_affected_rows($link)) return true;
                else return false;
            }
       


?>
