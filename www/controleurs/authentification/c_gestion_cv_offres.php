<?php

 if(isset($_SESSION['role']))
 {
                 if($_SESSION['role']=="recruteur")
                {   
                    
                    $infos_users= selectionnerToutesInfosTableId("USERS","ID_ROLE",1);
                    $categories_emploi= selectionnerToutesInfosTable("CATEGORIES_EMPLOI");
                    $tous_les_pays=selectionnerToutesInfosTable("PAYS");
                    $liste_partenaires= selectionnerToutesInfosTable("PARTENAIRES");
                    $types_contrat= selectionnerToutesInfosTable("TYPES_CONTRAT");
                    $secteurs= selectionnerToutesInfosTable("SECTEURS");
                    $i=0;
                    $pays_user=array();
                    $libelles_contrat=array();
                    $titre_offre=array();
                    foreach ($infos_users as $value) 
                    {
                        $toutes_infos_pays= selectionnerToutesInfosTableId("PAYS","ID_PAYS",$value['ID_PAYS']);
                        $pays_user[$i]=$toutes_infos_pays[0]['NOM_FR_FR'];
                        $toutes_infos_contrats= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$value['ID_TYPE_CONTRAT']);
                        $toutes_infos_categorie_emploi= selectionnerToutesInfosTableId("CATEGORIES_EMPLOI","ID_CATEGORIE_EMPLOI",$value['ID_CATEGORIE_EMPLOI']);
                        $infos_contrat[$i]=$toutes_infos_categorie_emploi[0]['LIBELLE_EMPLOI'];
                        $toutes_infos_offre= selectionnerToutesInfosTable("OFFRES_EMPLOI");
                        $titre_offre[$i]=$toutes_infos_offre[0]['TITRE_EMPLOI']; 
                        $infos_secteur= selectionnerToutesInfosTableId("SECTEURS","ID_SECTEUR",$value['ID_SECTEUR']);
                        $nom_secteur[$i]=$infos_secteur[0]['LIBELLE_SECTEUR'];
                        $libelle_contrat[$i++]=$toutes_infos_contrats[0]['LIBELLE_CONTRAT'];
                    }
                    $compteur=0;
                    require("vues/accueil/v_accueil.php");
                }
                else
                {
                    
                    $offres_emploi= selectionnerToutesInfosTable("OFFRES_EMPLOI");
                    $infos_users= selectionnerToutesInfosTableDifferentElement("USERS","ID_USER",1);
                    $types_contrat= selectionnerToutesInfosTable("TYPES_CONTRAT");
                    $secteurs= selectionnerToutesInfosTable("SECTEURS");
                    $tous_les_pays=selectionnerToutesInfosTable("PAYS");
                    $roles_partenaires= selectionnerToutesInfosTable("ROLES_PARTENAIRES");
                    $liste_partenaires= selectionnerToutesInfosTable("PARTENAIRES");
                    $i=0;
                    $ville_offre=array();
                    $libelles_contrat=array();
                    $titre_offre=array();
                    $id_type_contrat=array();
                    foreach ($offres_emploi as $value)
                    {
                        $titre_offre[$i]=$value['TITRE_EMPLOI'];
                        $salaire_min[$i]=$value['SALAIRE_MIN'];
                        $salaire_max[$i]=$value['SALAIRE_MAX'];
                        $id_type_contrat=$value['ID_TYPE_CONTRAT'];
                        $id_ville= selectionnerToutesInfosTableId("VILLES_OFFRE_EMPLOI","ID_EMPLOI",$value['ID_EMPLOI']);
                        $infos_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","ID_VILLE", $id_ville[0]['ID_VILLE']);
                        $nom_ville[$i]=$infos_ville[0]['VILLE_NOM_REEL'];
                        $toutes_infos_type_contrat= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$value['ID_TYPE_CONTRAT']);
                        $libelle_contrat[$i++]=$toutes_infos_type_contrat[0]['LIBELLE_CONTRAT'];

                    }
                    $compteur=0;
                    require("vues/accueil/v_accueil.php");
                }
}
 else
{
    $offres_emploi= selectionnerToutesInfosTable("OFFRES_EMPLOI");
    $types_contrat= selectionnerToutesInfosTable("TYPES_CONTRAT");
    $secteurs= selectionnerToutesInfosTable("SECTEURS");
    $tous_les_pays=selectionnerToutesInfosTable("PAYS");
     $liste_partenaires= selectionnerToutesInfosTable("PARTENAIRES");
    $i=0;
    $ville_offre=array();
    $libelles_contrat=array();
    $titre_offre=array();
    $id_type_contrat=array();
    foreach ($offres_emploi as $value)
    {
        $titre_offre[$i]=$value['TITRE_EMPLOI'];
        $salaire_min[$i]=$value['SALAIRE_MIN'];
        $salaire_max[$i]=$value['SALAIRE_MAX'];
        $id_type_contrat=$value['ID_TYPE_CONTRAT'];
        $id_ville= selectionnerToutesInfosTableId("VILLES_OFFRE_EMPLOI","ID_EMPLOI",$value['ID_EMPLOI']);
        $infos_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","ID_VILLE", $id_ville[0]['ID_VILLE']);
        $nom_ville[$i]=$infos_ville[0]['VILLE_NOM_REEL'];
        $toutes_infos_type_contrat= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$value['ID_TYPE_CONTRAT']);
        $libelle_contrat[$i++]=$toutes_infos_type_contrat[0]['LIBELLE_CONTRAT'];

    }
    $compteur=0;
    require("vues/accueil/v_accueil.php");
}
  