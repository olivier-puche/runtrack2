<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier tableau php</title>
</head>

<?php

$bol =true;
$nbentier =100;
$chaine ="2novembre2020";
$nbflo =3.14;

?>

<table>
    <thead>

        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo gettype ($bol)?></td>
            <td>bol</td>
            <td><?php echo $bol?></td>
            
        </tr>
        <tr>
            <td>entier</td>
            <td><?php echo 'nbentier'?></td>
            <td><?php echo $nbentier?></td> 
        </tr>

        <tr>
            <td>chaine</td>
            <td>chainedecaractères</td>
            <td><?php echo $chaine?></td> 
        </tr>

        <tr>
            <td>nombrelfotant</td>
            <td>nbflo</td>
            <td><?php echo $nbflo?></td> 
    </tr>
    </tbody>
  
</table>

</html>
