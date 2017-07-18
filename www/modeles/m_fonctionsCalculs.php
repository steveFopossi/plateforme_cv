<?php

function convertirDateFormatAnglais($une_date)
{
    $temp=explode("-",$une_date);
    $retour="";
    if(!empty($une_date))
    {
       $retour=$temp[2].'-'.$temp[1].'-'.$temp[0]; 
    }
    
    return $retour; 
}

function convertirDateFormatFrancais($une_date)
{
    $temp=explode("-",$une_date);
    if($une_date=="")
    {
        $retour=$temp[0].'-'.$temp[1].'-'.$temp[2]; 
         return $retour;
    }
    return "";
}
