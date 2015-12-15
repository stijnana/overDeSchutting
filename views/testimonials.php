<?php

$today = date('d');

echo "<div class='topFiveTitleDetail'>
Tour Top lijsten van BN'ers
</div>";

echo '<div class="vandaag">
      <a href="?day=' . $today . '&page=top5">  &#8656; Vandaag</a>
    </div>';


echo "<div id='wrapperTest'>";
//laat alle testimonials zien
foreach ($resultTestimonial as $value) {
    echo "<div id='test'>
        <div id='testImg'><img src='" . $value['image'] . "'></div>
        <div id='testName'>" . $value['name'] . "</div>
        <div id='testDesc'>" . $value['desc'] . "</div>
        <div id='testReadMore'>
            <span id='testReadMoreImg'><img src='images/iconMessage.png'></span> [0] |<a href=''>Lees meer</a>
            <span id='testSocialMedia'><img src='images/iconMedia.png'></span></div></div>";
}
echo "</div>";

