<?php

$link_address = "?cmsAction=delete";

//check of de user id bestaat
if (!isset($_SESSION['user_id'])) {
    echo "sorry u moet ingelogd zijn om deze pagina te bezoeken";
} else {
    ?>

    <table border='1'>
        <tr>
            <th>id</th>
            <th>reactie</th>
            <th>gebruiker</th>
            <th>email</th>
            <th>Verwijder &#x25BC;</th>
        </tr>
        <?php
        //laat alle comments zien, en geef de optie om te verwijderen
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['comment']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a href="models/deleteComment.php?id=<?php echo $row['id']; ?>">verwijder</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
