<?php


function personnageDB() {
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
    // Chaque entrée sera récupérée et placée dans un array.
    while ($personnage = $pdoStat->fetch(PDO::FETCH_ASSOC)){
        echo $personnage['nom'], ' a ',
        $personnage['degats'], ' de dégâts -- id : ',
        $personnage['id'], '<br>';
    }

}

?>