<?php
require("cnxnbdd.php");

session_start();

if (isset($_SESSION['user'])) {
    $utilisateur = $_SESSION['user'];
    $id = $utilisateur['id'];

    $nouveau_nom = $_POST['nouveau_nom'];
    $nouveau_prenom = $_POST['nouveau_prenom'];
    $nouveau_email = $_POST['nouveau_email'];
    $nouveau_age = $_POST['nouveau_age'];
    $nouveau_role = $_POST['nouveau_role'];

    // Maj infos bdd
    $stmt = $pdo->prepare("UPDATE user SET nom = ?, prenom = ?, email = ?, age = ?, role = ? WHERE id = ?");
    $stmt->execute([$nouveau_nom, $nouveau_prenom, $nouveau_email, $nouveau_age, $nouveau_role, $id]);

    echo "Modification terminée !<br>";
    echo '<a href="index.php"><button>Retour à mon profil</button></a>';
        } else {
            echo "ID de l'utilisateur non défini.";
            echo '<a href="index.php"><button>Retour</button></a>';
 };

?>