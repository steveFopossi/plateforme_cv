<?php


if (isset($_GET['ctrlaction'])) 
{
    switch ($_GET['ctrlaction']) 
    {
        case 'notre_demarche':
            require("vues/articles/v_article_notre_demarche.php");
            break;
        case 'autres_secteurs':
            require("vues/articles/v_article_autres_secteurs.php");
            break;
        case 'btp':
            require("vues/articles/v_article_btp.php");
            break;
        case 'informatique':
            require("vues/articles/v_article_informatique.php");
            break;
        case 'sante':
            require("vues/articles/v_article_sante.php");
            break;
     
      
       
    }
} 
else 
{
   header("Location: http://www.hilano.fr/");
}
