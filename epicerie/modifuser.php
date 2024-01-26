<?php
require("cnxnbdd.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $role = $_POST['role'];

    $stmt = $pdo->prepare("UPDATE user SET nom = :nom, prenom = :prenom, email = :email, age = :age, role = :role WHERE id = :id");
    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':age' => $age,
        ':role' => $role,
        ':id' => $id
    ]);

    header("refresh:0;url=luser.php");

};
?>