<?php


if (isset($_GET['ctrlaction'])) 
{
    switch ($_GET['ctrlaction']) 
    {
        case 'inscr_ou_conn':
            $roles_partenaires= selectionnerToutesInfosTable("ROLES_PARTENAIRES");
            $liste_partenaires= selectionnerToutesInfosTable("PARTENAIRES");
            $categories_emploi= selectionnerToutesInfosTable("CATEGORIES_EMPLOI");
            $types_contrat= selectionnerToutesInfosTable("TYPES_CONTRAT");
            $les_pays= selectionnerToutesInfosTable("PAYS");
            $roles= selectionnerToutesInfosTableDifferentElement("ROLES","ID_ROLE",2);
            $secteurs= selectionnerToutesInfosTable("SECTEURS");
            require("vues/authentification/v_login_register.php");
            break;
        case 'inscription':
            $infos_users= selectionnerToutesInfosTableId("USERS","ID_ROLE",1);
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']))
            {
                $nom=htmlspecialchars($_POST['nom']);
                $prenom=htmlspecialchars($_POST['prenom']);
                $email=htmlspecialchars(trim($_POST['email']));
                $mdp=htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT));
                $id_role= htmlspecialchars(intval($_POST['role']));
                $id_secteur=htmlspecialchars(intval($_POST['secteur']));
                $nom_societe_user="";
                if($id_role!=3)
                {
                    $id_type_contrat=htmlspecialchars($_POST['type_contrat']);
                    $id_pays=htmlspecialchars($_POST['pays']);
                    $uploaddir = '/home/hilanofrje/www/cv_users/';
                    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
                    $lien_cv='cv_users/'.basename($_FILES['userfile']['name']);
                    
                    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                }
                else
                {
                    $id_type_contrat=1;
                    $id_secteur=NULL;
                    $id_pays=75;
                    $lien_cv=""; 
                    $nom_societe_user= htmlspecialchars($_POST['nom_societe']);
                }
                
                $verifierExistenceUser= selectionnerToutesInfosTableId("USERS","EMAIL_USER",'"'.$email.'"');
                if(empty($verifierExistenceUser))
                {
                    $id_partenaire=NULL;
                    if(intval($_POST['nom_partenaire'])>0)
                    {
                        $id_partenaire=intval($_POST['nom_partenaire']);
                    }
                    ajouterUser($id_type_contrat,$id_role,$id_pays,1,$id_secteur,$nom,$prenom,$email,$mdp,$lien_cv,$nom_societe_user,$id_partenaire);  

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
                       <p>Et bienvenue chez Rhopen ! </p>
                       <br>
                       <p>Nous sommes ravis de vous compter parmi nous et de vous accompagner vers votre futur emploi en France.</p>
                       <br>
                        <p>  Après examen rapide de votre profil, l’Agence prendra rapidement contact avec vous.</p>
                         <p> Vous pouvez à tout moment modifier vos informations sur <a href='http://hilano.fr/index.php?action=authentification&ctrlaction=inscr_ou_conn#login'>votre compte</a>, notamment votre CV. 
                        </p>
                        <br>
                        <p>
                            Restez Open ! 
                        
                         </p>
                         <br>
                        <p>
                            <b><i>L'Equipe Rhopen</i></b>
                        </p>
                      </body>
                     </html>
                     ";
                     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                     $headers  = 'MIME-Version: 1.0' . "\r\n";
                     $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                     // En-têtes additionnels

                     $headers .= 'From: RHOPEN <contact@rhopen.fr>' . "\r\n";
                     $headers .= 'Bcc: cv@rhopen.fr' . "\r\n";
                     $sujet = "Bienvenue chez Rhopen";
                     mail($email,$sujet,$message,$headers);
                }
               require_once("c_gestion_cv_offres.php");

            }
            else
            {
                header("Location: index.php");
            }
            break;
        case 'connexion' :
            $donnees;
            if(isset($_POST['email']) && isset($_POST['password']))
            {
                $email= htmlspecialchars($_POST['email']);
                $pass=htmlspecialchars($_POST['password']);
                $donnees = selectionnerToutesInfosTableId("USERS","EMAIL_USER",'"'.$email.'"');
                if($donnees[0]['EMAIL_USER']!=NULL)
                {
                    if(password_verify($pass,$donnees[0]['MOT_DE_PASSE_USER']))
                    {
                            $_SESSION['id_user']=$donnees[0]['ID_USER'];
                            $_SESSION['nom'] = $donnees[0]['NOM_USER'];
                            $_SESSION['prenom'] = $donnees[0]['PRENOM_USER'];
                            $_SESSION['email'] = $donnees[0]['EMAIL_USER'];
                            $_SESSION['mot_de_passe'] = $pass;
                            $_SESSION['nom_societe_user'] = $donnees[0]['NOM_SOCIETE_USER'];
                            $_SESSION['lien_cv_user']=$donnees[0]['LIEN_CV'];
                            $_SESSION['id_pays']=$donnees[0]['ID_PAYS'];
                            $_SESSION['id_type_contrat']=$donnees[0]['ID_TYPE_CONTRAT'];
                            $_SESSION['id_secteur']=$donnees[0]['ID_SECTEUR'];
                            $_SESSION['id_partenaire']=$donnees[0]['ID_PARTENAIRE'];
                            if($donnees[0]['ID_ROLE']==3)
                            {
                                $_SESSION['role']="recruteur";
                            }
                            else 
                            {
                                $_SESSION['role']="etudiant";
                            }
                    }
                }
            }
            require_once("c_gestion_cv_offres.php");
            break;
        case 'modifier_infos':
            $nom=htmlspecialchars($_POST['nom']);
            $prenom=htmlspecialchars($_POST['prenom']);
            $email=htmlspecialchars(trim($_POST['email']));
            $mdp=password_hash(htmlspecialchars($_POST['password']),PASSWORD_DEFAULT);
            $nom_societe_user= htmlspecialchars($_POST['nom_societe']);
            modificationInfosUser($_SESSION['id_user'],$nom,$prenom,$email,$mdp,$nom_societe_user);
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['email'] = $email;
            $_SESSION['mot_de_passe'] = htmlspecialchars($_POST['password']);
            $_SESSION['nom_societe_user'] =$nom_societe_user;
            require_once("c_gestion_cv_offres.php");
            break;
        case 'modifier_infos_etudiant':
            $infos_users= selectionnerToutesInfosTableId("USERS","ID_ROLE",1);
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']))
            {
                $nom=htmlspecialchars($_POST['nom']);
                $prenom=htmlspecialchars($_POST['prenom']);
                $email=htmlspecialchars(trim($_POST['email']));
                $mdp=htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT));
                $id_secteur=htmlspecialchars(intval($_POST['secteur']));
                $nom_societe_user="";
                $id_type_contrat=htmlspecialchars($_POST['type_contrat']);
                $id_pays=htmlspecialchars($_POST['pays']);
                $uploaddir = '/home/hilanofrje/www/cv_users/';
                $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
                $infos_cv= selectionnerToutesInfosTableId("USERS","ID_USER",$_SESSION['id_user']);
                $ancien_lien_cv=$infos_cv[0]['LIEN_CV'];
                $lien_cv='cv_users/'.basename($_FILES['userfile']['name']);
                if($lien_cv!="cv_users/")
                {
                     move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                }
                else
                {
                    $lien_cv=$ancien_lien_cv;
                }
              
                $id_partenaire=NULL;
                if(intval($_POST['nom_partenaire'])>0)
                {
                    $id_partenaire=intval($_POST['nom_partenaire']);
                }
                modificationInfosCandidat($_SESSION['id_user'],$id_type_contrat,$id_pays,1,$id_secteur,$nom,$prenom,$email,$mdp,$lien_cv,$id_partenaire);
                $_SESSION['nom'] =$nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['email'] = $email;
                $_SESSION['mot_de_passe'] = htmlspecialchars($_POST['password']);
                $_SESSION['lien_cv_user']=$lien_cv;
                $_SESSION['id_pays']=$id_pays;
                $_SESSION['id_type_contrat']=$id_type_contrat;
                $_SESSION['id_secteur']=$id_secteur;
                $_SESSION['id_partenaire']=$id_partenaire;
            }
            require_once("c_gestion_cv_offres.php");

            break;
        case 'deconnexion':
            $_SESSION=array();
            session_destroy();
            require_once("c_gestion_cv_offres.php");
            break;
        default:
             require_once("c_gestion_cv_offres.php");  
    }
} 
else 
{
     require_once("c_gestion_cv_offres.php");   
}
    
  
   
    

