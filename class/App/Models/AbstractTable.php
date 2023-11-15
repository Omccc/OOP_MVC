<?php

namespace App\Models;

/**
 * Abstract class Table
 * @package App\Models\AbbstractTable  
 */

abstract class AbstractTable  // on ne peut pas l'instancier, mais on va baser nos autres tables dessus
{
    protected ?int $id = null; //permet de gérer l'id

    public function __construct(?int $id = null) //permet d'initialiser l'id de la table

    {
        $this-> id = $id; 
    }

    /**
     * @return int | null
     */

    public function getId():?int
    {
        return $this->id;
    }
    /**
     * @param int | null $id
     */

    public function setId(?int $id): void
    {
        $this->id = $id;
  
    
}