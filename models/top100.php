<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 10-12-2015
 * Time: 12:22
 */

//selecteer alle songs met de rank's van hoog naar laag
$queryTopList = "SELECT * FROM song ORDER BY RANK DESC";
$resultTopList = $mysqli->query($queryTopList);

