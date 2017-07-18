<?php

function ajouterOffre($id_user,$titre,$description,$salaire_min,$salaire_max,$id_type_contrat)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare(
                'INSERT INTO OFFRES_EMPLOI(ID_USER,TITRE_EMPLOI,DESCRIPTION,DATE_PUBLICATION_EMPLOI,SALAIRE_MIN,SALAIRE_MAX,ID_TYPE_CONTRAT)'
                . ' VALUES(:id_user,:titre_emploi,:description,NOW(),:salaire_min,:salaire_max,:id_type_contrat)'
                );
       
        $req->bindParam(':id_user', $id_user, PDO::PARAM_INT, 11);
        $req->bindParam(':titre_emploi', $titre, PDO::PARAM_STR, 512);
        $req->bindParam(':description', $description, PDO::PARAM_STR, 1300);
        $req->bindParam(':salaire_min', $salaire_min, PDO::PARAM_INT, 11);
        $req->bindParam(':salaire_max', $salaire_max, PDO::PARAM_INT, 11);
        $req->bindParam(':id_type_contrat',$id_type_contrat, PDO::PARAM_INT, 11);
        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}


function modifierOffre($id_emploi,$titre,$description,$salaire_min,$salaire_max,$id_type_contrat)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare("UPDATE OFFRES_EMPLOI SET TITRE_EMPLOI=:titre_emploi,DESCRIPTION=:description,SALAIRE_MIN=:salaire_min,SALAIRE_MAX=:salaire_max,ID_TYPE_CONTRAT=:id_type_contrat WHERE ID_EMPLOI=:id_emploi");
        $req->bindParam(':id_emploi', $id_emploi, PDO::PARAM_INT, 11);
        $req->bindParam(':titre_emploi', $titre, PDO::PARAM_STR, 512);
        $req->bindParam(':description', $description, PDO::PARAM_STR, 1300);
        $req->bindParam(':salaire_min', $salaire_min, PDO::PARAM_INT, 11);
        $req->bindParam(':salaire_max', $salaire_max, PDO::PARAM_INT, 11);
        $req->bindParam(':id_type_contrat',$id_type_contrat, PDO::PARAM_INT, 11);
        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function modifierLienOffreSecteur($id_offre,$id_secteur)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('UPDATE SECTEUR_OFFRE_EMPLOI SET ID_SECTEUR=:id_secteur WHERE ID_EMPLOI=:id_offre');
       
        $req->bindParam(':id_secteur', $id_secteur, PDO::PARAM_INT, 11);
        $req->bindParam(':id_offre', $id_offre, PDO::PARAM_INT, 11);
        $req->execute();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function modifierLienVilleOffre($id_emploi,$id_ville)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare('UPDATE VILLES_OFFRE_EMPLOI SET ID_VILLE=:id_ville WHERE ID_EMPLOI=:id_emploi');
        $req->bindParam(':id_emploi', $id_emploi, PDO::PARAM_INT, 11);
        $req->bindParam(':id_ville', $id_ville, PDO::PARAM_INT, 11);
        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function ajouterLienOffreSecteur($id_offre,$id_secteur)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare(
                'INSERT INTO SECTEUR_OFFRE_EMPLOI(ID_SECTEUR,ID_EMPLOI)'
                . ' VALUES(:id_secteur,:id_offre)'
                );
       
        $req->bindParam(':id_secteur', $id_secteur, PDO::PARAM_INT, 11);
        $req->bindParam(':id_offre', $id_offre, PDO::PARAM_INT, 11);
        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function ajouterLienVilleOffre($id_emploi,$id_ville)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare(
                'INSERT INTO VILLES_OFFRE_EMPLOI(ID_EMPLOI,ID_VILLE)'
                . ' VALUES(:id_emploi,:id_ville)'
                );
        $req->bindParam(':id_emploi', $id_emploi, PDO::PARAM_INT, 11);
        $req->bindParam(':id_ville', $id_ville, PDO::PARAM_INT, 11);
        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function ajouterLienEmploiCategorie($id_emploi,$id_categorie)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare(
                'INSERT INTO EMPLOIS_CATEGORIE(ID_EMPLOI,ID_CATEGORIE_EMPLOI)'
                . ' VALUES(:id_emploi,:id_categorie)'
                );
       
        $req->bindParam(':id_emploi', $id_emploi, PDO::PARAM_INT, 11);
        $req->bindParam(':id_categorie',$id_categorie, PDO::PARAM_INT, 11);
        $req->execute();
        return $connexion->lastInsertId();
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}

function filtrerEmplois($id_secteur,$conditions)
{
    global $connexion;
    try
    {
        $req = $connexion->prepare("SELECT * FROM OFFRES_EMPLOI JOIN SECTEUR_OFFRE_EMPLOI ON OFFRES_EMPLOI.ID_EMPLOI=SECTEUR_OFFRE_EMPLOI.ID_EMPLOI WHERE $conditions");
        $req->execute();
        $donnees=$req->fetchAll();
        return $donnees;
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}
