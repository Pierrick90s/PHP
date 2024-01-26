<?php

function listeProduit(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM produit");
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
}

function getOneProduit($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM produit WHERE id = ?");
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row;

}

function updateOneProduit($up){
    require "connect.php";
    $id = $up['id'] ;
    $nom = $up['nom'];
    $description= $up['description'];
    $photo = $up['photo'];
    $prix = $up['prix'];
    $sql = $pdo->prepare("UPDATE `produit` SET `nom` = ?, `description` = ?, `photo` = ?, `prix` = ? WHERE `produit`.`id` = ?;");
    $sql->execute([$nom,$description,$photo,$prix,$id]);

}
function insertOneProduit($ins){
    require "connect.php";
    $nom = $ins['nom'];
    $description= $ins['description'];
    $photo = $ins['photo'];
    $prix = $ins['prix'];
    $stmt = $pdo->prepare("INSERT INTO `produit` (`nom`, `description`,`photo`,`prix`) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $description, $photo, $prix]);
}

function deleteOneProduit($del){
    require "connect.php";
    $id = $del['id'];
    $stmt = $pdo->prepare("DELETE FROM produit WHERE id = ?");
    $stmt->execute([$id]);
}
?>