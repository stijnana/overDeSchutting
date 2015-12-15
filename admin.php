<?php

session_start();

include '../../../../../schutting_config.php';
include 'includes/database.php';
include 'views/headCms.html';

$action = isset($_GET['cmsAction']) ? $_GET['cmsAction'] : '';

switch ($action) {
    case 'login':
        include 'models/login_submit.php';
        break;

    case 'commentCms':
        include 'models/getCommentsCms.php';
        include 'views/commentsCms.php';
        break;

    case 'logout':
        include 'models/logout.php';
        include 'views/loginAdmin.php';
        break;

    default:
        include 'views/loginAdmin.php';
        break;
}
