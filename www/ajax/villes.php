<?php

$term = $_GET['term'];
require("../modeles/m_connexionBd.php");
 
$requete = $connexion->prepare('SELECT ID_VILLE,VILLE_NOM_REEL FROM VILLES_FRANCE WHERE VILLE_NOM_REEL LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['VILLE_NOM_REEL']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); 
