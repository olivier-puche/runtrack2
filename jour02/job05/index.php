<?php

$nombre=0;

while($nombre <= 1000)
{
    $i =1;
    $multiple=0;

        while($i <= $nombre)
        {
            if ($nombre % $i == 0)
            {
                $multiple++;
            }

            $i++;
        }
    

    if($multiple == 2)
    {
        echo $nombre .'<br>';
    }

    $nombre++;
}


?>