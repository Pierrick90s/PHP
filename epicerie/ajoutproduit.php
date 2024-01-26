<?php
require("cnxnbdd.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nom= $_POST['nom'];
    $description = $_POST['description'];
    $prixht = $_POST['prixht'];
    $photo = $_POST['photo'];
    $stock = $_POST['stock'];

    $stmt = $pdo->prepare("INSERT INTO produit (nom, description, prixht, photo, stock) VALUES (:nom, :description, :prixht, :photo, :stock)");
    $stmt->execute([
        ':nom' => $nom,
        ':description' => $description,
        ':prixht' => $prixht,
        ':photo'=> $photo,
        ':stock' => $stock
    ]);

    header("refresh:0;url=lproduit.php");

    exit;
}
?>