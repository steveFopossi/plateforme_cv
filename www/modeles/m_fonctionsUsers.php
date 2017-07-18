<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


function selectionnerToutesInfosTable($nomTable)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('SELECT * FROM '.$nomTable);
        $req->execute();
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function selectionnerToutesInfosTableDifferentElement($nomTable,$libelle_champ,$val_champ)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('SELECT * FROM '.$nomTable.' WHERE '.$libelle_champ.'!='.$val_champ);
        $req->execute();
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}
function filtrerElementsTable($nomTable,$conditions)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('SELECT * FROM '.$nomTable.' WHERE '.$conditions);
        $req->execute();
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function selectionnerToutesInfosTableId($nomTable,$libelle_id,$valeur_id)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('SELECT * FROM '.$nomTable.' WHERE '.$libelle_id. '='.$valeur_id);
        $req->execute();
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function selectionnerCertainesInfosTable($nomTable,$nomsChamps)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('SELECT '.$nomsChamps.' FROM '.$nomTable);
        $req->execute();
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function ajouterUser($id_type_contrat,$id_role,$id_pays,$id_categorie,$id_secteur,$nom,$prenom,$email,$mdp,$lien_cv,$nom_societe_user,$id_partenaire)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare(
                'INSERT INTO USERS(ID_TYPE_CONTRAT,ID_ROLE,ID_PAYS,ID_CATEGORIE_EMPLOI,ID_SECTEUR,NOM_USER,PRENOM_USER,MOT_DE_PASSE_USER,EMAIL_USER,LIEN_CV,NOM_SOCIETE_USER,ID_PARTENAIRE,DATE_CREATION_CV)'
                . ' VALUES(:id_type_contrat,:id_role,:id_pays,:id_categorie,:id_secteur,:nom,:prenom,:mdp,:email,:cv,:nom_societe_user,:id_partenaire,NOW())'
                );
       
        $req->bindParam(':id_type_contrat', $id_type_contrat, PDO::PARAM_INT, 11);
        $req->bindParam(':id_role', $id_role, PDO::PARAM_INT, 11);
        $req->bindParam(':id_pays', $id_pays, PDO::PARAM_INT, 11);
        $req->bindParam(':id_categorie', $id_categorie, PDO::PARAM_INT, 11);
        $req->bindParam(':id_secteur', $id_secteur, PDO::PARAM_INT, 11);
        $req->bindParam(':nom', $nom, PDO::PARAM_STR, 50);
        $req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 50);
        $req->bindParam(':mdp', $mdp, PDO::PARAM_STR, 255);
        $req->bindParam(':email', $email, PDO::PARAM_STR, 50);
        $req->bindParam(':cv', $lien_cv, PDO::PARAM_STR, 20);
         $req->bindParam(':id_partenaire', $id_partenaire, PDO::PARAM_INT, 11);
        $req->bindParam(':nom_societe_user', $nom_societe_user, PDO::PARAM_STR, 70);

        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}



function verifierExistenceUser($pseudo,$email)
{
    global $connexion;
    try
    {
    $req = $connexion->prepare('SELECT COUNT(*) AS NOMBRE FROM '.USER_TABLE.' WHERE TRIM('.USER_PSEUDO.')=:pseudo OR TRIM('.USER_MAIL.')=:email');
    $pseudoUser=trim($pseudo);
    $req->bindParam(':pseudo', $pseudoUser, PDO::PARAM_STR, 50);
    $req->bindParam(':email', $email, PDO::PARAM_STR, 50);
    $req->execute();
    $donnees=$req->fetch();
    return $donnees['NOMBRE'];
    }
    catch (PDOException $e) {
        die($e->getMessage());
    }
}


function modificationInfosUser($id_user,$nom,$prenom,$email,$mdp,$nom_societe_user)
{
    global $connexion;
    $req = $connexion->prepare("UPDATE USERS SET NOM_USER=:nom,PRENOM_USER=:prenom,EMAIL_USER=:email,MOT_DE_PASSE_USER=:mdp,NOM_SOCIETE_USER=:nom_societe_user WHERE ID_USER=:id_user");
    $req->execute(array(
    'id_user' => $id_user,
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'mdp'=>$mdp,
    'nom_societe_user' => $nom_societe_user
    ));
}

function modificationInfosCandidat($id_user,$id_type_contrat,$id_pays,$id_categorie,$id_secteur,$nom,$prenom,$email,$mdp,$lien_cv,$id_partenaire)
{
    global $connexion;
    $req = $connexion->prepare("UPDATE USERS SET ID_TYPE_CONTRAT=:id_type_contrat,ID_PAYS=:id_pays,ID_CATEGORIE_EMPLOI=:id_categorie,ID_SECTEUR=:id_secteur,NOM_USER=:nom,PRENOM_USER=:prenom,EMAIL_USER=:email,MOT_DE_PASSE_USER=:mdp,LIEN_CV=:lien_cv,ID_PARTENAIRE=:id_partenaire WHERE ID_USER=:id_user");
    $req->execute(array(
    'id_user' => $id_user,
    'id_type_contrat' => $id_type_contrat,
    'id_pays' => $id_pays,
    'id_categorie' => $id_categorie,
    'id_secteur' => $id_secteur,
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'mdp'=>$mdp,
    'lien_cv' => $lien_cv,
     'id_partenaire'=>$id_partenaire  
    ));
}
