<?php
require("cnxnbdd.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prixht = $_POST['prixht'];
    $photo = $_POST['photo'];
    $stock = $_POST['stock'];

    $stmt = $pdo->prepare("UPDATE produit SET nom = :nom, description = :description, prixht = :prixht, photo = :photo, stock = :stock WHERE id = :id");
    $stmt->execute([
        ':nom' => $nom,
        ':description' => $description,
        ':prixht' => $prixht,
        ':photo' => $photo,
        ':stock' => $stock,
        ':id' => $id
    ]);

    header("refresh:0;url=lproduit.php");

};