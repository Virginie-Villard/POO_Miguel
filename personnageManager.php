<?php


function personnageDB() {

    // 1) Une requête à la BD
    // 2) On fait un setFetchMode en précisant FETCH_CLASS
    // 3) Ainsi chaque fetch renvoit directement un objet de la classe. Il est instancié sans avoir à
    // définir le constructeur : c’est un constructeur sans paramètre.
    // 4) On peut travailler sur cet objet

    //Avantages
    // Les données sont directement lues comme des objets.
    // Le constructeur est simplifié : on peut s’en passer. Il fonctionne sans argument et ça marche tout
    // seul : les objets sont instanciés à chaque fetch.
    // Si les attributs changent dans la BD, ça ne change rien à l’hydratation.

    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=personnagesMiguel;charset=utf8', 'Vg','toto', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    // On récupère tout le contenu de la table article de notre boutique
    $personnage = $bdd->query('SELECT * FROM personnage');

    $pdoStat = $pdo->query($reqSQL);
    // On utilise la method FETCH_CLASS plutôt que FETCH_ASSOC :
    $pdoStat->setFetchMode(PDO::FETCH_CLASS,'Personnage');
    
    // Chaque entrée sera récupérée et placée dans un objet
    while ($personnage = $pdoStat->fetch()){
        // on peut ensuite faire ce qu’on veut de l’objet :
        $personnage->afficher();
    }

}

?>