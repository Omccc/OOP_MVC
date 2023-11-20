<?php
namespace App\Models;
use App\Models\Table;

class User extends AbstractTable{
    private ?string $name = null;
    private ?string $firstName = null;
    private ?string $mail = null;
    private ?string $password = null;
    private ?array $roles = [];



    public function  setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    
    public function setFirstname($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstname(){
        return $this->firstName;
    }

    
    public function  setMail($mail){
        $this->mail = $mail;
    }

    public function getMail(){
        return $this->mail;
    }


    
    public function  setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }


    public function  setRoles($roles){
        $this->roles = $roles;
    }

    public function getRoles(){
        return $this->roles;
    }

    public function toArray(){
    $userArray =[
    $this->name,
    $this->mail,
    password_hash($this->password, PASSWORD_DEFAULT)
    ];
    return $userArray;    
}




    public function validate() : array
    {
        $errors = [];
        /**
         * Pléthore de vérifications dans tous les sens
         */

         //si le nom est pas inférieur à 3 caractères => error
        if(strlen($this->name) < 3 ) 
        {
            $errors[] = "Le champs nom est obligatoire, merci!";
        }

         //Si l'email n'est pas bien formé
        if(!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) 
        {
        $errors[] = "Veuillez renseigner une adresse email valide svp!";
        }

          //Si l'email n'est pas bien formé
          if(strlen($this->password) < 4 ) 
          {
          $errors[] = "Le mot-de-passe doit être moins de 3 caractères, merci!";
          }



    return $errors;


}


}