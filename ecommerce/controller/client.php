<?php

function liste() {

    require "model/client.php";
    $client = listeClient();
    require "view/client/liste.php";

}


function affiche($id) {
    require "model/client.php";
    $client = getOneClient($id);
    require "view/client/affiche.php";

}

function update() {
    $id = $_POST['id'];
    require "model/client.php";
    $client = getOneClient($id);
    require "view/client/update.php";

}
function update2() {
    require "model/client.php";
    updateOneClient($_POST);
    header("location:../client/liste") ;
}

function insert() {
    require "view/client/insert.php";
}

function insert2() {
    require "model/client.php";
    insertOneClient($_POST);
    header("Location: liste");
    exit;
}

function delete() { 
    require "model/client.php";
    deleteOneClient($_POST);
    header("Location: liste");
    exit;
}
?>