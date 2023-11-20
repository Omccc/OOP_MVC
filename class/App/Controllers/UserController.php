<?php

namespace App\Controllers; // namespace toujours avec des anti slashs

use App\Controllers\Controller;
use App\Models\User;
use App\Models\UserManager;

class UserController extends Controller{

    public function index(){
        // On instancie la class User pour créer un nouvel utilisateur (on crée un objet à partir de la class = instancier)

        $user = new User();

        //On anticipe d'éventuelles erreurs en créant un tableau 
        $errors = [];

        if(isset($_POST['submit'])){
            // Si le formulaire est validé on "hydrate" notre objet (on injecte les informations du formulaire)
            //avec les informations du formulaire
            $user = new User(); 
            $user->setName($_POST['name']);
            $user->setmail($_POST['mail']);
            $user->setPassword($_POST['password']);

            //SI la méthode validate() ne retourne pas d'erreurs on fait l'insert dans la table

            $errors = $user->validate();
            if (empty($errors)){

                //On transforme l'objet User courant en tableau
                //Avec uniquement les valeurs des propriétés
                // Voir la méthode toArray() dans User.php
                echo "<pre>";

                $userArray = $user->toArray(); //pour retourner un tableau 

                // print_r($userArray);
                //On instancie un UserManager pour gérer notre user
                $userManager = new UserManager();
                //On effectue l'insert dan la table
                $insert = $userManager->insert($userArray);

                //On est très content !

                echo "<p>C'est gang ! On a inséré l'utilisateur !</p>";
                echo "<p>Son id est {$insert->lastInsertId()}</p>";
                die();
            }

           
        }
        
        // $data = ['pierre', 'feuille', 'ciseaux']; //on crée un tableau de données
        // return $data; //on renvoie le tableau de données

        $this->render('./views/template_user_new.phtml',[    //là
            '_POST' => $_POST,  
            'user' => $user,
            'page' => $_GET['page'],
            'errors' => $errors
        ]);


    }

    }


