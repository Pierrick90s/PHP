<?php

function liste( ) {

    require "model/professeur.php";
    $professeur = listeprofesseur();
    require "view/professeur/liste.php";

}


function affiche($id) {
    require "model/professeur.php";
    $professeur = getOneProfesseur($id);
    require "view/professeur/affiche.php";

}

function update($id) {
    require "model/professeur.php";
    $professeur = getOneProfesseur($id);
    require "view/professeur/update.php";

}
function update2() {
    require "model/professeur.php";
    updateOneProfesseur($_POST);
}

function insert() {
    require "view/professeur/insert.php";
}

function insert2() {
    require "model/professeur.php";
    insertOneProfesseur($_POST);
    header("Location: liste");
    exit;
}