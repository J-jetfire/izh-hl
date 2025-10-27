<?php
        function get_teamlist($link){

            $table = "cuptable";
            
            $query = "SELECT * FROM `$table` ORDER BY identity";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['identity']]=$row;
            }
            return $options;
        }
        
        function new_game($link, $date, $time, $place, $home, $away, $idofcup) {
            
        $table = "cuptable".$idofcup;
        $calendar = "calendar".$idofcup[0];
        $players = "players".$idofcup;
        $news = "news";
        $users = "tz_members";
        
        $sql = "SELECT * FROM `cupstats` WHERE cup='$idofcup'"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $season = $row['season'];  // ДОСТАЕМ ТЕКУЩИЙ КУБОК
                $league = $row['league']; // ДОСТАЕМ ТЕКУЩИЙ КУБОК
                $part = $row['part'];
             }
//        $part = "Регулярный чемпионат";
        $date = trim($date);
        $time = trim($time);
        $place = trim($place);
        $home = trim($home);
        $away = trim($away);
        //==================
        $logohome = "";
        $logoaway = "";
        $result = "-";
           
        if($date == '')
            return false;
        
        //================== ДОСТАЁМ ЛОГОТИПЫ
           
        $sql4 = "SELECT * FROM `$table` WHERE `team`='$home'" ;
        $records4 = mysqli_query($link,$sql4);
                   while($row4 = mysqli_fetch_array($records4)){
                        $logohome = $row4['logo'];
                   }
        $sql4 = "SELECT * FROM `$table` WHERE `team`='$away'" ;
        $records4 = mysqli_query($link,$sql4);
                   while($row4 = mysqli_fetch_array($records4)){
                        $logoaway = $row4['logo'];
                   }

        // //==================   ВЫПОЛНЯЕМ ЗАПРОС ДОБАВЛЕНИЯ МАТЧА

        $sql44 = "INSERT INTO `$calendar` (`id`, `season`, `league`, `part`, `date`, `time`, `place`, `home`, `away`, `result`, `video`, `photo`, `logohome`, `logoaway`, `equiphome`, `equipaway`, `home1g`, `home2g`, `home3g`, `home4g`, `home5g`, `homeg`, `home1s`, `home2s`, `home3s`, `home4s`, `homes`, `home1bs`, `home2bs`, `home3bs`, `home4bs`, `homebs`, `home1f`, `home2f`, `home3f`, `home4f`, `homef`, `home1p`, `home2p`, `home3p`, `home4p`, `homep`, `away1g`, `away2g`, `away3g`, `away4g`, `away5g`, `awayg`, `away1s`, `away2s`, `away3s`, `away4s`, `aways`, `away1bs`, `away2bs`, `away3bs`, `away4bs`, `awaybs`, `away1f`, `away2f`, `away3f`, `away4f`, `awayf`, `away1p`, `away2p`, `away3p`, `away4p`, `awayp`) VALUES (NULL, '$season', '$league', '$part', '$date', '$time', '$place', '$home', '$away', '$result', '', '', '$logohome', '$logoaway', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";

        $records44 = mysqli_query($link, $sql44);

       
        $sql4 = "SELECT * FROM `$calendar` ORDER BY id DESC LIMIT 1" ;
        $records4 = mysqli_query($link,$sql4);
            while($row4 = mysqli_fetch_array($records4)){
                        $prtk = $row4['id'];
                   }
        
        $selectprtk = $idofcup[0]."_".$prtk;
        $query ="CREATE TABLE IF NOT EXISTS protokol_review$selectprtk
        (
            identity INT(11) AUTO_INCREMENT PRIMARY KEY,
            time VARCHAR(50),
            team VARCHAR(150),
            move VARCHAR(150),
            player VARCHAR(150),
            motion VARCHAR(150),
            etc VARCHAR(50)
        )";
        $result2 = mysqli_query($link, $query);
            
        $query ="ALTER TABLE protokol_review$selectprtk AUTO_INCREMENT = 3";
        $result2 = mysqli_query($link, $query);    
            
        $query ="CREATE TABLE IF NOT EXISTS protokol_squad$selectprtk
        (
            identity INT(11) AUTO_INCREMENT PRIMARY KEY,
            num INT(11),
            pos VARCHAR(11),
            name VARCHAR(50),
            sname VARCHAR(50),
            goal INT(11),
            assist INT(11),
            point INT(11),
            plusminus INT(11),
            shot INT(11),
            bshot INT(11), 
            wfaceoff INT(11),
            lfaceoff INT(11),
            penalty INT(11),
            allshot INT(11),
            refshot INT(11),
            lostgoal INT(11),
            team VARCHAR(150),
            id INT(11)
        )";
        $result2 = mysqli_query($link, $query);
            
        if(!$result2)
                die(mysqli_error($link));
    
        return true;
       }

        function new_player($link, $sname, $name, $tname, $pos, $num, $team, $height, $weight, $hand, $birthdate, $idofcup) {
        
        $players = "players".$idofcup[0];
        $sql = "SELECT * FROM `$players` ORDER BY `identity` DESC LIMIT 1"; // ОПРЕДЕЛЕНИЕ id новой команды
        $records = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($records)){
                $id = $row['identity'];
             }
        $id=$id+1;
        $sql = "SELECT * FROM `cupstats` WHERE cup='$idofcup'"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $season = $row['season'];  // ДОСТАЕМ ТЕКУЩИЙ КУБОК
                $league = $row['league']; // ДОСТАЕМ ТЕКУЩИЙ КУБОК
                $part = $row['part']; // ДОСТАЕМ ТЕКУЩИЙ КУБОК
             }
        $name = (string)$name;
        $sname = (string)$sname;
        $sname = trim($sname);
        $name = trim($name);
        $tname = trim($tname);
        $pos = trim($pos);
        $team = trim($team);
        $hand = trim($hand);

        $today = date("Y-m-d");

        $errors = []; // Store all foreseen and unforseen errors here
        
        $id = 0;
        $status = "г.Ижевск";
        //==================
        $img = "img/cup4/logotypes/1.png";
        





        // $t = "INSERT INTO `$players` (`sname`, `id`, `name`, `tname`, `pos`, `num`, `team`, `height`, `weight`, `hand`, `birthdate`, `img`, `status`, `league`, `season`, `part`, `add_date`, `game`, `goal`, `assist`, `point`, `plusminus`, `shot`, `shotperc`, `bshot`, `wfaceoff`, `lfaceoff`, `faceoffperc`, `penalty`, `allshot`, `refshot`, `lostgoal`, `KN`, `ge`, `gb`, `gm`, `gwin`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')";
        
        // $query = sprintf($t, mysqli_real_escape_string($link, $sname), mysqli_real_escape_string($link, $id), mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $tname), mysqli_real_escape_string($link, $pos), mysqli_real_escape_string($link, $num), mysqli_real_escape_string($link, $team), mysqli_real_escape_string($link, $height), mysqli_real_escape_string($link, $weight), mysqli_real_escape_string($link, $hand), mysqli_real_escape_string($link, $birthdate), mysqli_real_escape_string($link, $img), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $league), mysqli_real_escape_string($link, $season), mysqli_real_escape_string($link, $part), mysqli_real_escape_string($link, $today), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0.00'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'), mysqli_real_escape_string($link, '0'));
        
        // $result2 = mysqli_query($link, $query);   



        $sql44 = "INSERT INTO `$players` (`identity`, `id`, `img`, `birthdate`, `league`, `part`, `season`, `team`, `num`, `pos`, `name`, `sname`, `tname`, `game`, `goal`, `assist`, `point`, `plusminus`, `shot`, `shotperc`, `bshot`, `wfaceoff`, `lfaceoff`, `faceoffperc`, `penalty`, `allshot`, `refshot`, `lostgoal`, `KN`, `height`, `weight`, `status`, `hand`, `ge`, `gb`, `gm`, `gwin`, `add_date`) VALUES (NULL, '0', '$img', '$birthdate', '$league', '$part', '$season', '$team', '$num', '$pos', '$name', '$sname', '$tname', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.00', '$height', '$weight', '$status', '0', '0', '0', '0', '0', '$today')";

        $records44 = mysqli_query($link, $sql44);

        // echo $sql44;
        // exit;

        $sql4 = "UPDATE `$players` SET id=identity WHERE `id`='0'" ;
        $records4 = mysqli_query($link,$sql4); 
        }
       
        function new_team($link, $img, $team, $idofcup) {
            
        $table = "cuptable".$idofcup;
            
        $img = trim($img);
        $team = trim($team);
        //==================
        $sql = "SELECT * FROM `$table` ORDER BY identity DESC LIMIT 1"; // ОПРЕДЕЛЕНИЕ id новой команды
        $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $identity = $row['identity'];
             }
        $identity++;
        //===============================================  
        if($team == '')
            return false;
        //================== LOGOTYPE ====================
        $imgtype = $_FILES['img']['type'];
        if ($imgtype=='image/jpeg') {
            $imgtype = 'jpeg';
        } else if ($imgtype=='image/jpg') {
            $imgtype = 'jpg';
        } else if ($imgtype=='image/png') {
            $imgtype = 'png';
        } else { $imgtype = 'png'; }
        $imgname = $identity.'.'.$imgtype;
        $tmpimgname = $_FILES['img']['tmp_name'];
        
        $pluploaddir = 'img/cup'.$idofcup.'/logotypes/';
        $playeruploaddir = $pluploaddir.$imgname;
        // ДИРЕКТОРИЯ ДОБАВЛЕНИЯ КАРТИНКИ   
        $uploaddir = 'C:/OSPanel/domains/template/shl/img/cup'.$idofcup.'/logotypes/';
        $uploadfile = $uploaddir.$imgname;
        
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
        //==================
        $img = $playeruploaddir;
        if ($img == 'img/cup'.$idofcup[0].'/logotypes/'){
            $img = 'img/logotypes/temp.png';
        }   
           
        $t = "INSERT INTO `$table` (logo, team) VALUES ('%s', '%s')";
    
        $query = sprintf($t, mysqli_real_escape_string($link, $img), mysqli_real_escape_string($link, $team));
    
        $result = mysqli_query($link, $query);
        
        if(!$result)
                die(mysqli_error($link));
    
        return true;
       }

        function new_roster($link, $img, $sname, $name, $tname, $pos, $num, $team, $height, $weight, $hand, $birthdate, $idofcup){
        
        $table = "cuptable".$idofcup;
        $players = "players".$idofcup[0];
            
        $sql = "SELECT * FROM `cupstats` WHERE cup='$idofcup'"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
        $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $season = $row['season'];  // ДОСТАЕМ ТЕКУЩИЙ КУБОК
                $league = $row['league']; // ДОСТАЕМ ТЕКУЩИЙ КУБОК
                $part = $row['part']; // ДОСТАЕМ ТЕКУЩИЙ КУБОК
             }
        // выбираем логотип команды    
        $sql4 = "SELECT * FROM `$table` WHERE `team`='$team'" ;
        $records4 = mysqli_query($link,$sql4);
                   while($row4 = mysqli_fetch_array($records4)){
                        $imgofteam = $row4['logo'];
                   }
        
        $today = date("Y-m-d");  // TODAY's DATE
        $status = "г.Ижевск"; // CITY OF PLAYER
        //$team = 'Команда';        

    foreach ($sname as $key => $key2) {

        $sql44 = "INSERT INTO `$players` (`identity`, `id`, `img`, `birthdate`, `league`, `part`, `season`, `team`, `num`, `pos`, `name`, `sname`, `tname`, `game`, `goal`, `assist`, `point`, `plusminus`, `shot`, `shotperc`, `bshot`, `wfaceoff`, `lfaceoff`, `faceoffperc`, `penalty`, `allshot`, `refshot`, `lostgoal`, `KN`, `height`, `weight`, `status`, `hand`, `ge`, `gb`, `gm`, `gwin`, `add_date`) VALUES (NULL, '0', '$imgofteam', '$birthdate[$key]', '$league', '$part', '$season', '$team', '$num[$key]', '$pos[$key]', '$name[$key]', '$sname[$key]', '$tname[$key]', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.00', '$height[$key]', '$weight[$key]', '$status', '0', '0', '0', '0', '0', '2020-10-02')";

        $records44 = mysqli_query($link, $sql44);


    }
            
            
        $sql4 = "UPDATE $players SET id=identity WHERE `id`='0'" ;
        $records4 = mysqli_query($link,$sql4);
            
          
        return true;
       }

        function new_article($link, $img, $title, $content){

        $news = "newsdinamo";
        $today = date("Y-m-d");
        $imgrename = date("h-i_d-m-Y");
        $imgrename = (string)$imgrename;
        //
           
        //$title = trim($title);
        //$content = trim($content);
        //$imgrename = trim($imgrename);
        
        if($title == '')
            return false;
        
        //==================
        //=======================================================================
           
        $imgtype = $_FILES['img']['type'];
        if ($imgtype=='image/jpeg') {
            $imgtype = 'jpeg';
        } else if ($imgtype=='image/jpg') {
            $imgtype = 'jpg';
        } else if ($imgtype=='image/png') {
            $imgtype = 'png';
        } else { $imgtype = 'png'; }
        $imgname = $imgrename.'.'.$imgtype;
        //$imgname = $_FILES['img']['name'];
        $tmpimgname = $_FILES['img']['tmp_name'];
        
        $pluploaddir = 'img/news/';
        $playeruploaddir = $pluploaddir.$imgname;
        // ДИРЕКТОРИЯ ДОБАВЛЕНИЯ КАРТИНКИ   
        $uploaddir = 'C:/OSPanel/domains/template/shl/img/news/';
        $uploadfile = $uploaddir.$imgname;
        
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
        $img = $playeruploaddir;     
        //========================================================================  
        $t = "INSERT INTO $news (img, title, text, date) VALUES ('%s', '%s', '%s', '%s')";
    
        $query = sprintf($t, mysqli_real_escape_string($link, $img), mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $today));
    
        $result2 = mysqli_query($link, $query);
        
        if(!$result2)
                die(mysqli_error($link));
    
        return true;
       }