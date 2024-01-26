<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="admin.php"><button>Retour</button></a>
    <h1>Liste produits :</h1>
    <hr>

</body>
</html>

<?php

require("cnxnbdd.php");

echo "<form method='POST' action='ajoutproduit.php'>";
        echo "<h2>" . "Ajouter un produit :" . "</h2>";

        echo "<input type='text' name='nom' value='' placeholder='Nom du produit' required>";

        echo "<input type='text' name='description' value='' placeholder='Description' required>";

        echo "<input type='text' name='prixht' value='' placeholder='Prix HT en euros' required>";


        echo "<input image='text' name='photo' value='' placeholder='Url image' required>";

        echo "<input type='number' name='stock' value='' placeholder='Quantité en stock' required>";

        echo "<input type='hidden' name='id' value=''>";
        echo "<input type='submit' value='Ajouter'>";
        echo "</form>";

        echo "<hr>";


function getAllProduit() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM produit");
    $stmt->execute();
    $res = $stmt->fetchAll();

    foreach ($res as $row) {
        echo "<form method='POST' action='modifproduit.php'>";
        echo "<h2>" . $row['nom'] . "</h2>";

        echo "<input type='text' name='nom' value='" . $row['nom'] . "' required>";

        echo "<input type='text' name='description' value='" . $row['description'] . "' required>";

        echo "<input type='text' name='prixht' value='" . $row['prixht'] . " € "."'required>";


        echo "<input image='text' name='photo' value='" . $row['photo'] . "' required>";

        echo "<input type='number' name='stock' value='" . $row['stock'] . "' required>";

        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Modifier'>";
        echo "</form>";
        
        echo "<form method='POST' action='delproduit.php'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Supprimer'>";
        echo "</form>";
        echo "<hr>";

    }
}

getAllProduit();
?>