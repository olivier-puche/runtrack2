<?php

    $nb=0;

    while ($nb<=1337)
        
    {
        if ($nb != 26 && $nb != 37 && $nb != 88 && $nb != 1111 && $nb != 3233)
        {
            echo ($nb.'<br>');
        }

        $nb= $nb + 1;
    }

?>