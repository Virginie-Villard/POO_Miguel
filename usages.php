<?php

// création de $perso1
$perso1 = new Personnage(50,0);
var_dump($perso1);

// création de $perso2
$perso2 = new Personnage(200,0);
var_dump($perso2);

$perso3 = new Personnage(200,0);
var_dump($perso3);
//*$perso2->parler('Bonjour, je m\'appelle perso_2');

function dd($variable){
    "<pre>".var_dump($variable);"</pre>";
}

?>