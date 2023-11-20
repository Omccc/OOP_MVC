<?php
// namespace App\Models;


// require_once("./Services/Database.php"); //intégrer le système de bdd partout

// define("CONFIG_SITE_TITLE","Mon modèle MVC PHP"); //constante en PHP avec 2 paramètres : 2 chaines de caractères entre () 
// define("CONFIG_ROUTES",
// [

//     //Charger les controllers
//     "home" => "Home",
//     "gallery" => "Gallery",
//     "register" => "Register",
//     "api" => "API JSON",
//     "upload" => "Upload",
    
//     "mail" => "Mail"
   


// ]);




const DB_HOST = "localhost";
const DB_PORT = "3333";
const DB_NAME = "my_mvc_bdd";
const DB_USER = "root";
const DB_PASS = "root";

const CONFIG_SITE_TITLE = "The OOP MVC PHP";
const CONFIG_ROUTES = [
    "home" => "Home",
    "gallery" => "Gallery",
    "user" => "User",
    "picture" => "Picture"
];