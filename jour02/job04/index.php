<?php

    $nb=0;

    while ($nb<=1000)
        
    {
        if ($nb %1==0 && $nb %5 ==0)
        {
            echo 'FizzBuzz<br>';
          }

        elseif ($nb %3==0) 
        {
            echo 'Fizz<br>';
        }  

        elseif ($nb %5==0)
        {
            echo 'Buzz<br>';

        }

        else
        {
            echo $nb.'<br>';
        }

        $nb= $nb + 1;
    }

?>