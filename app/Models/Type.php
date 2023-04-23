<?php

namespace Pokedex\Models;
use PDO;
use Pokedex\Utils\Database;

/**
 * Summary of Type
 * @author terence
 * @copyright (c) 2023
 */
class Type {
    private $id, $pokemon_numero, $type_id, $name, $color;
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of pokemon_numero
     */ 
    public function getPokemon_numero()
    {
        return $this->pokemon_numero;
    }

    /**
     * Set the value of pokemon_numero
     *
     * @return  self
     */ 
    public function setPokemon_numero($pokemon_numero)
    {
        $this->pokemon_numero = $pokemon_numero;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
    
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
    
    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;
        
        return $this;
    }

    /**
     * Méthode permettant d'obtenir un ou des enregistrements de la table choisie en fonction du numéro de Pokemon
     * @param mixed $pokemon_numero
     * @return array
     */
    public function getOne($pokemon_numero) {
        $sql = "SELECT * FROM pokedex.type, pokedex.pokemon_type 
        WHERE type.id = pokemon_type.type_id
        AND pokemon_type.pokemon_numero=".$pokemon_numero;
        $query = Database::getPDO()->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS,__CLASS__);
    }
}