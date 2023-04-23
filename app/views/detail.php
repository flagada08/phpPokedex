<?php 
  $detailPokemon = $data['detailPokemon'];
  $typePokemon = $data['typePokemon'];
?>

<h1 class="detail-title">Détails de <?= $detailPokemon['nom']; ?></h1>

<div class="row justify-content-center align-items-center">

  <div class="picture-card">
    <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $detailPokemon['numero'] ?>.png" class="card-img" alt="<?= $detailPokemon['numero'] ?>" style="padding: 10px;">
  </div>

  <div class="card-stats col-md-6">
    
    <h5 class="card-title">#<?= $detailPokemon['numero'] ?> <?= $detailPokemon['nom'] ?></h5>

    <div id="types">
        <?php foreach ($typePokemon as $type) : ?>
          <span class="badge badge-detail" style="background: #<?= $type->getColor() ?>;">
            <?= $type->getName() ?>
          </span>
        <?php endforeach; ?>
    </div>

    <h5 class="card-title">Stats</h5>

    <div class="stats d-flex justify-content-between">
      <div class="stats-text">
        <p>PV</p>
        <p>Attaque</p>
        <p>Défense</p>
        <p>Attaque Spé</p>
        <p>Défense Spé</p>
        <p>Vitesse</p>
      </div>

      <div class="values-text">
        <p><?= $detailPokemon['pv'] ?></p>
        <p><?= $detailPokemon['attaque'] ?></p>
        <p><?= $detailPokemon['defense'] ?></p>
        <p><?= $detailPokemon['attaque_spe'] ?></p>
        <p><?= $detailPokemon['defense_spe'] ?></p>
        <p><?= $detailPokemon['vitesse'] ?></p>
      </div>

      <div class="stats-progress-bar">
        <div class="progress">
          <div class="progress-bar" style="width: <?= $detailPokemon['pv'] * 100 / 255 ?>%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width: <?= $detailPokemon['attaque'] * 100 / 255 ?>%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width: <?= $detailPokemon['defense'] * 100 / 255 ?>%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width: <?= $detailPokemon['attaque_spe'] * 100 / 255 ?>%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width: <?= $detailPokemon['defense_spe'] * 100 / 255 ?>%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar" style="width: <?= $detailPokemon['vitesse'] * 100 / 255 ?>%;"></div>
        </div>
      </div>
    </div>

  </div>
  
</div>

<a href="<?= $router->generate('home'); ?>" class="retour">Revenir à la liste</a>