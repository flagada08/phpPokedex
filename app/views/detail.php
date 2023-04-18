<?php 
$detailPokemon = $data['detailPokemon']; 
?>

<h1>Détails de <?= $detailPokemon['nom']; ?></h1>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $detailPokemon['numero'] ?>.png" class="card-img" alt="<?= $detailPokemon['numero'] ?>" style="padding: 10px;">
    </div>
    <div class="col-md-6">
        <h5 class="card-title">#<?= $detailPokemon['numero'] ?> <?= $detailPokemon['nom'] ?></h5>
        <div class="stats-card-text">
            <p>PV</p>
            <p>Attaque</p>
            <p>Défense</p>
            <p>Attaque Spé</p>
            <p>Défense Spé</p>
            <p>Vitesse</p>
        </div>
        <div class="values-card-text">
            <p><?= $detailPokemon['pv'] ?></p>
            <p><?= $detailPokemon['attaque'] ?></p>
            <p><?= $detailPokemon['defense'] ?></p>
            <p><?= $detailPokemon['attaque_spe'] ?></p>
            <p><?= $detailPokemon['defense_spe'] ?></p>
            <p><?= $detailPokemon['vitesse'] ?></p>
        </div>
    </div>
  </div>
