<?php
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Over de schutting</title>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="wrapperHead">
    <div class="beeld">
        <img src="images/beeld.png">
    </div>

    <div class="balk">
        <img src="images/balk.png">
    </div>

    <div class="tt100Image">
        <img src="images/tt100Image.png">
    </div>

    <div class="actief">
        <img src="images/actief.png">
    </div>

    <div class="bar">
        <img src="images/nav.png">
    </div>

    <div id="search">
        <img src="images/search.png">
    </div>
    <div class="tt100link">
        <a href="<?php echo "?day=$day&page=top100"; ?> "><p>TOUR TOP 100</p></a>
    </div>

    <div class="radio1">
        <a target="_blank" href="http://www.radio1.nl/"><p>RADIO1.NL</p></a>
    </div>


    <div id="luister">
        <a target="popup" href="http://www.radio1.nl/popup/luisterlive"><img src="images/luister.png"></a>
    </div>


    <div class="subnav">
        <ul>
            <li>nieuwsbrief</li>
            <li>mobiel</li>
            <li>contact</li>
            <li>meld een fout</li>
            <li>frequenties</li>
            <li>help</li>
            <li>rss</li>
        </ul>
    </div>


    <div class="fiets">
        <img src="images/fietser.png">
    </div>

    <div class="stage">
        <img src="images/stage.png">
    </div>

    <div class="logo">
        <img src="images/logo.png">
    </div>
</div>

<div id="wrapperMaand">
    <div class="maand">
        <img src="images/maand.png">
    </div>

    <div class="dots">
        <img src="images/dots.png">
    </div>
</div>

<div id="wrapperBanner">
    <div class="bannertop100">
        <a href="<?php echo "?day=$day&page=top100"; ?>"> <img src="images/bannertop100.png"></a>
    </div>

    <div class="bannerprijsvraag">
        <a href="<?php echo "?day=$day&page=prijsvraag"; ?>"><img src="images/bannerprijsvraag.png"></a>
    </div>

    <div class="banner3">
        <img src="images/banner3.png">
    </div>


    <div class="bannerVijf">
        <img src="images/banner5.png">
    </div>

    <div class="bannertestimonials">
        <a href="<?php echo "?day=$day&page=testimonials"; ?>"><img src="images/bannertestimonials.png"></a>
    </div>
    <div id="twitter">
        <a class="twitter-timeline" href="https://twitter.com/big_ben_clock"
           data-widget-id="676673112512012288">#tour</a>
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>
    </div>
</div>


<div id="wrapperFooter">
    <div class="footer">
        <img src="images/footer.png">
    </div>
</div>


<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 6-12-2015
 * Time: 11:00
 */


echo "<div id='wrapperKalender'>";
$array = unlock();
echo '<span id=\'blackbg\'>';
echo $array[0];

echo '</span>';
echo $array[2];

echo $array[1];

echo "</div>";


?>

