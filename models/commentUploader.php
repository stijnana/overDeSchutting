<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 8-12-2015
 * Time: 08:51
 */

$user = (empty($_POST['user_name'])) ? '' : $_POST['user_name'];
$comment = (empty($_POST['comment'])) ? '' : $_POST['comment'];
$song_id = (empty($_GET['song'])) ? '' : $_GET['song'];
$website = (empty($_POST['website'])) ? '' : $_POST['website'];
$email = (empty($_POST['email'])) ? '' : $_POST['email'];

//insert de geplaatste comment in de database
$queryComments = "INSERT INTO comment (username,comment,song_id,website,email) VALUES ('$user','$comment','$song_id','$website','$email')";
$resultComments = $mysqli->query($queryComments);


