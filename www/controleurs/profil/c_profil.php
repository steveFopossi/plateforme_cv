<?php

if(isset($_GET['ctrlaction'])){
    switch($_GET['ctrlaction'])
    {
        case 'modification':
            include("vues/accueil/v_profil.php");
            break;
        case 'changerInfosUser':
            modificationInfosUser($_SESSION[USER_ID],$_POST[USER_NOM],$_POST[USER_PRENOM],$_POST[USER_VILLE],$_POST[USER_NUM]);
             $_SESSION[USER_NOM] = $_POST[USER_NOM];
                    $_SESSION[USER_PRENOM] = $_POST[USER_PRENOM];
                    $_SESSION[USER_VILLE] = $_POST[USER_VILLE];
                    $_SESSION[USER_NUM] = $_POST[USER_NUM];
            include("vues/accueil/v_profil.php");
            break;
        case 'photo':
            if(isset($_FILES[USER_PHOTO])){
                $image = basename($_FILES[USER_PHOTO]['name']);
        	
                $dossier = 'photo_user/';
                $extensions = array('.png', '.gif', '.jpg', '.jpeg');
                $extension = strrchr($_FILES[USER_PHOTO]['name'], '.');
                if(in_array($extension, $extensions)){
                    $fichier = strtr($image,
                      'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                    move_uploaded_file($_FILES[USER_PHOTO]['tmp_name'], $dossier . $fichier);
                }
                modifierPhotoUser($_SESSION[USER_ID],$image);
            }
            header("Location: index.php?action=profil&ctrlaction=modification");
            break;
    }
}

?>