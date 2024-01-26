<?php

function listeProfesseur(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM professeur");
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
}

function getOneProfesseur($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM professeur WHERE id = ?");
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row;

}

function updateOneProfesseur($up){
    require "connect.php";
    $id = $up['id'] ;
    $nom = $up['nom'];
    $prenom= $up['prenom'];
    $specialite = $up['specialite'];
    $sql = $pdo->prepare("UPDATE `professeur` SET `nom` = ?, `prenom` = ?, `specialite` = ? WHERE `professeur`.`id` = ?;");
    $sql->execute([$nom,$prenom,$specialite,$id]);

}
function insertOneProfesseur($ins){
    require "connect.php";
    $nom = $ins['nom'];
    $prenom = $ins['prenom'];
    $specialite = $ins['specialite'];
    $stmt = $pdo->prepare("INSERT INTO `professeur` (`nom`, `prenom`,`specialite`) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $prenom, $specialite]);
}
?>