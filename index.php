<?php

<<<<<<< HEAD
$day = (empty($_GET['day'])) ? '' : $_GET['day'];
$page = (empty($_GET['page'])) ? '' : $_GET['page'];
$song = (empty($_GET['song'])) ? '' : $_GET['song'];


include '../../../../../schutting_config.php';
include 'includes/database.php';
=======
include 'includes/config.php';
include 'includes/database.php';
include "views/header.html";
include 'views/topFive.php';
>>>>>>> origin/master
include 'models/dayUnlocker.php';
include "views/header.php";


switch ($page) {
    case 'detail':
        include 'models/detailPagination.php';
        include 'models/getComment.php';
        include 'views/detailPage.php';
        include 'views/comments.php';
        break;

    case 'top5':
        include 'models/getSongs.php';
        include 'views/topFive.php';
        break;

    case 'upload':
        include 'models/commentUploader.php';
        header("Location: ?day=$day&page=detail&song=$song");
        break;

    case 'top100':
        include 'models/top100.php';
        include 'views/top100List.php';
        break;

    case'prijsvraag':
        include 'models/uploadAnswer.php';
        include 'views/prijsvraag.php';
        break;

    case 'testimonials':
        include 'models/getTestimonial.php';
        include 'views/testimonials.php';
        break;

    default:
        include 'models/getSongs.php';
        include 'views/topFive.php';

}







