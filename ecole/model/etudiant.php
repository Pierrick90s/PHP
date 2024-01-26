<?php

function listeEtudiant(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM etudiant");
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
}

function getOneEtudiant($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM etudiant WHERE id = ?");
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row;

}

function updateOneEtudiant($up){
    require "connect.php";
    $id = $up['id'] ;
    $nom = $up['nom'];
    $prenom = $up['prenom'];
    $sql = $pdo->prepare("UPDATE `etudiant` SET `nom` = ?, `prenom` = ? WHERE `etudiant`.`id` = ?;");
    $sql->execute([$nom,$prenom,$id]);

}

function insertOneEtudiant($ins){
    require "connect.php";
    $nom = $ins['nom'];
    $prenom = $ins['prenom'];
    $stmt = $pdo->prepare("INSERT INTO `etudiant` (`nom`, `prenom`) VALUES (?, ?)");
    $stmt->execute([$nom, $prenom]);
}

?>

