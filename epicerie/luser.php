<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="admin.php"><button>Retour</button></a>
    <h1>Liste utilisateurs :</h1>
    <hr>

</body>
</html>

<?php

require("cnxnbdd.php");

function getAllUser() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM user");
    $stmt->execute();
    $res = $stmt->fetchAll();

    foreach ($res as $row) {
        echo "<form method='POST' action='modifuser.php'>";
        echo "<h2>" . $row['nom'] . " " . $row['prenom'] . " " . "(".$row['role'].")" ."</h2>";

        // echo "<label for='nom'>Nom:</label>";
        echo "<input type='text' name='nom' value='" . $row['nom'] . "' required>";

        // echo "<label for='prenom'>Prénom:</label>";
        echo "<input type='text' name='prenom' value='" . $row['prenom'] . "' required>";

        // echo "<label for='email'>Email:</label>";
        echo "<input type='text' name='email' value='" . $row['email'] . "' required>";

        // echo "<label for='age'>Âge:</label>";
        echo "<input type='number' name='age' value='" . $row['age'] . "' required>";

        echo '<select id="role" name="role" required>';
        echo '<option value=' . $row['role'] . '>'. $row['role'] .'</option>';
        echo '<option value="CLIENT">CLIENT</option>';
        echo '<option value="GERANT">GERANT</option>';
        echo '<option value="ADMIN">ADMIN</option>';
        echo '</select><br>';

        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Modifier'>";
        echo "</form>";

        echo "<hr>";
    }
}

getAllUser();
?>