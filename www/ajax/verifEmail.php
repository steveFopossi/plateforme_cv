<?php

$email = "'".htmlspecialchars($_GET['email'])."'";

 require("../modeles/m_connexionBd.php");

$requete = $connexion->query("SELECT * FROM USERS WHERE EMAIL_USER = $email"); // j'effectue ma requête SQL grâce au mot-clé LIKE

$array = array(); 

$donnee = $requete->fetch();

if ($donnee!=false)// on effectue une boucle pour obtenir les données
{
    echo "Cette adresse existe deja";
}

 


