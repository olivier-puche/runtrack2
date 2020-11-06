<!DOCTYPE html>
<html lang="fr">

<form action="index.php" method="get">

    <label for="name">Nom</label>
    <input type="text" id="name" name="user_name" required/>

    <label for="name">Prénom</label>
    <input type="text" id="first name" name="name" required/>

    <input type="submit" value="VALIDER LES ÉLEMENTS"/>

</form>

<?php 

/*foreach ($_GET as $key => $values) 
                {
                    echo $key, $values;

var_dump ($values);

                } */
?>

<table>
    <thead>
        <tr>
            <th>Arguments</th>
            <th>Valeurs</th>
        </tr>
    </thead>
    <tbody>
            <?php

                foreach ($_GET as $key => $values) 
                {
                    echo"<tr><td>$key</td> <td>$values</td></tr>";

                }

                ?>
    </tbody> 
</table>

</html>
