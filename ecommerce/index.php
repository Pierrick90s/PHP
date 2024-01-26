<?php 


$route = $_GET['route'] ;


$tab = explode('/', $route);
$controller = $tab[0];
$action = $tab[1]; 
$arg = NULL;
if (isset($tab[2])) { 
    $arg=$tab[2]; 
}

require "controller/".$controller.".php";
if (isset($arg)) {
    $action($arg);

} else {
$action(); 
};




?>