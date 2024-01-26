<?php

function liste( ) {

    require "model/produit.php";
    $produit = listeProduit();
    require "view/produit/liste.php";

}


function affiche($id) {
    require "model/produit.php";
    $produit = getOneProduit($id);
    require "view/produit/affiche.php";

}

function update() {
    $id = $_POST['id'];
    require "model/produit.php";
    $produit = getOneProduit($id);
    require "view/produit/update.php";

}
function update2() {
    require "model/produit.php";
    updateOneProduit($_POST);
    header("location:../produit/liste") ;
}

function insert() {
    require "view/produit/insert.php";
}

function insert2() {
    require "model/produit.php";
    insertOneProduit($_POST);
    header("Location: liste");
    exit;
}
function delete() { 
    require "model/produit.php";
    deleteOneProduit($_POST);
    header("Location: liste");
    exit;
}