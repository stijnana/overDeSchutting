<div id="wrapperTop100">

    <span class='topFiveTitleDetail'>
        Complete Tour Top
        <span id="num1">1</span>
        <span id="num2">0</span>
        <span id="num3">0</span>
    </span>

    <div class="vandaag">
        <a href=" <?php $today = date('d');
        echo "?day=" . $today . "&page=top5"; ?>">  &#8656; Vandaag</a>
    </div>


    <?php
    echo "<div id='wrapperSongs'>";
    foreach ($resultTopList as $value) {

        $today = date('d');
        $day = $value['day'];
        //geef een random margin die de "zigzag" maakt
        $songMargin = rand(-10, 10);

        echo "<div id='numbersContainer'>";
        //zet de nummers neer die al beschikbaar zijn
        if ($day < $today) {
            echo '<span style="margin-left:' . $songMargin . 'px;" class="numberspassed">' . $value['rank'] . '</span>
                  <span id="top100artist"><a href="?day='.$day.'&page=detail&song=' . $value['rank'] . '";><p>' . $value['artist'] . ' ' . $value['song'] . '<p></a></span>';
            echo '<div id="dotsTop100"><img src="images/dots.png"></div>';
            //zet de nummers neer die nog niet beschikbaar zijn
        } else {
            echo '<span style="margin-left:' . $songMargin . 'px;" class="numbers">' . $value['rank'] . '</span>
                  <span id="top100artistPassed"><p>' . $value['artist'] . $value['song'] . '<p></a></span>';
            echo '<div id="dotsTop100"><img src="images/dots.png"></div>';

        }
        echo "</div>";
    }
    echo "</div>";
    ?>


</div>




