<?php
session_start();

$connected = isset($_SESSION['user']) && !empty($_SESSION['user']);

// Récup info user si connecté
if ($connected) {
    $utilisateur = $_SESSION['user'];
    $nom = $utilisateur['nom'];
    $prenom = $utilisateur['prenom'];
    $role = $utilisateur['role'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
</head>

<body>
     <?php
   if ($connected) {
        echo '<h1>Bienvenue ' . $prenom . ' ' . $nom . ' (' . $role . ')' . '</h1>';
        // Si connecté affiche bouton "Mon profil"
        echo '<a href="profil.php"><button>Mon profil</button></a>';

        // Bouton déconnexion
        echo '<form method="POST" action="deconnexion.php">';
        echo '<input type="submit" value="Se déconnecter" name="deconnexion">';
        echo '</form>';
   }else{

        // Sinon afficher boutons inscription / connexion
        echo '<h1>Bienvenue sur le site</h1>';
        echo '<a href="inscription.php"><button>S\'inscrire</button></a>';
        echo '<a href="connexion.php"><button>Se connecter</button></a>';
    }
    ?>
</body>

</html>