<?php

if (isset($_GET['ctrlaction'])) 
{
    switch ($_GET['ctrlaction']) 
    {
        case 'trier':
            $val_secteur= intval(htmlspecialchars($_POST['secteur']));
            $secteurs= selectionnerToutesInfosTable("SECTEURS");
            $la_condition=" ID_ROLE=1 ";
            $date_min= htmlspecialchars($_POST['date_min']);
            $date_max= htmlspecialchars($_POST['date_max']);
            $bon_format_date_min= convertirDateFormatAnglais($date_min).' 00:00:00';
            $bon_format_date_max= convertirDateFormatAnglais($date_max).' 00:00:00';
           
            if($val_secteur>0)
            {
                $la_condition=$la_condition." AND ID_SECTEUR = $val_secteur";  
            }
            if($date_min!="")
            {
                 $la_condition=$la_condition." AND DATE_CREATION_CV > '$bon_format_date_min'";
            }
             if($date_max!="")
            {
                 $la_condition=$la_condition." AND DATE_CREATION_CV < '$bon_format_date_max' ";
            }
            $infos_users= filtrerElementsTable("USERS",$la_condition);
            $categories_emploi= selectionnerToutesInfosTable("CATEGORIES_EMPLOI");
            $tous_les_pays=selectionnerToutesInfosTable("PAYS");
            $types_contrat= selectionnerToutesInfosTable("TYPES_CONTRAT");
            $i=0;
            $pays_user=array();
            $libelles_contrat=array();
            foreach ($infos_users as $value) 
            {
                $toutes_infos_pays= selectionnerToutesInfosTableId("PAYS","ID_PAYS",$value['ID_PAYS']);
                $pays_user[$i]=$toutes_infos_pays[0]['NOM_FR_FR'];
                $toutes_infos_contrats= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$value['ID_TYPE_CONTRAT']);
                $toutes_infos_categorie_emploi= selectionnerToutesInfosTableId("CATEGORIES_EMPLOI","ID_CATEGORIE_EMPLOI",$value['ID_CATEGORIE_EMPLOI']);
                $infos_contrat[$i]=$toutes_infos_categorie_emploi[0]['LIBELLE_EMPLOI'];
                $infos_secteur= selectionnerToutesInfosTableId("SECTEURS","ID_SECTEUR",$value['ID_SECTEUR']);
                $nom_secteur[$i]=$infos_secteur[0]['LIBELLE_SECTEUR'];
                $libelle_contrat[$i++]=$toutes_infos_contrats[0]['LIBELLE_CONTRAT'];
            }
            $compteur=0;
            require("vues/accueil/v_accueil.php");
            break;
    }
} 
else 
{
    $infos_users=selectionnerToutesInfosTable("USERS");
    $categories_emploi= selectionnerToutesInfosTable("CATEGORIES_EMPLOI");
    $tous_les_pays=selectionnerToutesInfosTable("PAYS");
    $i=0;
    $pays_user=array();
    $libelles_contrat=array();
    foreach ($infos_users as $value) 
    {
        $toutes_infos_pays= selectionnerToutesInfosTableId("PAYS","ID_PAYS",$value['ID_PAYS']);
        $pays_user[$i]=$toutes_infos_pays[0]['NOM_FR_FR'];
        $toutes_infos_contrats= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$value['ID_TYPE_CONTRAT']);
        $toutes_infos_categorie_emploi= selectionnerToutesInfosTableId("CATEGORIES_EMPLOI","ID_CATEGORIE_EMPLOI",$value['ID_CATEGORIE_EMPLOI']);
        $infos_contrat[$i]=$toutes_infos_categorie_emploi[0]['LIBELLE_EMPLOI'];
        $libelle_contrat[$i++]=$toutes_infos_contrats[0]['LIBELLE_CONTRAT'];
    }
    $compteur=0;
    include("vues/accueil/v_accueil.php");
}
