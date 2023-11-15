<?php
namespace App\Models;


require_once("./Services/Database.php"); //intégrer le système de bdd partout

define("CONFIG_SITE_TITLE","Mon modèle MVC PHP"); //constante en PHP avec 2 paramètres : 2 chaines de caractères entre () 
define("CONFIG_ROUTES",
[

    //Charger les controllers
    "home" => "Home",
    "gallery" => "Gallery",
    "register" => "Register",
    "api" => "API JSON",
    "upload" => "Upload",
    
    "mail" => "Mail"
   



]);