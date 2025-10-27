<?php 
$dir = "../";
require_once $dir.'login/login.php';
if(!$_SESSION['usr']) {
    require_once '../header/topper2.php';   

die; 
} else if($_SESSION['usr']<>'superadmin_18ihl' && $_SESSION['usr']<>'admin_18ihl' && $_SESSION['usr']<>'statist') {
    require_once '../header/topper2.php';
die; 
}
    require_once "header/connect.php"; // функция подключения
    $link = db_connect(); // подключение к базе данных через функцию
    $sql = "SELECT * FROM `cupselect`"; // ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО КУБКА И БАЗЫ
             $records = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($records)){
                $idofcup = $row['id'];
             }
    function get_gamelist($link, $idofcup){

            $calendar = "calendar".$idofcup[0];
            //$query = "SELECT * FROM $calendar ORDER BY id DESC";
            $query = "SELECT * FROM $calendar WHERE `result`='-' ORDER BY id";
            $result = mysqli_query($link, $query);
    
            if (!$result)
                die(mysqli_error($link));
    
            $options = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $options[$row['id']]=$row;
            }
            return $options;
        }
    $options = get_gamelist($link, $idofcup);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include_once "header/meta.php"; ?>
    <title>IceApp | ADMIN PANEL</title>
</head>

<body>
    <?php include_once "header/header.php"; ?>

    <div class="container" style="padding:0;text-align:center;">

        <?php if(!isset($_GET['protokol'])){ ?>
        <h3 class="cap_h3">ДОСТУПНЫЕ МАТЧИ</h3>
        <table class="zebra">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Кубок</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Хозяева</th>
                    <th>Гости</th>
                    <th>Счёт</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($options as $option): ?>
                <tr>
                    <td>
                        <?=$option['id']?>
                    </td>
                    <td>
                        <div>
                            <?=$option['part']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['date']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['time']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['home']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['away']?>
                        </div>
                    </td>
                    <td>
                        <div>
                            <?=$option['result']?>
                        </div>
                    </td>
                    
                    <td><a href="../webapp.php?protokol=<?=$option['id']?>" target="_blank"><button>ОТКРЫТЬ В ПРОГРАММЕ</button></a></td>
                    <td><a href="../webapppm.php?protokol=<?=$option['id']?>" target="_blank"><button>ОТКРЫТЬ +/-</button></a></td>
                    <td><a href="../protokol25.php?protokol=<?=$option['id']?>" target="_blank"><button>ОТКРЫТЬ НА САЙТЕ</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <?php include_once "header/footer.php"; ?>
</body>

</html>