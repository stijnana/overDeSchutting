<?php

//selecteer de songs die matchen met de geselecteerde dag
$querySongs = "SELECT * FROM song WHERE day='$day'";
$resultSongs = $mysqli->query($querySongs);

