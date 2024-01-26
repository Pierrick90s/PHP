<?php

function liste() {

    require "model/etudiant.php";
    $etudiant = listeEtudiant();
    require "view/etudiant/liste.php";

}


function affiche($id) {
    require "model/etudiant.php";
    $etudiant = getOneEtudiant($id);
    require "view/etudiant/affiche.php";

}

function update($id) {
    require "model/etudiant.php";
    $etudiant = getOneEtudiant($id);
    require "view/etudiant/update.php";

}
function update2() {
    require "model/etudiant.php";
    updateOneEtudiant($_POST);
}

function insert() {
    require "view/etudiant/insert.php";
}

function insert2() {
    require "model/etudiant.php";
    insertOneEtudiant($_POST);
    header("Location: liste");
    exit;
}
?>