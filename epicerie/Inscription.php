<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1> Formulaire d'inscription : </h1>

<form method="POST" action="traitement.php">
    <input type="text" id="nom" name="nom" placeholder="Nom" required>
    <br>

    <input type="text" id="prenom" name="prenom" placeholder="Prenom" required>
    <br>

    <input type="text" id="email" name="email" placeholder="E-mail" required>
    <br>

    <input type="text" id="mdp" name="mdp" placeholder="Mot de passe" required>
    <br>

    <input type="text" id="age" name="age" placeholder="Age" required>
    <br>

    <label for="role">Rôle :</label>
        <select id="role" name="role" required>
            <option value="ADMIN">Admin</option>
            <option value="CLIENT">Client</option>
            <option value="GERANT">Gérant</option>
        </select><br>
        
    <input type="submit" value="Valider l'inscription" name="ok">

</form>
        
    <a href="index.php"><button>Retour</button></a>

</body>
</html>