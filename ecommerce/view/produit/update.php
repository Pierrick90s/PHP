<?php
require ("root.html");
?>

<form method='POST' action='produit/update2'>
<input type ='text' name='nom' value ='<?=$produit['nom'] ?>'>
<input type ='text' name='description' value ='<?=$produit['description'] ?>'>
<input type ='text' name='photo' value ='<?=$produit['photo'] ?>'>
<input type ='text' name='prix' value ='<?=$produit['prix'] ?>'>
<input type='hidden' name='id' value='<?=$produit['id'] ?>'>
<input type='submit' value='Modifier'>
</form>


