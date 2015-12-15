<?php

<<<<<<< HEAD
//selecteer de songs die matchen met de geselecteerde dag
$querySongs = "SELECT * FROM song WHERE day='$day'";
$resultSongs = $mysqli->query($querySongs);

=======


$day = (empty($_GET['day'])) ? '' : $_GET['day'];
$querySongs =  "SELECT * FROM song WHERE day='$day'";
$resultSongs = $mysqli->query($querySongs);


echo "<div class='topFiveWrapper'>";
foreach($resultSongs as $value){

    echo "<div id='topFive'><div id='topFiveImg'>
          <img src='" .$value['image']."'></div>
          <div id='topFiveNumberImage'><img src='".$value['numberimage']."'></div>
          <div id='topFiveArtist'>".$value['artist']."</div>
           <div id='topFiveTitle'>".$value['song']."</div>
          <div id='topFiveDesc'>".$value['description']."</div>
          <div id='topFiveReadMore'>
          <span id='topFiveReadMoreImg'><img src='images/iconMessage.png'></span> [0] | <a href='#'>Lees meer</a>
          <span id='topFiveSocialMedia'><img src='images/iconMedia.png'></span></div></div>" ;
}
echo "</div>";
>>>>>>> origin/master
