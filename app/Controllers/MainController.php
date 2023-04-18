<?php 

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Types;

class MainController extends CoreController {
     /**
     * Cette méthode affiche la liste des Pokemons
     *
     * @return void
     */
    public function home() {
        $pokemon = new Pokemon;
        $listePokemons = $pokemon->getAll();

        $this->show('home', ['listePokemons' => $listePokemons]);
    }

    /**
     * Cette méthode affiche la liste des Types
     *
     * @return void
     */
    public function types() {
        $types = new Types;

        $this->show('types', ['listeTypes' => $types]);
    }
}
