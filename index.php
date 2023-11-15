<?php
//Attention on doit préciser au programme l'espace de nom (namespace) à utiliser
namespace App; //pour utiliser un namespace il faut au départ que les class l'utilisent aussi.

// Je vais chercher le Router se trouvant dans mon espace de nom
// dans le "dossier" (emplacement dans l'app) qui s'appelle Services
use App\Services\Router; 

// require_once "./class/Services/Router.php";


// On charge nos class automatiquement 
require_once("./autoload.php");

// On détermine quelle est la route ?PAGE
$router = new Router();
$page = $router->getPage(); //pour aller récuperer la page on utilise la méthode getPage()





//On charge le controller correspondant
// En déterminant le nom du controller ex HomeController
$controllerName = 'App\Controllers\\'. ucfirst($page) . 'Controller'; //ucfirst() permet de changer la première lettre en majuscule
// On peut déterminer ensuite le fichier à charger
// ex : ./class/Controllers/HomeController.php
// $controllerPath = './class/Controllers/' . $controllerName . '.php'; //on fait une concaténation de la page et le nom du controller correspondant dans la variable $controllerName, détermine le fichier qu'on va charger avec un require, on lui met le bon parcours

// On charge le fichier correspondant
// require_once $controllerPath;

//On instancie la class ex : new HomeController();
$controller = new $controllerName();

//On peut donc éxecuter la méthode index() du controller correspondant
$data = $controller->index();
var_dump($data); 