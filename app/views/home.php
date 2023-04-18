<?php 
$listePokemons = $data['listePokemons'];
?>
<div class="row justify-content-around">
  <?php foreach ($listePokemons as $pokemon) : ?>
    <div class="card" style="width: 18rem;">
      <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumero() ?>.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nom</h5>
        <p class="card-text">Extrait du détail</p>
        <a href="<?= $router->generate('detail') ?>" class="btn btn-primary">Go</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
