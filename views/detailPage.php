<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 6-12-2015
 * Time: 11:00
 */

echo "<div id='detailWrapper'>";

echo "<div class='topFiveTitleDetail'>
In de Radio 1 Tour Top 100
</div>";
echo "<div id='detailPrevious'>";


$songCount = $song - 1;
//Laat de vorige song zien indien die bestaat
if ($previousRank) {
    $songPrevious = $resultDetailSong->fetch_assoc();
    echo "";
    echo "<a href='?day=$day&page=detail&song=" . ($song - 1) . "'>
    <div id='songPreviousImage'><img src='" . $songPrevious['numberimage'] . ".png'></div>
    <div id='songPreviousTitle'>" . $songPrevious['song'] . "<a></div>";
}

//echo "<a href='?day=$day&page=detail&song=100'>".($value['rank'] +99)."<a>";

echo "</div>";
//laat het huidige nummer zien
echo "<div id='detailSong'>";
$thisSong = $resultDetailSong->fetch_assoc();
echo "<div id='detailSongImage'><img src='" . $thisSong['numberimage'] . ".png'></div>
    <br><div id='detailSongTitle'>" . $thisSong['artist'] . " : " . $thisSong['song'] . "</div>
    <div id='songVideo'><iframe width=\"687\" height=\"420\"src=\"https://www.youtube.com/embed/7pKrVB5f2W0\"></iframe></div>
    <div id='detailSongDesc'>" . $thisSong['description'] . "</div>
   <span id='detailSocialMedia'><img src='images/iconMedia.png'></span>";
echo "</div>";

echo "<div id='detailNext'>";

$songCount1 = $song + 1;
//laat het volgende nummer zien indien die bestaat
if ($nextRank < 101) {
    $nextSong = $resultDetailSong->fetch_assoc();
    echo "<a href='?day=$day&page=detail&song=" . ($songCount1) . "'><img src='" . $nextSong['numberimage'] . ".png'>
        <div id='songNextTitle'>" . $nextSong['song'] . "</a></div>";
    //echo "<a href='?day=$day&page=detail&song=1'>".($value['rank'] -99)."<a>";


}
echo "</div>";
?>

<div class="commentTitle">
    Reageer op dit bericht
</div>

<div class="dotsComment">
    <img src="images/dots.png">
</div>
</div>

<div class="vandaag">
    <a href=" <?php $today = date('d');
    echo "?day=" . $today . "&page=top5"; ?>">  &#8656; Vandaag</a>
</div>


