<?php
$db = mysqli_connect ('localhost','root', '', 'jour08');
$data = mysqli_query ($db, "SELECT * FROM etudiants WHERE naissance >= '2002-11-10'");
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
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>E-mail</th>
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
