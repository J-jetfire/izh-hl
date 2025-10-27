<?php   
        require_once "../header/connect.php"; // функция подключения
        $link = db_connect(); // подключение к базе данных через функцию
        $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
             }
             
        function update_players_2($link, $idofcup) {
        
        $players = "players".$idofcup[0];
        $idy = (int)$_POST['id'];
        
        $query = "SELECT * FROM `$players` WHERE `id` = '$idy' LIMIT 1";
        $res = mysqli_query($link, $query);
            
        while($row = mysqli_fetch_array($res)){
            $name = $row['name'];
            $sname = $row['sname'];
        }    
        
            
            
        $imgrename = '';
        function encodestring($st){
$zamena=array('а'=>'a','А'=>'a','б'=>'b','Б'=>'b','в'=>'v','В'=>'v','г'=>'g','Г'=>'g','д'=>'d','Д'=>'d',
'е'=>'e','Е'=>'e','ё'=>'e','Ё'=>'e','ж'=>'j','Ж'=>'j','з'=>'z','З'=>'z','и'=>'i','И'=>'i','й'=>'y','Й'=>'y',
'к'=>'k','К'=>'k','л'=>'l','Л'=>'l','м'=>'m','М'=>'m','н'=>'n','Н'=>'n','о'=>'o','О'=>'o','п'=>'p','П'=>'p',
'р'=>'r','Р'=>'r','с'=>'s','С'=>'s','т'=>'t','Т'=>'t','у'=>'u','У'=>'u','ф'=>'f','Ф'=>'f','х'=>'h','Х'=>'h',
'ц'=>'c','Ц'=>'c','ч'=>'ch','Ч'=>'ch','ш'=>'sh','Ш'=>'sh','щ'=>'sh','Щ'=>'sh','ъ'=>'','Ъ'=>'','ы'=>'i','Ы'=>'i',
'ь'=>'','Ь'=>'','э'=>'e','Э'=>'e','ю'=>'u','Ю'=>'u','я'=>'ya','Я'=>'ya',' '=>'_','?'=>'');
foreach($zamena as $key=>$valq){
$st=str_replace($key,$valq,$st);
}
return $st;
  }
        $imgrename = $sname.'_'.$name.$idy;
        $imgrename = encodestring($imgrename);
        $imgrename = strtolower($imgrename);
            
        $currentDir = getcwd();
        $uploadDirectory = "img/cup".$idofcup."/players/";

        $errors = []; // Store all foreseen and unforseen errors here

        $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

        $fileName = $_FILES['img']['name'];
        $fileSize = $_FILES['img']['size'];
        $fileTmpName  = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $fileExtension = strtolower(end(explode('.',$fileName)));
        
        $imgrename = $imgrename.".".$fileExtension;
        $pathtosql = $uploadDirectory.$imgrename;// путь в бд для колонки имг
            
        $uploadPath = $currentDir ."/../../". $uploadDirectory . $imgrename;   
        //// $uploadPath;
            if(file_exists($uploadPath)) { unlink($uploadPath); } 
        //    
        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                //echo "The file " . $imgrename . " has been uploaded";
            } else {
                //echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                //echo $error . "These are the errors" . "\n";
            }
        }
        //======================================================= 
        $img = $pathtosql;
        //======================================================= 
        //=======================================================
        
        $query = "UPDATE `$players` SET `img` = '$img' WHERE `id` = '$idy' AND `img`!='$img'";
            $res = mysqli_query($link, $query);
        //=======================================================
        if(!$res)
                die(mysqli_error($link));
        return true;
            
       }
             
        if (update_players_2($link, $idofcup)){
        exit("SAVED");
        } else {
        exit("ERROR");
        }
//
?>