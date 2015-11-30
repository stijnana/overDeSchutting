<?php



$day = (empty($_GET['action'])) ? '' : $_GET['action'];
$querySongs =  "SELECT * FROM songs WHERE day='$day'";
$resultSongs = $mysqli->query($querySongs);

foreach($resultSongs as $value){
    echo $value['name'];
}

if ($_GET['action'] == ''){
    $date = date('d');
    header('Location: ?action='. $date . '');
}






