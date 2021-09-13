<?php

// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('requireClass');

// On crée une fonction pour faire les require de Classe
function requireClass($classe){
    require $classe . '.php';
}

include 'usages.php'; // On inclut les usages.

?>