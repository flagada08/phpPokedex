<?php 
$listePokemons = $data['listePokemons'];
?>
<div class="row justify-content-around">
  <?php foreach ($listePokemons as $pokemon) : ?>
    <div class="card" style="width: 18rem;">
      <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumero() ?>.png" class="card-img-top" alt="<?= $pokemon->getNom() ?>">
      <h5 class="card-title">#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></h5>
    </div>
  <?php endforeach; ?>
</div>
