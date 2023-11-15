<?php

namespace App\Services; //notre espace de nom correspond à App se trouvant dans App\Services

/**
 * A very simple class router
 * based on $_GET['page']
 */
class Router{
    private $page;

    public function __construct(){ //on crée une méthode constructeur pour déterminer la page
        $this->setPage();
}


    public function setPage(){ //On crée la méthode setPage() pour charger la page correspondante
        $this->page = isset($_GET['page']) ? strtolower ($_GET['page']) : 'home' ; //on met une condition si la route n'est pas renseignée on renvoie la page home
    }


    public function getPage(){ //on crée une méthode pour récupérer la route
        return $this->page; //on renvoie la route

}

}