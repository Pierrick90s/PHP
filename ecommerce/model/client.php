<?php

function listeClient(){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM client");
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows;
}

function getOneClient($id){
    require "connect.php";
    $sql = $pdo->prepare("SELECT * FROM client WHERE id = ?");
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row;

}

function updateOneClient($up){
    require "connect.php";
    $id = $up['id'] ;
    $nom = $up['nom'];
    $prenom = $up['prenom'];
    $email = $up['email'];
    $password = $up['password'];
    $sql = $pdo->prepare("UPDATE `client` SET `nom` = ?, `prenom` = ?, `email` = ?, `password` = ?  WHERE `client`.`id` = ?;");
    $sql->execute([$nom,$prenom,$email,$password,$id]);
}

function insertOneClient($ins){
    require "connect.php";
    $nom = $ins['nom'];
    $prenom = $ins['prenom'];
    $email = $ins['email'];
    $password = $ins['password'];
    $stmt = $pdo->prepare("INSERT INTO `client` (`nom`, `prenom`,`email`,`password`) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom,$email,$password]);
}

function deleteOneClient($del){
    require "connect.php";
    $id = $del['id'];
    $stmt = $pdo->prepare("DELETE FROM client WHERE id = ?");
    $stmt->execute([$id]);
}


?>

