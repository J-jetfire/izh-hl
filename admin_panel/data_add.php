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
    // ФАЙЛ ДОБАВЛЕНИЯ ДАННЫХ
    require_once "header/connect.php"; // функция подключения
    require_once "functions/addfunctions.php";
    //require_once "../modals/users.php"; // функции
    $link = db_connect(); // подключение к базе данных через функцию
    
           $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
             }


    if (isset($_GET['action'])) // проверка ГЕТ-параметров
            $action = $_GET['action'];
        else
            $action=""; // проверка ГЕТ-параметров
    if (isset($_GET['amt'])) { // проверка ГЕТ-параметров       // $amt => amount => кол-во игроков
            $amt = $_GET['amt']; $amt=(int)$amt; }
        else $amt=0; // проверка ГЕТ-параметров
//================================================================================
        if($action == "game"){ // Если ГЕТ-параметр = добавление
        if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            new_game($link, $_POST['date'], $_POST['time'], $_POST['place'], $_POST['home'], $_POST['away'], $idofcup); // функция добавления данных с запросами
            header('Location: data_add.php'); // перенаправление после успешного добавления данных
        }
        include("views/data_add_game.php"); // страница добавления новых данных
//===========================================================================================
    }  
//================================================================================
        else if($action == "player"){ // Если ГЕТ-параметр = добавление
        if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            new_player($link, $_POST['sname'], $_POST['name'], $_POST['tname'], $_POST['pos'], $_POST['num'], $_POST['team'], $_POST['height'], $_POST['weight'], $_POST['hand'], $_POST['birthdate'], $idofcup); // функция добавления данных с запросами
            header('Location: data_add.php'); // перенаправление после успешного добавления данных
        }
        include("views/data_add_player.php"); // страница добавления новых данных
//============================================================================================
    } 
 //===========================================================================================   
        else if($action == "team"){ // Если ГЕТ-параметр = добавление
        if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            new_team($link, $_POST['img'], $_POST['team'], $idofcup); // функция добавления данных с запросами
            header('Location: data_add.php'); // перенаправление после успешного добавления данных
        }
        include("views/data_add_team.php"); // страница добавления новых данных
    }
//============================================================================================
        else if($action == "roster" && $amt == 0){  // $amt => amount => кол-во игроков
        include("views/data_add_roster.php");
        }

        else if($action == "roster" && $amt > 0){ // Если ГЕТ-параметр = добавление // $amt => amount => кол-во игроков
        if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            new_roster($link, $_POST['img'], $_POST['sname'], $_POST['name'], $_POST['tname'], $_POST['pos'], $_POST['num'], $_POST['team'], $_POST['height'], $_POST['weight'], $_POST['hand'], $_POST['birthdate'], $idofcup); // функция добавления данных с запросами
            header('Location: data_add.php'); // перенаправление после успешного добавления данных
        }
        include("views/data_add_roster.php"); // страница добавления новых данных
    
//============================================================================================
        } 
//============================================================================================
        else if($action == "article"){ // Если ГЕТ-параметр = добавление
            if(!empty($_POST)){ // если пост данные не пустые, то выполняем код
            new_article($link, $_POST['img'], $_POST['title'], $_POST['content']); // функция добавления данных с запросами
            header('Location: data_add.php'); // перенаправление после успешного добавления данных
        }
        include("views/data_add_article.php"); // страница добавления новых данных
        }
//============================================================================================
        // $users = users_all($link); // фунция отображения данных
        else {
        include("views/data_add_view.php"); // обычный вид
        }
?>
