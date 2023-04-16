<?php
require '../vendor/autoload.php';

// var_dump($_SERVER);

$uri = $_SERVER['REQUEST_URI'];
/**
 * DEBUT-TEST
 */
// if ($uri === '/edsa-pokedex/types') {
//     require '../app/views/types.php';
// }
// elseif ($uri === '/edsa-pokedex/') {
//     require '../app/views/home.php';
// } else {
//     echo 404;
// }
/**
 * FIN-TEST
 */

// Initialisation et affectation de la variable $router avec l'objet 
// (class) AltoRouter
$router = new AltoRouter();

// Utilisation de la méthode map() sur l'objet (class) AltoRouter 
// stocké dans la variable $router, afin de lui passer en arguments, 
// la méthode GET, l'url et le fichier que l'on souhaite retourner
$router->map('GET', '/edsa-pokedex/', 'home', 'home');
$router->map('GET', '/edsa-pokedex/detail', 'detail', 'detail');
$router->map('GET', '/edsa-pokedex/types', 'types', 'types');
$router->map('GET', '/edsa-pokedex/type/[*:slug]-[i:id]', 'type', 'type');

// Initialisation et affectation de la variable $match 
// avec la méthode match() de l'objet (class) AltoRouter
$match = $router->match();
// Condition qui vérifie que le résultat de la méthode match() 
// est différent de false
if ($match !== false) {
    require '../app/views/elements/header.php';
    // Condition qui vérifie que le contenu de la variable $match 
    // peut être appelée comme une fonction, grâce à la fonction PHP : 
    // is_callable()
    if (is_callable($match['target'])) {
        // Fonction call_user_func_array() qui permet d'appeler 
        // une fonction de rappel (callback) en premier paramètre, 
        // et un tableau de paramètres, en deuxième paramètre
        // Argument 1 : la cible, argument 2 : les paramètres
        call_user_func_array($match['target'], $match['params']);
    } else {
        // Initialisation et affectation de la variable $params
        // afin de passer les paramètres de la méthode match
        // à la vue appelée grâce au require
        $params = $match['params'];
        require "../app/views/{$match['target']}.php";
    }
    
    require '../app/views/elements/footer.php';
} else {
    echo 'Ma super 404 - (en construction)';
}
