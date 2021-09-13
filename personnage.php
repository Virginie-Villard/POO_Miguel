<?php

class Personnage
{
    private int $_force = 50; // La force du personnage, par défaut 50
    private string $_localisation = ''; // Sa localisation
    private int $_experience = 0; // Son expérience
    private int $_degats = 0; // Ses dégâts
    static private $_nbObjects=0; 

    // function static
    static public function nbObjects(){
        // on accede à la variable static par self et ::
        // self represente la classe, on pourrait metre Personnage
        return self::$_nbObjects;
    }

    // Déclarations des constantes en rapport avec la force.
    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    public function __construct($force, $degats) {
        // le setter vérifie l’intégrité des données fournies
        // On vérifie que $force vaut « FORCE_PETITE »,
        // ou « FORCE_MOYENNE », ou « FORCE_GRANDE ».
        self::$_nbObjects++; 

        if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE])) {
            $this->_force = $force;
        }
        else{ // sinon on donne une petite force par défaut !
            $this->_force = self::FORCE_PETITE;

        // on compte le nombre d'instances de la classe
        }

    }
}

?>