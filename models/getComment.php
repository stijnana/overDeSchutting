<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 9-12-2015
 * Time: 12:32
 */

//selecteer de comment die staat bij de geopende song
$queryGetComment = "SELECT * FROM comment WHERE song_id=$song";
$resultGetComments = $mysqli->query($queryGetComment);

//laat zien hoeveel comments er bij een bepaalde song staan
$rows = $resultGetComments->num_rows;


$commentList = array();
//stop de resultaten in een array
while ($comment = $resultGetComments->fetch_assoc()) {
    $commentList[] = $comment;
}

