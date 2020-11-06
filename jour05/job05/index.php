<?php

function occurrences($str, $char)
{  
    
    $compteur=0;

    for ($i = 0; isset($str[$i]); $i+=1)
    {
        if ($char == $str[$i]) 
        {
            $compteur++;
        }
    }
    return $compteur;
}

$res=occurrences("LA PLATEFORME","E");
echo $res;

?>