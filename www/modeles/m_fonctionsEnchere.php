<?php

function ajouterEnchere($titre,$cat,$description,$prix,$date_debut,$date_fin,$urgence,$photo){
    global $connexion;
    
    $requete = $connexion -> prepare("INSERT INTO ".ENC_TABLE."(".ENC_TITLE.", ".ENC_CATEGORIE.", ".ENC_USER.", ".ENC_DESC.", ".ENC_PRIX_MIN.", ".ENC_DATE_DEBUT.", ".ENC_DATE_FIN.", ".ENC_URGENCE.", ".ENC_PHOTO.") VALUES (:title, :categorie, :id_user, :desc, :prix_min, :date_debut, :date_fin, :urgence, :photo)");
    $requete-> execute(array(':title' => $titre,
    ':id_user' => $_SESSION[USER_ID],
    ':categorie' => $cat,
    ':desc' => $description,
    ':prix_min' => $prix,
    ':date_debut' => $date_debut,
    ':date_fin' => $date_fin,
    ':urgence' => $urgence,
    ':photo' => $photo));
}

function surencherir($id,$prix){
    global $connexion;
    
    $requete = $connexion -> prepare("UPDATE ".ENC_TABLE." SET ".ENC_PRIX_MIN."=:prix WHERE ".ENC_ID."=:id");
    $requete -> bindParam(':prix',$prix,PDO::PARAM_STR,50);
    $requete -> bindParam(':id',$id,PDO::PARAM_STR,50);
    $requete -> execute();
    
    $requete2 = $connexion -> prepare("INSERT INTO ".SUREN_TABLE."(".SUR_USER.",".SUR_ENC.",".SUR_PRIX.") VALUES (:idUser,:id_enchere,:prix)");
    $requete2 -> execute(array(':idUser' => $_SESSION[USER_ID],
    ':id_enchere' => $id,
    ':prix' => $prix));
}

function afficherLesDernieresEncheres($nombreEncheres,$type)
{
    global $connexion;
    try
    {
        if($type=='TOUT')
        {
            $laRequete="SELECT * FROM ".ENC_TABLE." WHERE ".USER_ID."!=:idUser AND ".USER_ID." ORDER BY DATE_FIN  ASC LIMIT 0,$nombreEncheres"; 
            $req = $connexion->prepare($laRequete);
            $req-> execute(
                array(
                    ':idUser'=>  $_SESSION[USER_ID]
                )
            );
        }
        elseif ($type=='MES_ENCHERES') 
        {
       
            $laRequete="SELECT * FROM ".ENC_TABLE." WHERE ".USER_ID." =:idUser ORDER BY DATE_FIN  ASC LIMIT 0,$nombreEncheres ";
            $req = $connexion->prepare($laRequete);
            $req-> execute(
            array(
                ':idUser'=>  $_SESSION[USER_ID]
                )
            );
        }
        elseif ($type=='POSITIONNE') 
        {
       
            $laRequete="SELECT DISTINCT ".ENC_PHOTO.",".ENC_TITLE.",".ENC_PRIX_MIN.",".ENC_DESC.",".ENC_DATE_FIN." FROM ".ENC_TABLE." JOIN ".SUREN_TABLE." ON ".ENC_TABLE.".".USER_ID."=".SUREN_TABLE.".".USER_ID." WHERE ".SUREN_TABLE.".".USER_ID."  =:idUser  LIMIT 0,$nombreEncheres ";
            $req = $connexion->prepare($laRequete);
            
            $req-> execute(
            array(
                ':idUser'=>  $_SESSION[USER_ID]
                )
            );
            
        }
       
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function selectionnerToutesCategories(){
      global $connexion;
    try
    {
        $laRequete="SELECT * FROM ".CAT_TABLE; 
        $req = $connexion->prepare($laRequete);
        $req-> execute();
      
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function avertirLeader($id_user,$id_enchere){
    global $connexion;
    
    $requete = $connexion -> prepare("SELECT ".USER_PSEUDO.", ".USER_MAIL.", ".ENC_TITLE." FROM ".USER_TABLE.", ".ENC_TABLE." WHERE ".USER_ID."=:idUser AND ".ENC_ID."=:id_enchere" );
    $requete -> bindParam(':idUser', $id_user, PDO::PARAM_STR, 50);
    $requete -> bindParam(':id_enchere', $id_enchere, PDO::PARAM_STR, 50);
    $requete -> execute();
    
    $donnees = $requete -> fetch();
    $pseudo = $donnees[USER_PSEUDO];
    $title = $donnees[ENC_TITLE];
    
    $sujet = "Perte de la tête sur une enchère";
    $entete = "From: raiseorfold@gmail.com";
    $message = "Bonjour $pseudo,

    Vous avez récemment enchérie pour l'objet $title. Nous vous annonçons que vous avez perdu la tête de cette enchère. 
    Si vous souhaitez toujours cette objet, veuillez vous reconnecté le plus tôt possible pour surenchèrir.
    
    L'équipe GiveItToMe.
    -----------------------------------------------------------------
    Cet e-mail a été généré automatiquement, merci de ne pas y répondre.";
    
    mail($email,$sujet,$message,$entete);
}

function filterParCategorie($cat){
      global $connexion;
    try
    {
        $laRequete="SELECT * FROM ".ENC_TABLE." JOIN ".CAT_TABLE." ON ".ENC_TABLE.".".ENC_CATEGORIE."=".CAT_TABLE.".".CAT_ID." WHERE ".CAT_TABLE.".".CAT_LABELLE."  =:idCat LIMIT 100"; 
		$req = $connexion->prepare($laRequete);
		$req -> bindParam(':idCat', $cat, PDO::PARAM_STR, 50);
        $req-> execute();
      
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function selectionnerPrixMaxEnchere($idEnchere)
{
    $requete = $connexion->prepare('SELECT MAX(PRIX_PROPOSE) AS PRIX_MAX FROM SURENCHERIR WHERE ID_ENCHERE=:idEnchere'); 
$requete->execute(array(
    'idEnchere' => $idEnchere
    )); 
}
?>