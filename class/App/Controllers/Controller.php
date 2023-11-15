<?php

namespace App\Controllers;

class Controller{

    protected $variable = "Truc";

    protected function render($templatePath, $data){ //ne pas mettre en private sinon erreur
        
        
    $data[] = $this->variable;
    ob_start(); //il sert à mettre le contenu de la page dans un fichier temporaire
    include $templatePath;
    $template = ob_get_clean(); //ob_get_clean() permet de supprimer le fichier temporaire
    include "./views/layout.phtml";


 }
}