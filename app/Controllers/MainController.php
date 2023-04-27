<?php 

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;
use Pokedex\Models\Types;

/**
 * Summary of MainController
 * @author terence
 * @copyright (c) 2023
 */
class MainController extends CoreController {
    /**
     * Cette méthode affiche la liste des Pokemon
     * @return void
     */
    public function home() {
        $pokemon = new Pokemon;
        $listePokemons = $pokemon->getAll();

        $this->show('home', ['listePokemons' => $listePokemons]);
    }
    
    /**
     * Cette méthode affiche le détail d'un Pokemon
     * @param mixed $params
     * @return void
     */
    public function detail($params) {
        $id = $params['id'];

        $pokemon = new Pokemon;
        $detailPokemon = $pokemon->getOne($id);
        
        $pokemon_numero = $detailPokemon['numero'];

        $type = new Type;
        $typePokemon = $type->getOne($pokemon_numero);

        $this->show('detail', ['detailPokemon' => $detailPokemon, 'typePokemon' => $typePokemon]);
    }

    /**
     * Cette méthode affiche la liste des Types de Pokemon
     * @return void
     */
    public function types() {
        $types = new Types;
        $listeTypes = $types->getAll();

        $this->show('types', ['listeTypes' => $listeTypes]);
    }

    /**
     * Cette méthode affiche le(s) Type(s) d'un Pokemon
     * @param mixed $params
     * @return void
     */
    public function type($params) {
        $id = $params['id'];
        $type = new Type;
        $typePokemon = $type->getOne($id);
        
        foreach ($typePokemon as $type) {
            $type_id = $type->getType_id();
            $pokemon = new Pokemon;
            $listePokemonsType[] = $pokemon->getAllByType($type_id);
        }
        
        $this->show('type', ['typePokemon' => $typePokemon, 'listePokemonsType' => $listePokemonsType]);
    }
}
