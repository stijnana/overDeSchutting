<?php

include '../../../../../../schutting_config.php';

$db_host = DB_HOST;
$db_user = DB_USERNAME;
$db_pass = DB_PASSWORD;
$db_name = DB_NAME;;


if (!isset($_GET['id'])) {
    echo 'Geen reactie geselecteerd';
    ?>
    <a href="admin.php?cmsAction=commentsCms">Terug naar overzicht</a>
    <?php
    exit;
}


$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error) {
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}


$sql = "DELETE FROM comment WHERE id = ?";

if (!$result = $con->prepare($sql)) {
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id'])) {
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute()) {
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0) {
    echo "De reactie is met succes verwijdert.";
    ?>
    <a href="../admin.php?cmsAction=commentCms">Terug naar overzicht</a><br/>
    <a href="../admin.php?cmsAction=logout">Log uit</a>
    <?php
} else {
    echo "Reactie verwijderen mislukt.";
    ?>
    <a href="admin.php?cmsAction=commentsCms">Terug naar overzicht</a>
    <?php
}
