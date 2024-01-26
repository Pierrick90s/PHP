<?php

require("cnxnbdd.php");

if (isset($_POST['ok'])) {
    // $id =$_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $age = $_POST['age'];
    $role =$_POST['role'];
    

    $mdphash = password_hash($mdp, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT IGNORE INTO user (nom, prenom, email, mdp, age, role)
  VALUES (:nom, :prenom, :email, :mdp, :age, :role)");

$stmt->execute([
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':email' => $email,
    ':mdp' => $mdphash,
    ':age' => $age,
    ':role' => $role
]);

if ($stmt->rowCount() == 0) {
    echo "L'adresse e-mail est déjà utilisée.";
} else {
    echo "Inscription terminée !";
    echo '<a href="index.php"><button>Retour</button></a>';
}

}




?>