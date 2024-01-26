<?php

foreach ($professeur as $prof) { ?>
    <h1><?= $prof['nom'] . " ". $prof['prenom']. " ". $prof['specialite']?></h1>
    <?php } ?>