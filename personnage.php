<?php

class Personnage {
    private $_name = "";
    private $_strength = 50;  // La force du personnage, par défaut 50
    private $_experience = 0;
    private $_damage = 0;
    private $_location = "";

    public function __construct(string $name, int $strength, int $experience, int $damage, string $location) {
        $this->name = $name;
        $this->strength = $strength;
        $this->experience = $experience;
        $this->damage = $damage;
        $this->location = $location;
    }

    // Une méthode qui déplacera le personnage (modifiera sa localisation).
    public function move()

    // Une méthode qui fera parler le personnage.
    public function speak($speech)

    // Une méthode qui affichera l'attribut $experience du personnage.
    public function displayExperience()

    // Une méthode augmentant l'attribut $experience du personnage.
    public function gainExperience()

    // Une méthode qui frappera un personnage (suivant la force qu'il a).
    public function hit()

    // Une méthode qui modifiera l'attribut $damage du personnage.
    public function damage()

    // Une méthode qui donnera une valeur l'attribut $damage du personnage.
    public function setDamage()

    // Une méthode qui modifiera l'attribut $strength du personnage.
    public function strenght()

    // Une méthode qui attribuera une valeur à l'attribut $strength du personnage.
    public function setStrenth()
}