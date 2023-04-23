<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\Utils\Database;

/**
 * Summary of Type
 * @author terence
 * @copyright (c) 2023
 */
class Types {
    private $id, $name, $color;    

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
     * Méthode permettant d'obtenir tous les enregistrements de la table choisie
     * @return array
     */
    public function getAll() {
        $sql = "SELECT * FROM pokedex.type";
        $query = Database::getPDO()->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
}
