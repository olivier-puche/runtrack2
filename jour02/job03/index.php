<?php

    $nb=0;

    while ($nb<=100)
        
    {

        if ($nb<=20)
        {
            echo ('<i>'.$nb.'</i><br>');
        }
        
        elseif ( 25<=$nb  && $nb<=50) 
        {

            if ($nb==42)
            { 
                echo ("La Plateforme_".'<br>');
            }

            else 
            {
                echo('<u>'.$nb.'</u><br>');
            }
        } 
        
        else 
        {
            echo ($nb.'<br>');
        }
        
        $nb= $nb + 1;
    }

?>