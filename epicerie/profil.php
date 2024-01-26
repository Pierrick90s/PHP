<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profil de l'utilisateur</h1>

    <?php
    session_start();

    if (isset($_SESSION['user'])) {
        $utilisateur = $_SESSION['user'];
        echo "<p>Nom : " . $utilisateur['nom'] . "</p>";
        echo "<p>Prénom : " . $utilisateur['prenom'] . "</p>";
        echo "<p>Email : " . $utilisateur['email'] . "</p>";
        echo "<p>Âge : " . $utilisateur['age'] . "</p>";
        echo "<p>Rôle : " . $utilisateur['role'] . "</p>";
        echo '<a href="modifprofil.php"><button>Modifier mon profil</button></a>';
        echo '<a href="index.php"><button>Retour</button></a>';
    } else {
        echo "<p>Informations utilisateur non disponibles.</p>";
        echo '<a href="index.php"><button>Retour</button></a>';
    }
    ?>
</body>
</html>