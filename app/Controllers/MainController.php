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
     * Cette méthode affiche le détail d'un Pokemon
     * 
     * @return void
     */
    public function detail($params) {
        $id = $params['id'];
        $pokemon = new Pokemon;
        $detailPokemon = $pokemon->getOne($id);

        $this->show('detail', ['detailPokemon' => $detailPokemon]);
    }

    /**
     * Cette méthode affiche la liste des Types de Pokemons
     *
     * @return void
     */
    public function types() {
        $types = new Types;

        $this->show('types', ['listeTypes' => $types]);
    }
}
