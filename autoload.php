<?php

spl_autoload_register(function ($className) { //on charge nos class avec le nom de la classe et le chemin du fichier. 
    $className = str_replace("\\","/", $className); 
    require './class/' . $className.'.php'; 
});

