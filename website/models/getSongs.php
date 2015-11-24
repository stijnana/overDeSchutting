<?php

$day = $_GET['action'];

$querySongs =  "SELECT * FROM songs WHERE day='$day'";
$resultSongs = $mysqli->query($querySongs);

foreach($resultSongs as $value){
    echo $value['name'];
}
