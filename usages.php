<?php

// création de $perso1
$perso1 = new Personnage(50,0);
$perso1->print_rObject('$perso_1');
$perso1->speak('Bonjour, je m\'appelle '.$name);
echo '<br>Expérience de perso_1 apprès gain d\'expérience : ';
$perso1->gainExperience(); // On gagne de l'expérience.
$perso1->displayExperience(); // On affiche la nouvelle valeur de l'attribut.





// création de $perso2
$perso2 = new Personnage(50,0);
$perso2->print_rObject('$perso_2');
$perso2->parler('Bonjour, je m\'appelle perso_2');





// $perso1 frappe $perso2
$perso1->frapper($perso2);
echo 'Dégats de perso_2 après le coup: '. $perso2-
>degats().'</br>';

?>