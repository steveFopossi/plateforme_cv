<?php


if (isset($_GET['ctrlaction'])) 
{
    switch ($_GET['ctrlaction']) 
    {
        case 'contacter':
            require("vues/contact/v_nousContacter.php");
         
            break;
        case 'envoyerMessage':
            if(isset($_POST['nom']))
            {
                $nom= htmlspecialchars($_POST['nom']);
                $email= htmlspecialchars($_POST['email']);
                $message= htmlspecialchars($_POST['message']);
                $sujet = "Renseignements";
                 // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                 $headers  = 'MIME-Version: 1.0' . "\r\n";
                 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                 // En-têtes additionnels
                 $headers .= "From: $nom <$email>" . "\r\n"; 
                 mail('contact@rhopen.fr',$sujet,$message,$headers);
                 require("vues/contact/v_nousContacter.php");
            }
            break;
          
    }
} 
else 
{
   
    include("vues/accueil/v_accueil.php");
}
