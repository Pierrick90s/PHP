<a href="http://localhost/ecommerce/produit/insert"><button>Ajout produit</button></a>
<a href="http://localhost/ecommerce/client/liste"><button>Liste clients</button></a>


<?php

foreach ($produit as $prod) { ?>
    <h1>Nom : <?= $prod['nom']?><br> </h1>
    <h1>Description : <?= $prod['description']?><br></h1>
    <h1>Photo :</h1><img src="<?= $prod['photo']?>"><br>
    <h1>Prix : <?= $prod['prix']?><br></h1>
   

    <form method='POST' action='update'>
    <input type='hidden' name='id' value='<?= $prod['id']?>'>
    <input type='submit' value='Modifier'>
    </form>

    <form method='POST' action='delete'>
    <input type='hidden' name='id' value='<?= $prod['id']?>'>
    <input type='submit' value='Supprimer'>
    </form>
    <hr>
    <?php } ?>
 
