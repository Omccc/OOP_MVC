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

}