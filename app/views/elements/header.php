<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="icon" type="image/x-icon" href="<?= $_SERVER['BASE_URI'] ?>/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="<?= $_SERVER['BASE_URI'] ?>/css/style.css" />
    <script src="https://kit.fontawesome.com/5e096bed9b.js" crossorigin="anonymous"></script>
  </head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?= $router->generate('home') ?>">Pokédex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= $router->generate('home') ?>">Liste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $router->generate('types') ?>">Types</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Liste déroulante
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Autre action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Désactivé</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Chercher 151 Pokemons" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>
</nav>