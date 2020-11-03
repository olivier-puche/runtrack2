<?php

    $nb=0;

    while ($nb<=1337)
        
    {
        if($nb == 42)
        {
            echo('<b><u>'.$nb.'</b></u>'.'<br>');
        }

        else {
            echo ($nb.'<br>');
        }

        $nb= $nb + 1;
    }

?>