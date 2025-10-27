<?php           
                $id_l = $_POST['id_l'];
                require_once 'connect.php';
                $link = db_connect();
                $sql = "SELECT * FROM `cupstats` WHERE identity='$id_l'";
                $records = mysqli_query($link,$sql);
               while ($row = mysqli_fetch_array($records)){
                    $league = $row['league'];
                    $season = $row['season'];
                    $part = $row['part'];
                    $cuplogo = $row['cuplogo'];
                    $id = $row['cup'];
                }
                $sql = "UPDATE `cupselect` SET id='$id', league='$league', season='$season', part='$part', cuplogo='$cuplogo'";
                $records = mysqli_query($link,$sql);
?>