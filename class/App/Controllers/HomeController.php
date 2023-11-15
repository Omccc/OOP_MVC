<?php

namespace App\Controllers; // namespace toujours avec des anti slashs

use App\Controllers\Controller;
use App\Models\PictureManager;

class HomeController extends Controller{

    public function index(){

        $pic = new PictureManager();
        $data = $pic->getAll(3);
        // $data = ['pierre', 'feuille', 'ciseaux']; //on crée un tableau de données
        // return $data; //on renvoie le tableau de données
        $this->render('./views/template_home.phtml',[$data]);


    }




}