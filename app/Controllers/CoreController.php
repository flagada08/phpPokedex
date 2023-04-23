<?php

namespace Pokedex\Controllers;

/**
 * Summary of CoreController
 * @author terence
 * @copyright (c) 2023
 */
class CoreController {
    private $router;

    /**
     * Summary of __construct
     * @param mixed $pRouter
     */
    public function __construct($pRouter)
    {
        $this->router = $pRouter;
    }

    /**
     * Cette fonction permet d'afficher la vue passée en paramètre avec le header et le footer
     * @param string $fichier
     * @param array $data
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
