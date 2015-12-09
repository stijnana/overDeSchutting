<?php

function unlock()
{
    $date = 4;
    $days = 2;
    $maxDays = 25;
    $arrayDays = array();

    while ($days < $maxDays) {
        if ($days <= $date) {
            array_push($arrayDays, "<a  href=\"?day=" . $days . "\">" . $days . "</a> ");

        } else {
            array_push($arrayDays, "<span id='daysToCome'>" . $days . "</span> ");
        }
        $days = $days + 1;
    }
    if ($_GET['day'] == '') {
        $date = date('d');
        header('Location: ?day=' . $date . '');
    }
    return $arrayDays;
}

echo "<div id='kalender'>";
$array = unlock();

foreach($array as $value){
    echo $value;
}

echo "</div>";



