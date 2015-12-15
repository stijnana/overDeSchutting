<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tristan
 * Date: 11-12-2015
 * Time: 09:22
 */


$today = date('d');
?>
<div id="wrapperPrijsvraag">

    <div id="readMore"> </div>
    <div class="prijsvraagTitle">
        Prijsvraag
    </div>

    <div class="vandaag">
      <a href="<?php echo "?day=".$today."&page=top5";?>">  &#8656; Vandaag</a>
    </div>

    <div class="dotsPrijsvraag">
        <img src="images/dots.png">
    </div>

    <div class="fotoPrijs">
        <img src="images/placeholder.jpg" alt="">
    </div>

    <div id="wrapperText">
    <div class="artistPrijsvraag">
        <div id="numberArtist"><img src="images/97.png" alt=""></div>
        <div id="artist">Julien Clerc: Noe</div>
    </div>

    <div id="textPrijs">
        <b>Meedoen kan tot 12 juni 2011</b><br><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.<br/><br/>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </div>
    </div>


    <div id="heleVraag">
        <div id="vraag">VRAAG</div>
        Wat was het debuutalbum van Julien Clerc ?
    </div>

    <div class="prijsvraagTitleReaction">
        Doe mee aan deze prijsvraag
    </div>


    <div id="wrapperForm">
        <form action="" method="post">
            <div id="prijsvraagForm">Naam<br/></div>
            <input type="text" name="namePrijsvraag"><br/>

            <div id="prijsvraagForm">E-mail (wordt niet weergeven)<br/></div>
            <input type="text" name="emailPrijsvraag"><br/>

            <div id="prijsvraagForm">Antwoord<br/></div>
            <input type="text" name="antwoord"><br/><br>
            <input type="checkbox"><b>inschrijven voor de nieuwsbrief</b>

            <input type="submit" value="verstuur" class="verstuur">
        </form>
    </div>

