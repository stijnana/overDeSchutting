<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 11-12-2015
 * Time: 09:22
 */
$namePrijs = (empty($_POST['namePrijsvraag'])) ? '' : $_POST['namePrijsvraag'];
$emailPrijsvraag = (empty($_POST['emailPrijsvraag'])) ? '' : $_POST['emailPrijsvraag'];
$antwoord = (empty($_POST['antwoord'])) ? '' : $_POST['antwoord'];

//insert de geplaatste comments
$sql = "INSERT INTO prijsvraag (username, email, antwoord)
VALUES ('" . $namePrijs . "',
        '" . $emailPrijsvraag . "',
        '" . $antwoord . "')";

$result = $mysqli->query($sql);
