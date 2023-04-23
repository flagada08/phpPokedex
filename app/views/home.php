<?php 
  $listePokemons = $data['listePokemons'];
?>

<div class="row justify-content-center">
  <?php foreach ($listePokemons as $pokemon) : 
    $pokemonURL = $router->generate(
      'detail',
      [
          'id' => $pokemon->getId()
      ]
    );
  ?>
    <div class="card" style="width: 18rem;">
    <a href="<?= $pokemonURL ?>">
      <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumero() ?>.png" class="card-img-top" alt="<?= $pokemon->getNom() ?>" style="padding: 10px;">
    </a>
      <h5 class="card-title">#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></h5>
    </div>
  <?php endforeach; ?>
</div>
