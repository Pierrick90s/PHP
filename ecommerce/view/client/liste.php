<a href="http://localhost/ecommerce/client/insert"><button>Ajout étudiant</button></a>
<a href="http://localhost/ecommerce/produit/liste"><button>Liste produits</button></a>


<?php

foreach ($client as $cli) { ?>
    <h1>Nom : <?= $cli['nom']?></h1><br>
    <h1> Prenom : <?= $cli['prenom']?></h1><br>
    <h1>Email :<?= $cli['email']?></h1><br>
    <h1>Mot de passe : <?= $cli['password']?><br>
    </h1>

    <form method='POST' action='update'>
    <input type='hidden' name='id' value='<?= $cli['id']?>'>
    <input type='submit' value='Modifier'>
    </form>

    <form method='POST' action='delete'>
    <input type='hidden' name='id' value='<?= $cli['id']?>'>
    <input type='submit' value='Supprimer'>
    </form>
    <hr>
    <?php } ?>
 
