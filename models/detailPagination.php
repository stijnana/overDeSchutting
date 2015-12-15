<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 6-12-2015
 * Time: 11:33
 */
$previousRank = $song - 1;
$nextRank = $song + 1;

//selecteer de waarde tussen de vorige en het volgende liedjes
$queryDetailSongs = "SELECT * FROM song WHERE rank BETWEEN $previousRank AND $nextRank ORDER BY rank ASC";
$resultDetailSong = $mysqli->query($queryDetailSongs);

















/*
*/
