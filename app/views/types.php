<?php 
    $listeTypes = $data['listeTypes'];
?>

<h4>Cliquer sur un type pour voir tous les Pokemons de ce type</h4>

<div class="type-card row">
    <?php foreach ($listeTypes as $type) : 
        $typeURL = $router->generate(
            'type',
            [
                'id' => $type->getId()
            ]
        ); 
    ?>
    <div>
        <h2 class="badge badge-types" style="background: #<?= $type->getColor() ?>">
            <a class="btn btn-types" href="<?= $typeURL ?>"><?= $type->getName() ?></a>
        </h2>
    </div>
    <?php endforeach ?>
</div>

<a href="<?= $router->generate('home'); ?>" class="retour">Revenir à la liste</a>
