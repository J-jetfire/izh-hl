<?php
            $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
             }

        function get_matchlist($link, $idofcup){

            $calendar = "calendar".$idofcup[0];

            $query = "SELECT * FROM $calendar ORDER BY id DESC";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['id']]=$row;
            }
            return $options;
        }

        function update_matchlist($link, $idofcup){
        
            $table = "cuptable".$idofcup;
            $calendar = "calendar".$idofcup[0];
        
            $teams = array();
            $sql4 = "SELECT * FROM `$table`" ;
            $records4 = mysqli_query($link,$sql4);
                   while($row4 = mysqli_fetch_array($records4)){
                        $teams[] = $row4['team'];
                   }
        
            $fields = array('league', 'place', 'date', 'season', 'time', 'part', 'home', 'away', 'result');
            $field = isset($_POST['field']) ? $_POST['field'] : '';
            if( !in_array($field, $fields)) return false;
            
            $value = mysqli_real_escape_string($link, $_POST['new_val']);
            $value = trim($value);
            
            $id = (int)$_POST['id'];
            $query = "UPDATE `$calendar` SET `$field` = '$value' WHERE `id` = $id";
            $res = mysqli_query($link, $query);
            
            if($field=='home'){ 
            if( !in_array($value, $teams)) return false;
            $sql4 = "SELECT * FROM `$table` WHERE `team`='$value'" ;
            $records4 = mysqli_query($link,$sql4);
                   while($row4 = mysqli_fetch_array($records4)){
                        $logohome = $row4['logo'];
                   }
            $sql4 = "UPDATE `$calendar` SET `logohome`='$logohome' WHERE `id`=$id" ;
            $records4 = mysqli_query($link,$sql4);
            }    
            else if($field=='away'){ 
                if( !in_array($value, $teams)) return false;
                $sql4 = "SELECT * FROM `$table` WHERE `team`='$value'" ;
                $records4 = mysqli_query($link,$sql4);
                    while($row4 = mysqli_fetch_array($records4)){
                        $logoaway = $row4['logo'];
                   }
                $sql4 = "UPDATE `$calendar` SET `logoaway`='$logoaway' WHERE `id`=$id" ;
                $records4 = mysqli_query($link,$sql4);   
            }
            
            if( mysqli_affected_rows($link)) return true;
                else return false;
            
           
       }

        function get_table($link, $idofcup){

            $table = "cuptable".$idofcup;
            
            $query = "SELECT * FROM `$table` ORDER BY point DESC";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['identity']]=$row;
            }
            return $options;
        }
        
        function update_table($link, $idofcup){
            
            $table = "cuptable".$idofcup;
        
            $fields = array('team', 'game', 'win', 'wino', 'winb', 'lostb', 'losto', 'lost', 'goal', 'lostgoal', 'point', 'penalty', 'PP', 'goalPP', 'lostPP', 'LP', 'lostLP', 'goalLP', 'cup');
            $field = isset($_POST['field']) ? $_POST['field'] : '';
            if( !in_array($field, $fields)) return false;
            
            $value = mysqli_real_escape_string($link, $_POST['new_val']);
            $value = trim($value);
            
            $id = (int)$_POST['id'];
            $query = "UPDATE `$table` SET `$field` = '$value' WHERE `identity` = $id";
            $res = mysqli_query($link, $query);
            
            /*if($field=='home'){ 
            if( !in_array($value, $teams)) return false;
            $sql4 = "SELECT * FROM `table` WHERE `team`='$value'" ;
            $records4 = mysqli_query($link,$sql4);
                   while($row4 = mysqli_fetch_array($records4)){
                        $logohome = $row4['logo'];
                   }
            $sql4 = "UPDATE `calendar` SET `logohome`='$logohome' WHERE `id`=$id" ;
            $records4 = mysqli_query($link,$sql4);
            }    
            else if($field=='away'){ 
                if( !in_array($value, $teams)) return false;
                $sql4 = "SELECT * FROM `table` WHERE `team`='$value'" ;
                $records4 = mysqli_query($link,$sql4);
                    while($row4 = mysqli_fetch_array($records4)){
                        $logoaway = $row4['logo'];
                   }
                $sql4 = "UPDATE `calendar` SET `logoaway`='$logoaway' WHERE `id`=$id" ;
                $records4 = mysqli_query($link,$sql4);   
            }*/
            
            if( mysqli_affected_rows($link)) return true;
                else return false;
            
           
       }

        function get_players($link, $idofcup){

            $players = "players".$idofcup[0];

            $team2 = $_POST['team2'];
            $query = "SELECT * FROM `$players` WHERE team='$team2' ORDER BY pos, point DESC, game DESC";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['id']]=$row;
            }
            return $options;
        }

        function update_players($link, $idofcup){
            $players = "players".$idofcup[0];
        
            //$fields = array('img', 'birthdate', 'team', 'num', 'pos', 'name', 'sname', 'tname', 'game', 'goal', 'assist', 'point', 'plusminus', 'shot', 'bshot', 'wfaceoff', 'lfaceoff', 'penalty', 'lostgoal', 'KN', 'height', 'weight', 'hand', 'ge', 'gb', 'gm', 'gwin', 'allshot', 'refshot');
            $field = isset($_POST['field']) ? $_POST['field'] : '';
            //if( !in_array($field, $fields)) return false;
            
            $value = mysqli_real_escape_string($link, $_POST['new_val']);
            $value = trim($value);
            $idy = (int)$_POST['id'];
            $query = "UPDATE `$players` SET `$field` = '$value' WHERE `id` = $idy";
            $res = mysqli_query($link, $query);
            
            //if( mysqli_affected_rows($link)) return true;
            //    else return false;
            
            if ($field=="shot"){
                //shotperc ++
                $query = "UPDATE `$players` SET shotperc=goal*100 / shot WHERE `id` = $idy AND shot!='0'";
                $res = mysqli_query($link, $query);
            } else 
            if ($field=="wfaceoff"){
                //faceoffperc++
                $query = "UPDATE `$players` SET faceoffperc=(wfaceoff*100 / (wfaceoff+lfaceoff)) WHERE `id` = $idy AND (wfaceoff+lfaceoff)!='0'";
                $res = mysqli_query($link, $query);
            } else 
            if ($field=="lfaceoff"){
                //faceoffperc++
                $query = "UPDATE `$players` SET faceoffperc=(wfaceoff*100 / (wfaceoff+lfaceoff)) WHERE `id` = $idy AND (wfaceoff+lfaceoff)!='0'";
                $res = mysqli_query($link, $query);
            } else 
            if ($field=="lostgoal"){
                //KN/refshot++
                $query = "UPDATE `$players` SET KN=lostgoal / game WHERE `id` = $idy AND pos='Вр' AND game!='0'";
                $res = mysqli_query($link, $query);
                $query = "UPDATE `$players` SET refshot= 100-(lostgoal*100 / allshot) WHERE `id` = $idy AND pos='Вр' AND allshot!='0'";
                $res = mysqli_query($link, $query);
            } else 
            if ($field=="game"){
                //KN
                $query = "UPDATE `$players` SET KN=(lostgoal / game) WHERE `id` = $idy AND pos='Вр' AND game!='0'";
                $res = mysqli_query($link, $query);
            } else 
            if ($field=="allshot"){
                //refshot++
                $query = "UPDATE `$players` SET refshot= 100-(lostgoal*100 / allshot) WHERE `id` = $idy AND pos='Вр' AND allshot!='0'";
                $res = mysqli_query($link, $query);
            }
            
            
            if( mysqli_affected_rows($link)) return true;
                else return false;
       }

        function get_gamelist($link, $idofcup){

            $calendar = "calendar".$idofcup[0];
            
            $query = "SELECT * FROM $calendar ORDER BY id DESC";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['id']]=$row;
            }
            return $options;
        }
        
        function get_game($link, $idofcup){
            
            $calendar = "calendar".$idofcup[0];
            
            if (!isset($_GET['protokol'])){ 
            return false;
            } else {
            $prtk = $_GET['protokol'];
            
            $query = "SELECT * FROM $calendar WHERE id=$prtk";   // ДАННЫЕ ПЕРИОДОВ
            $result = mysqli_query($link, $query);              // ДАННЫЕ ПЕРИОДОВ
    
            if (!$result)
                die(mysqli_error($link));
    
            $protokol = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $protokol[$row['id']]=$row;
            }
            return $protokol;
            }
        }

        function get_review($link, $idofcup){ // АТРИБУТ - id => identity!!!
            
            $prtk = $_GET['protokol'];            
            $selectprtk = $idofcup[0]."_".$prtk;
            $query = "SELECT * FROM protokol_review$selectprtk";     // ДАННЫЕ ПРОТОКОЛА - REVIEW
            $result = mysqli_query($link, $query);              // ДАННЫЕ ПРОТОКОЛА - REVIEW
    
            if (!$result)
                die(mysqli_error($link));
    
            $review = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $review[$row['identity']]=$row; // АТРИБУТ - id => identity!!!
            }
            return $review;
        }

        function get_squad($link, $idofcup, $home){  // АТРИБУТ - id => identity!!!
            
            $prtk = $_GET['protokol'];
            $selectprtk = $idofcup[0]."_".$prtk;
            $query = "SELECT * FROM protokol_squad$selectprtk WHERE team='$home' ORDER BY pos";      // ДАННЫЕ СОСТАВОВ - SQUAD
            $result = mysqli_query($link, $query);              // ДАННЫЕ СОСТАВОВ - SQUAD
    
            if (!$result)
                die(mysqli_error($link));
    
            $squad = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $squad[$row['identity']]=$row; // АТРИБУТ - id => identity!!!
            }
            return $squad;
        }

        function get_squad2($link, $idofcup, $away){  // АТРИБУТ - id => identity!!!
                        
            $prtk = $_GET['protokol'];
            $selectprtk = $idofcup[0]."_".$prtk;
            $query = "SELECT * FROM protokol_squad$selectprtk WHERE team='$away' ORDER BY pos";      // ДАННЫЕ СОСТАВОВ - SQUAD
            $result = mysqli_query($link, $query);              // ДАННЫЕ СОСТАВОВ - SQUAD
    
            if (!$result)
                die(mysqli_error($link));
    
            $squad2 = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $squad2[$row['identity']]=$row; // АТРИБУТ - id => identity!!!
            }
            return $squad2;
        }

        function update_game($link, $idofcup){
        
            $calendar = "calendar".$idofcup[0];
            $players = "players".$idofcup[0];
            
            $prtk = $_GET['protokol'];
            
            $selectprtk = $idofcup[0]."_".$prtk;
            
            $idi = 'id';
            $tablrow = $_POST['tabl'];
            $oldval = trim($_POST['old_val']);
            
            $field = isset($_POST['field']) ? $_POST['field'] : '';
            $value = mysqli_real_escape_string($link, $_POST['new_val']);
            $value = trim($value);
            
            if ($_POST['tabl'] == 'protokol_review'){
                $tablrow = $_POST['tabl'].$selectprtk;
                $idi = 'identity';
            } else if ($_POST['tabl'] == 'protokol_squad'){
                $tablrow = $_POST['tabl'].$selectprtk;
                $idi = 'id';
              if ($field != 'pos'){
                    $value = (int)$value;
                }
            } else {
                $tablrow = "calendar".$idofcup[0];
            }        
            
            $idy = (int)$_POST['id'];
            
            $query = "UPDATE `$tablrow` SET `$field` = '$value' WHERE `$idi` = $idy";
            $res = mysqli_query($link, $query);
            
            if ($field=='result'){
                $query = "UPDATE `cuptable3` SET `diffgoal` = 'goal'-'lostgoal'";
                $res = mysqli_query($link, $query);
            }
            //===================================================
            if ($_POST['tabl'] == 'protokol_squad'){ // АВТОЗАПОЛНЕНИЕ ЗАВИСИМЫХ СТАТОВ
                
                $pl_change = $value - $oldval;
                $query = "UPDATE `$players` SET `$field` = `$field`+'$pl_change' WHERE `$idi` = $idy";
                $res = mysqli_query($link, $query); // ИЗМЕНЕНИЯ В ОБЩЕЙ СТАТЕ НА "n" 
                
                if ($field=='goal' || $field=='assist'){
                    $query = "UPDATE `$players` SET `point` = `goal`+`assist` WHERE `$idi` = $idy";
                    $res = mysqli_query($link, $query);
                    $query = "UPDATE `$tablrow` SET `point` = `goal`+`assist` WHERE `$idi` = $idy";
                    $res = mysqli_query($link, $query);
                } // МЕНЯЕМ ОЧКИ ИГРОКОВ ЕСЛИ СОСТАВЛЯЮЩИЕ ПОДВЕРГЛИСЬ ИЗМЕНЕНИЯМ
                
                if ($field=='goal' || $field=='shot'){
                    $query = "UPDATE `$players` SET `shotperc`=`goal`*100 / `shot` WHERE `shot`!='0' AND `$idi` = $idy";
                    $res = mysqli_query($link, $query);
                } // МЕНЯЕМ % БВ
                
                if ($field=='wfaceoff' || $field=='lfaceoff'){
                    $query = "UPDATE `$players` SET `faceoffperc`=(`wfaceoff`*100 / (`wfaceoff`+`lfaceoff`)) WHERE (`wfaceoff`+`lfaceoff`)!='0' AND `$idi` = $idy";
                    $res = mysqli_query($link, $query);
                } // МЕНЯЕМ % Вбрасываний
                
                if ($field=='lostgoal' || $field=='allshot'){
                    $query = "UPDATE `$tablrow` SET `refshot`= 100-(`lostgoal`*100 / `allshot`) WHERE `pos`='Вр' AND `allshot`!='0' AND `$idi` = $idy";
                    $res = mysqli_query($link, $query);// В СКВАДЕ % ОБ
                    
                    $query = "UPDATE `$players` SET KN=`lostgoal` / `game` WHERE pos='Вр' AND `$idi` = $idy";
                    $res = mysqli_query($link, $query);// В ОБЩЕЙ ТАБЛИЦЕ КН
                    
                    $query = "UPDATE `$players` SET `refshot`= 100-(`lostgoal`*100 / `allshot`) WHERE `pos`='Вр' AND `allshot`!='0' AND `$idi` = $idy";
                    $res = mysqli_query($link, $query);// В ОБЩЕЙ ТАБЛИЦЕ
                } // МЕНЯЕМ КН и %ОБ
                
                
            }
            //===================================================
            if( mysqli_affected_rows($link)) return true;
                else return false;
           
       }
        
        function delete_row($link, $delete, $idofcup){
          $action = $_GET['action'];
        
          if ($action=="matchlist"){
             $id = 'id';
             $table = "calendar".$idofcup[0]; 
          } else if ($action=="game") {
             $id = 'identity';
             $id_r = $_GET['protokol'];
             $selectprtk = $idofcup[0]."_".$id_r;
             $table = "protokol_review".$selectprtk;
             if ($_GET['squad']=='true') {
                 $id = 'id';
                 $table = "protokol_squad".$selectprtk;
                 $get = $_GET['delete'];
                 $players = "players".$idofcup;
                 $query = "UPDATE `$players` SET `game` = `game`-'1' WHERE `$id`=$get";
                 $res = mysqli_query($link, $query);
             }
          } else if ($action=="roster"){
             $id = 'id';
             $table = 'players'.$idofcup;
          }
          $query = sprintf("DELETE FROM $table WHERE $id='%d'", $delete);
          $result = mysqli_query($link, $query);  
          
          if ($action=="matchlist"){
             header("Location: data_edit.php?action=matchlist");
          } else if ($action=="game") {
             header("Location: data_edit.php?action=game&protokol=".$id_r."&table=".$table);
          } else if ($action=="roster"){
             header("Location: data_edit.php?action=roster&team=".$_GET['team']);
          }
        }
        
        function add_row($link, $idofcup){
             $id_r = $_GET['protokol'];
             $selectprtk = $idofcup[0]."_".$id_r;
             $table = 'protokol_review'.$selectprtk;
             $query = "INSERT INTO `$table` (time, team, move, player, motion, etc) VALUES ('', '', '', '', '', '')";
             $res = mysqli_query($link, $query);
             $_GET['addrow'] = 'false';
             header("Location: data_edit.php?action=game&protokol=".$id_r);
        }

        function get_articles($link){
            $news = "newsdinamo";
            
            $query = "SELECT * FROM $news ORDER BY identity DESC";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['identity']]=$row;
            }
            return $options;
        }

        function get_article($link){
            $news = "newsdinamo";
            $page = $_GET['page'];
            $query = "SELECT * FROM $news WHERE `identity`=$page";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['identity']]=$row;
            }
            return $options;
        }
        
        function update_articles($link){
            $table = "newsdinamo";
            
            $field = isset($_POST['field']) ? $_POST['field'] : '';
            
            $value = mysqli_real_escape_string($link, $_POST['new_val']);
            $value = trim($value);
            
            $id = (int)$_POST['id'];
            $query = "UPDATE `$table` SET `$field` = '$value' WHERE `identity` = $id";
            $res = mysqli_query($link, $query);
           
            
            if( mysqli_affected_rows($link)) return true;
                else return false;
        }
?>
