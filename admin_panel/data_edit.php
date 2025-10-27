<?php
$dir = "../";
require_once $dir.'login/login.php';
if(!$_SESSION['usr']) {
    require_once '../header/topper2.php';
    
//header("Location: ../index.php");
die; 
} else if($_SESSION['usr']<>'superadmin_18ihl' && $_SESSION['usr']<>'admin_18ihl') {
    require_once '../header/topper2.php';
//header("Location: ../index.php");
die; 
} 

    // ФАЙЛ Редактирования ДАННЫХ

    require_once "header/connect.php"; // функция подключения
    $link = db_connect(); // подключение к базе данных через функцию
    $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
             }
    require_once "functions/editfunctions.php";
    //require_once "../modals/users.php"; // функции
    
    
    
    if (isset($_GET['action'])) // проверка ГЕТ-параметров
            $action = $_GET['action'];
        else
            $action=""; // проверка ГЕТ-параметров
    if (isset($_GET['delete'])){
        $delete = $_GET['delete'];
        if ($_GET['action']=='matchlist' || $_GET['action']=='game' || $_GET['action']=='roster') {
            $rows = delete_row($link, $delete, $idofcup);
        }
    } // проверка ГЕТ-параметров
            
    //if (isset($_GET['amt'])) { // проверка ГЕТ-параметров // $amt => amount => кол-во игроков
      //      $amt = $_GET['amt']; $amt=(int)$amt; }
    //    else $amt=0; // проверка ГЕТ-параметров
    
//============================================================================================
    if($action == "matchlist"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_matchlist.php"); // страница ред. данных
    } else if($action == "table"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_table.php"); // страница ред. данных     
    } else if($action == "choose"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_choose.php"); // страница ред. данных  
    } else if($action == "players"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_players.php"); // страница ред. данных     
        
     } else if($action == "roster"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_roster.php"); // страница ред. данных     
        
    } else if($action == "game"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_game.php"); // страница ред. данных  
//============================================================================================        
     } else if($action == "articles"){ // Если ГЕТ-параметр = ред.
        //if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            //edit_matchlist($link, $_POST['playday'], $_POST['date'], $_POST['day'], $_POST['time'], $_POST['place'], $_POST['division'], $_POST['home'], $_POST['away']); // функция ред. данных с запросами
            //header('Location: data_add.php'); // перенаправление после успешного ред. данных
        include("views/data_edit_articles.php"); // страница ред. данных  
        
    }  else {
        include("views/data_edit_view.php"); // обычный вид
        
    }

?>
