<?php
<<<<<<< HEAD

echo "<div id='topFiveWrapper'>";
echo "<div class='topFiveTitle'>
Vandaag in de Radio 1 Tour Top 100
</div>";
//laat de 5 songs zien die op die dag beschikbaar gesteld zijn.
foreach ($resultSongs as $value) {
    echo "<div id='topFive'>
        <div id='topFiveImg'><img src='" . $value['songimage'] . "'></div>
        <div id='topFiveNumberImage'><img src='" . $value['numberimage'] . ".png'></div>
        <div id='topFiveArtist'><a href='?day=$day&page=detail&song=" . $value['rank'] . "'>" . $value['artist'] . " : " . $value['song'] . "</a></div>
        <div id='topFiveDesc'>" . $value['description'] . "</div>
        <div id='topFiveReadMore'>
            <span id='topFiveReadMoreImg'><img src='images/iconMessage.png'></span><span id='commentCount'> [0] </span> | <a href='?day=$day&page=detail&song=" . $value['rank'] . "'>Lees meer</a>
            <span id='topFiveSocialMedia'><img src='images/iconMedia.png'></span></div></div>";

}
echo "</div>";
=======
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Over de schutting</title>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

<div class="dots">
    <img src="images/dots.png">
</div>


<div class="topFiveTitle">
    Vandaag in de Radio 1 Tour Top 100
</div>

>>>>>>> origin/master
