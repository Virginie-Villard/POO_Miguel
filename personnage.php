<?php

class Personnage
{
    private int $_force = 50; // La force du personnage, par défaut 50
    private int $_experience = 0; // Son expérience

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

        hydrate($donnees);
        }


    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            // On fabrique le nom du setter correspondant à l'attribut :
            $setter = 'set'.ucfirst($key);
            // Si le setter correspondant existe :
            if (method_exists($this, $setter)) {
            // On appelle le setter = $setter contient son nom !!!
            $this->$setter($value);
            }
        }
    }

    // setteurs

}

?>