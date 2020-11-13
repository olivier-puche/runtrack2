<?php
$db = mysqli_connect ('localhost','root', '', 'jour08');
$data = mysqli_query ($db, 'SELECT prenom, nom, naissance FROM etudiants WHERE sexe = \'femme\'');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau</title>
</head>
    <body>
        <table style="">
            <thead>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </thead>
            <tbody>
                <?php
                while(($all_result = mysqli_fetch_assoc($data))!= NULL )
                {
                    echo '<tr>';
                    foreach ( $all_result as $key => $value){
                        echo '<td>' .$value.'</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
