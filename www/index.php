<?php

session_start();

require_once("modeles/m_connexionBd.php");
require_once("modeles/m_fonctionsCalculs.php");
require_once("modeles/m_fonctionsUsers.php");
require_once("modeles/m_fonctionsOffres.php");


if (isset($_GET['action'])) 
{
    switch ($_GET['action']) 
    {
        case 'authentification':
            include("controleurs/authentification/c_authentification.php");
            break;    
        case 'offres':
            require("controleurs/offres/c_offres.php");
            break;
        case 'cv':
            require("controleurs/infos_cv/c_cv.php");
            break;
        case 'profil':
            include("controleurs/profil/c_profil.php");
            break;
        case 'articles':
            require("controleurs/articles/c_articles.php");
            break;
         case 'contacter':
            require("controleurs/contact/c_contact.php");
            break;
        default:
            include("controleurs/authentification/c_authentification.php");
            
    }
} 
else 
{
    include("controleurs/authentification/c_authentification.php");
}
