<?php

require ("root.html");

?>

<form method='POST' action='client/update2'>
<input type ='text' name='nom' value ='<?=$client['nom'] ?>'>
<input type ='text' name='prenom' value ='<?=$client['prenom'] ?>'>
<input type ='text' name='email' value ='<?=$client['email'] ?>'>
<input type ='text' name='password' value ='<?=$client['password'] ?>'>
<input type='hidden' name='id' value='<?=$client['id'] ?>'>
<input type='submit' value='Modifier'>


