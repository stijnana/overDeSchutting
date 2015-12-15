<div id="detailSongCommentWrapper">
    <div id="commentFormWrapper">
        <form action="?day=<?php echo $day; ?>&page=upload&song=<?php echo $song; ?>" method="post">
            <div id="comment">Naam</div>
            <input type="text" name="user_name">

            <div id="comment">E-mail (wordt niet getoond)</div>
            <input type="text" name="email"><br>

            <div id="comment">Website</div>
            <input type="text" name="website"><br>

            <div id="comment">Reactie</div>
    <textarea rows="8" cols="60" name="comment">
    </textarea>

            <div id="commentBox">
                <input type="checkbox"> Gegevens onthouden<br>
                <input type="checkbox"> Mail me bij nieuwe reacties
            </div>
            <div id="commentButton"><input value="VERSTUUR" type="submit"></div>

        </form>
    </div>
    <div class="commentTitlePosted">
        Reacties op dit bericht [<?php echo $rows ?>]
    </div>

    <div class="dotsCommentPosted">
        <img src="images/dots.png">
    </div>

    <?php
    /**
     * Created by IntelliJ IDEA.
     * User: Tristan
     * Date: 8-12-2015
     * Time: 08:50
     */

    //laat alle comments zien
    foreach ($commentList as $value) {
        echo "<div id='commentWrapper'>";
        echo "<div id='commentName'>" . $value['username'] . "</div>";
        echo "<div id='commentStamp'>" . $value['timestamp'] . "</div>";
        echo "<div class='commentMessage'>" . $value['comment'] . "</div>";
        echo "<div class='dotsCommentSplitter'>
        <img src='images/dots.png'>
        </div>";
        echo "<div id='warningText'><a href='#'>Waarschuw de reactie over deze</a></div>";
        echo "</div>";
    }

    ?>

</div>



