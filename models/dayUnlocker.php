<?php

function unlock()
{
    $date = date('d') ;
    $days = 2;
    $maxDays = 25;

    while ($days < $maxDays) {
        if ($days <= $date) {
            echo "<a  href=\"?action=" . $days . "\">" . $days . "</a> ";
        } else {
            echo $days;
        }
        $days = $days + 1;


    }

}


echo "<div id=\"kalender\">";
echo "JULI &nbsp;&nbsp;&nbsp";
unlock();
echo "</div>";


