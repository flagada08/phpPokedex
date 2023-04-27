<?php
    $listePokemonsType = $data['listePokemonsType'];
?>

<div class="row justify-content-center">
  <?php foreach ($listePokemonsType as $pokemon) : 
    $pokemonURL = $router->generate(
      'type',
      [
          'id' => $pokemon[0]->getId()
      ]
    );
  ?>
    <div class="card" style="width: 18rem;">
      <a href="<?= $pokemonURL ?>">
        <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon[0]->getNumero() ?>.png" class="card-img-top" alt="<?= $pokemon[0]->getNom() ?>" style="padding: 10px;">
        <h5 class="card-title">#<?= $pokemon[0]->getNumero() ?> <?= $pokemon[0]->getNom() ?></h5>
      </a>
    </div>
  <?php endforeach; ?>
</div>