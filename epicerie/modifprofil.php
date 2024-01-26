<?php
session_start();

if (isset($_SESSION['user'])) {
    //formulaire de modifi
    echo '<form method="POST" action="modifier.php">';
    echo '<input type="text" name="nouveau_nom" placeholder="Nouveau nom" required><br>';
    echo '<input type="text" name="nouveau_prenom" placeholder="Nouveau prénom" required><br>';
    echo '<input type="text" name="nouveau_email" placeholder="Nouvel e-mail" required><br>';
    echo '<input type="text" name="nouveau_age" placeholder="Nouvel âge" required><br>';

    // selection rôle
    echo '<label for="nouveau_role">Nouveau rôle :</label>';
    echo '<select id="nouveau_role" name="nouveau_role" required>';
    echo '<option value="ADMIN">Admin</option>';
    echo '<option value="CLIENT">Client</option>';
    echo '<option value="GERANT">Gérant</option>';
    echo '</select><br>';

    echo '<input type="submit" value="Enregistrer les modifications" name="modifier">';
    echo '</form>';

    echo '<a href="profil.php"><button>Annuler modification</button></a>';
} else {
    echo "<p>Informations utilisateur non disponibles.</p>";
    echo '<a href="index.php"><button>Retour</button></a>';
}
?>