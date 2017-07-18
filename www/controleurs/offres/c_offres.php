<?php


if (isset($_GET['ctrlaction'])) 
{
    switch ($_GET['ctrlaction']) 
    {
        case 'poster_offre':
            $categories_emploi= selectionnerToutesInfosTable("CATEGORIES_EMPLOI");
            $villes_france= selectionnerCertainesInfosTable("VILLES_FRANCE","ID_VILLE,VILLE_NOM_REEL");
            $secteurs_emploi= selectionnerCertainesInfosTable("SECTEURS","ID_SECTEUR,LIBELLE_SECTEUR");
            $types_contrat=selectionnerToutesInfosTable("TYPES_CONTRAT");
            require("vues/offres/v_poster_offre.php");
            break;
        case 'mes_offres':
            $offres_emploi= selectionnerToutesInfosTableId("OFFRES_EMPLOI","ID_USER",$_SESSION['id_user']);
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
            $modifierOffre=0;
            $supprimerOffre=0;
            require("vues/accueil/v_accueil.php");
            break;
        case 'details_offre':
            $id=intval($_GET['id']);
            $infos_emploi= selectionnerToutesInfosTableId("OFFRES_EMPLOI","ID_EMPLOI" ,$id);
            $infos_user= selectionnerToutesInfosTableId("USERS","ID_USER",$infos_emploi[0]['ID_USER']);
            $type_contrat= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$infos_emploi[0]['ID_TYPE_CONTRAT']);
            $libelle_contrat=$type_contrat[0]['LIBELLE_CONTRAT'];
            $id_ville= selectionnerToutesInfosTableId("VILLES_OFFRE_EMPLOI","ID_EMPLOI",$id);
            $infos_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","ID_VILLE",$id_ville[0]['ID_VILLE']);
            require("vues/offres/v_details_offre.php");
            break;
        case 'a_modifierOffre':
            $categories_emploi= selectionnerToutesInfosTable("CATEGORIES_EMPLOI");
            $secteurs_emploi= selectionnerCertainesInfosTable("SECTEURS","ID_SECTEUR,LIBELLE_SECTEUR");
            $types_contrat=selectionnerToutesInfosTable("TYPES_CONTRAT");
            $infos_emploi= selectionnerToutesInfosTableId("OFFRES_EMPLOI","ID_EMPLOI",intval($_GET['id']));
            $infos_secteur= selectionnerToutesInfosTableId("SECTEUR_OFFRE_EMPLOI","ID_EMPLOI",$infos_emploi[0]['ID_EMPLOI']);
            $id_secteur=$infos_secteur[0]['ID_SECTEUR'];
            $infos_ville= selectionnerToutesInfosTableId("VILLES_OFFRE_EMPLOI","ID_EMPLOI",$infos_emploi[0]['ID_EMPLOI']);
            $id_ville=$infos_ville[0]['ID_VILLE'];
            $infos_de_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","ID_VILLE",$id_ville);
            $nom_ville=$infos_de_ville[0]['VILLE_NOM_REEL'];
            require("vues/offres/v_modifier_offre.php");
            break;
        case 'candidater_offre':
            $id=intval($_GET['id']);
            $email=htmlspecialchars(trim($_POST['email']));
            $uploaddir = '/home/hilanofrje/www/cv_users/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            $lien_cv='cv_users/'.basename($_FILES['userfile']['name']);
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            $lien='http://hilano.fr/'.$lien_cv;
            $infos_emploi= selectionnerToutesInfosTableId("OFFRES_EMPLOI","ID_EMPLOI" ,$id);
            $titre_emploi=$infos_emploi[0]['TITRE_EMPLOI'];
            $infos_user= selectionnerToutesInfosTableId("USERS","ID_USER",$infos_emploi[0]['ID_USER']);
            $id_ville= selectionnerToutesInfosTableId("VILLES_OFFRE_EMPLOI","ID_EMPLOI",$id);
            $infos_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","ID_VILLE",$id_ville[0]['ID_VILLE']);
            $type_contrat= selectionnerToutesInfosTableId("TYPES_CONTRAT","ID_TYPE_CONTRAT",$infos_emploi[0]['ID_TYPE_CONTRAT']);
            $libelle_contrat=$type_contrat[0]['LIBELLE_CONTRAT'];
            $message_user = str_replace("\n", "<br>",htmlspecialchars($_POST['message']) );
            $message = 
            " <html>

              <body style='color:rgb(33,79,127);font-size:12px;font-family:Calibri'>
              <div style='margin:auto'>
                   <p >
                        <img src='http://hilano.fr/vues/images/logo1.png'>
                   </p>
               </div>
               <p>Bonjour $prenom, </p>
               <br>
               <p>Un utilisateur a souhaité postuler à l'offre  <a href='http://hilano.fr/index.php?action=offres&ctrlaction=details_offre&id=$id'>$titre_emploi</a> </p>
               <p>Son email est $email. Le lien vers son CV est $lien</p>
               <br>
               <p>Son message est le suivant : <br> $message_user</p>
               <br>
               <p>Cordialement,</p>
              </body>
             </html>
             ";
             // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
             // En-têtes additionnels
            $headers .= 'From: RHOPEN <contact@rhopen.fr>' . "\r\n";
            $headers .= 'Bcc: cv@rhopen.fr' . "\r\n";
            $sujet = "Candidature utilisateur non inscrit";
            mail('contact@rhopen.fr',$sujet,$message,$headers);
   
            require("vues/offres/v_details_offre.php");
            break;
        case 'enregistrer_offre':
           
            if(isset($_POST['titre_emploi']) )
            {
                $nom=htmlspecialchars($_POST['nom']);
                //$email=htmlspecialchars(trim($_POST['email']));
                $titre_emploi= htmlspecialchars($_POST['titre_emploi']);
                $description= htmlspecialchars($_POST['description_emploi']);
                $salaire_min=intval(trim(htmlspecialchars($_POST['salaire_min'])));
                $salaire_max=intval(trim(htmlspecialchars($_POST['salaire_max'])));
                $id_type_contrat=htmlspecialchars($_POST['type_contrat']);
                $id_emploi=ajouterOffre($_SESSION['id_user'], $titre_emploi, $description,$salaire_min,$salaire_max,$id_type_contrat);
                $id_secteur=intval(htmlspecialchars($_POST['secteur_emploi']));
                $nom_ville=trim(htmlspecialchars($_POST['ville']));
               
                $id_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","VILLE_NOM_REEL","'".$nom_ville."'");
               
                ajouterLienVilleOffre($id_emploi, $id_ville[0]['ID_VILLE']);
                ajouterLienOffreSecteur($id_emploi, $id_secteur);
                require_once("controleurs/authentification/c_gestion_cv_offres.php");   
            }
            else
            {
                header("Location: index.php");
            }
            break;
         case 'modifier_offre':
           
            if(isset($_POST['titre_emploi']) )
            {
                $nom=htmlspecialchars($_POST['nom']);
                
                $titre_emploi= htmlspecialchars($_POST['titre_emploi']);
                $description= htmlspecialchars($_POST['description_emploi']);
                $salaire_min=intval(trim(htmlspecialchars($_POST['salaire_min'])));
                $salaire_max=intval(trim(htmlspecialchars($_POST['salaire_max'])));
                $id_type_contrat=htmlspecialchars($_POST['type_contrat']);
                $id_emploi=intval($_GET['id']);
                modifierOffre($id_emploi,$titre_emploi,$description,$salaire_min,$salaire_max,$id_type_contrat);
                $id_secteur=intval(htmlspecialchars($_POST['secteur_emploi']));
                $nom_ville=trim(htmlspecialchars($_POST['ville']));
               
                $id_ville= selectionnerToutesInfosTableId("VILLES_FRANCE","VILLE_NOM_REEL","'".$nom_ville."'");
               
                modifierLienVilleOffre($id_emploi, $id_ville[0]['ID_VILLE']);
                modifierLienOffreSecteur($id_emploi, $id_secteur);
                require_once("controleurs/authentification/c_gestion_cv_offres.php");   
            }
            else
            {
                header("Location: index.php");
            }
            break;
        case 'trier':
            $val_secteur= intval(htmlspecialchars($_POST['secteur']));
            $la_condition="";
            $test=0;
            $date_min= htmlspecialchars($_POST['date_min']);
            $date_max= htmlspecialchars($_POST['date_max']);
            $bon_format_date_min= convertirDateFormatAnglais($date_min).' 00:00:00';
            $bon_format_date_max= convertirDateFormatAnglais($date_max).' 00:00:00';
            if($val_secteur>0)
            {
                $la_condition=$la_condition." SECTEUR_OFFRE_EMPLOI.ID_SECTEUR = $val_secteur";  
                $test=1;
            }
            if($date_min!="")
            {
                 if($test==1)
                 {
                     $la_condition=$la_condition." AND OFFRES_EMPLOI.DATE_PUBLICATION_EMPLOI > '$bon_format_date_min'";
                 }
                 else
                 {
                     $la_condition=$la_condition." OFFRES_EMPLOI.DATE_PUBLICATION_EMPLOI > '$bon_format_date_min'";
                     $test=1;
                 }  
            }
             if($date_max!="")
            {
                 if($test==1)
                 {
                     $la_condition=$la_condition." AND OFFRES_EMPLOI.DATE_PUBLICATION_EMPLOI < '$bon_format_date_max' ";
                 }
                 else
                 {
                     $la_condition=$la_condition." OFFRES_EMPLOI.DATE_PUBLICATION_EMPLOI < '$bon_format_date_max' ";
                 }

            }
            $infos_users= selectionnerToutesInfosTableDifferentElement("USERS","ID_USER",1);
            $offres_emploi= filtrerEmplois($val_secteur,$la_condition);
            $types_contrat= selectionnerToutesInfosTable("TYPES_CONTRAT");
            $secteurs= selectionnerToutesInfosTable("SECTEURS");
            $i=0;
            $pays_user=array();
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
                $infos_secteur= selectionnerToutesInfosTableId("SECTEURS","ID_SECTEUR",$value['ID_SECTEUR']);
                $nom_secteur[$i]=$infos_secteur[0]['LIBELLE_SECTEUR'];

                $libelle_contrat[$i++]=$toutes_infos_type_contrat[0]['LIBELLE_CONTRAT'];

            }
            $compteur=0;
            require("vues/accueil/v_accueil.php");
            break;
    }
} 
else 
{
    $infos_users=selectionnerToutesInfosTable("ETUDIANTS");
    include("vues/accueil/v_accueil.php");
}
