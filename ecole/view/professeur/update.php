
<form method='POST' action='../update2'>
<input type ='text' name='nom' value ='<?=$professeur['nom'] ?>'>
<input type ='text' name='prenom' value ='<?=$professeur['prenom'] ?>'>
<input type ='text' name='specialite' value ='<?=$professeur['specialite'] ?>'>
<input type='hidden' name='id' value='<?=$professeur['id'] ?>'>
<input type='submit' value='Modifier'>
</form>


