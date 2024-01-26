<?php 

//http://localhost/ecole/index.php?route=etudiant/affiche/1

//dans l'url je tape http://localhost/ecole/index.php?route=etudiant/liste
$route = $_GET['route'] ;
//ici j'ai dans $route la cahine "etudiant/liste"

$tab = explode('/', $route);
$controller = $tab[0];// dans $controller j'ai "etudiants"
$action = $tab[1]; // dans $action j'ai "liste"
$arg = NULL;
if (isset($tab[2])) { // dans $arg j'ai 1 (pour l'url .../etudiant/affiche/1)
    $arg=$tab[2]; 
}

require "controller/".$controller.".php";
if (isset($arg)) {
    $action($arg);

} else {
$action(); // avec les parenthèse j'execute la fonction dont le nom est dans $action
    //Ici en l'occurence liste();
};




?>