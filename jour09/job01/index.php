<?php

$db= mysqli_connect ("localhost","root","","jour08");
$query = mysqli_query($db,"SELECT * FROM etudiants");
$crea= mysqli_fetch_all ($query);

var_dump($crea);

$query2 = "SELECT column_name FROM information_schema.columns WHERE table_name = 'etudiants'";
$crea2 = mysqli_query ($db, $query2);
$champs = mysqli_fetch_all($crea2);

var_dump($champs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>

<table>
    <thead>
        <?php
        foreach ($champs as $champ) 
    {

        echo "<th>".$champ[0]."</th>";

    }

    ?>
    </thead>


    <tbody>
    <?php
    
    foreach ($crea as $key => $etudiants) 
    {

        echo "<tr>";
        
        foreach ($etudiants as $key2 => $value)
        {
            echo "<td>".$value."</td>";
        }
        
        echo "</tr>";
    }
    
    ?>
    </tbody>
 
</table>

</html>
