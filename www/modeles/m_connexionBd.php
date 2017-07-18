<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function connexion() 
{
    
    try 
    {
         $bdd = new PDO('mysql:host=hilanofrjestevy.mysql.db;dbname=hilanofrjestevy;charset=utf8','hilanofrjestevy','Steve1234',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          return $bdd; 
    } 
    catch (Exception $e) 
    {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
   
}

$connexion = connexion();

