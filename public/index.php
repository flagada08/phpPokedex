<?php
// Import de l'autoload.php
require __DIR__.'/../vendor/autoload.php';

// Initialisation et affectation de la variable $uri avec 
// le paramètre REQUEST_URI, issu de la variable PHP réservée
// $_SERVER qui contient un tableau de différents paramètres
$uri = $_SERVER['REQUEST_URI'];

// Initialisation et affectation de la variable $router avec l'objet 
// (class) AltoRouter
$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

// Utilisation de la méthode map() de l'objet (class) AltoRouter, 
// précédemment stocké dans la variable $router afin de lui passer 
// en arguments, la méthode GET, l'url et le fichier que l'on souhaite 
// retourner, puis le nom (optionnel)
$router->map('GET', '/', [
    'method' => 'home',
    'controller' => 'Pokedex\Controllers\MainController'
], 'home');
$router->map('GET', '/detail/[i:id]', [
    'method' => 'detail',
    'controller' => 'Pokedex\Controllers\MainController'
], 'detail');
$router->map('GET', '/types', [
    'method' => 'types',
    'controller' => 'Pokedex\Controllers\MainController'
], 'types');
$router->map('GET', '/type/[*:slug]-[i:id]', 'type', 'type');

// Initialisation et affectation de la variable $match 
// avec la méthode match() de l'objet (class) AltoRouter
$match = $router->match();
// Condition qui vérifie que le résultat de la méthode match() 
// est différent de false
if ($match !== false) {
    //
    $controllerMatch = $match['target']['controller'];
    $methodMatch = $match['target']['method'];
    //
    $controller = new $controllerMatch($router);
    //
    $controller->$methodMatch($match['params']);
} else {
    // Sinon page 404
    echo 'Ma super 404 - (en construction)';
}
