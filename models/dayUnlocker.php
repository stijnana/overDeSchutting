<?php

function unlock()
{
<<<<<<< HEAD
    $date = date('d');
    $days = 2;
    $maxDays = 24;
    $arrayDays = array('', '', '');

    while ($days < $maxDays) {

        if ($days <= $date - 1) {
            //stop de dagen die al geweest zijn in de array
            $arrayDays[0] .= "<span id='daysPast'><a href='?day=" . $days . "&page=top5'>" . $days . "</a></span><span id='bar'>|</span>";
        } elseif ($days - $date < $maxDays) {
            //stop de dagen die nog moeten komen in de array
            $arrayDays[1] .= "<span id='daysToCome'>" . ($days + 1) . "</span> <span id='bar'> | </span>";
        }
        $days = $days + 1;
    }
    //zet de dag van vandaag in de array
    $arrayDays[2] .= "<span id='thisDay'><a href='?day=$date&page=top5'> $date </a></span><span id='bar'> | </span>";

    //zet de get weer op de van vandaag als je verder gaat dan de dagen die beschikbaar zijn
    if ($_GET['day'] > $date) {
        header("location: ?day=$date&page=top5");
    }
    //zet bij het laden van de pagina de dag op de dag van vandaag
    if (!$_GET['day']) {
        header("location: ?day=$date&page=top5");
    }

    return $arrayDays;
=======
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
>>>>>>> origin/master

}


