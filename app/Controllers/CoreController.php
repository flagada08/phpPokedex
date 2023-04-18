<?php

namespace Pokedex\Controllers;

class CoreController
{
    /**
     * @var AltoRouter
     */
    private $router;

    /**
     * Constructor
     *
     * @param AltoRouter $router
     */
    public function __construct($pRouter)
    {
        $this->router = $pRouter;
    }

    /**
     * Cette fonction permet d'afficher la vue passée en paramètre
     * avec le header et le footer
     *
     * @param string $fichier le nom de la vue à afficher
     * @param array $data les données à transmettre à la vue. (optionnel)
     * @return void
     */
    protected function show(string $fichier, array $data = [])
    {
        $router = $this->router;
        // $data est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/elements/header.php';
        require_once __DIR__ . '/../views/'.$fichier.'.php';
        require_once __DIR__ . '/../views/elements/footer.php';
    }
}
