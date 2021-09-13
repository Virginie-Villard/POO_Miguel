<?php

// création de $perso1
$perso1 = new Personnage(50,0);
var_dump($perso1);
/*
$perso1->parler('Bonjour, je m\'appelle perso_1');
echo '<br>Expérience de perso_1 apprès gain d\'expérience : ';
$perso1->gagnerExperience(); // On gagne de l'expérience.
$perso1->afficherExperience(); // On affiche la nouvelle valeur de l'attribut.
*/
// création de $perso2
$perso2 = new Personnage(200,0);
var_dump($perso2);

$perso3 = new Personnage(200,0);
var_dump($perso3);
/*$perso2->parler('Bonjour, je m\'appelle perso_2');


// $perso1 frappe $perso2
$perso1->frapper($perso2);
echo 'Dégats de perso_2 après le coup: '. $perso2->degats().'</br>';
*/

echo Personnage::nbObjects().' personnages instanciés';
//echo $perso1->getCompteurCoups();

?>