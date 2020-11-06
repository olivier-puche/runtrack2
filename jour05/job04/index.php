<?php

function calcule($a, $operation, $b)
{

switch ($operation)
{
    case "+":
    $resultat = $a + $b;
    break;

    case "-":
    $resultat = $a-$b;
    break;
        
    case "*":
    $resultat = $a*$b;
    break;

    case "/":
    $resultat = $a/$b;
    break;

    case "%":
    $resultat = $a%$b;
    break;

}

    return $resultat;

}

$returncalres = calcule (2, "*", 3);
echo $returncalres;
  
?>