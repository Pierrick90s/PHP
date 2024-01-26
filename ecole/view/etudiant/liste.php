<a href="http://localhost/ecole/professeur/liste">Liste professeurs</a>
<a href="http://localhost/ecole/etudiant/insert">Ajout étudiant</a>
<?php

foreach ($etudiant as $student) { ?>
    <h1><?= $student['nom'] . " ". $student['prenom']?></h1>
    <hr>
    <?php } ?>
 
