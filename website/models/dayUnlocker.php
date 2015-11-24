<?php


function unlock()
{
    $month = cal_days_in_month(CAL_GREGORIAN, 7, 2011);
    $date = date("d");
    $days = 0;

    while ($days < $month) {
        if ($days <= $date) {
            echo "<a href=\"?action=" . $days . "\">" . $days . "</a><br>";
        } else {
            echo $days . "<br>";
        }
        $days = $days + 1;
    }
}

unlock();

