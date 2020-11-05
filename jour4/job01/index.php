<!DOCTYPE html>
<html lang="fr">

<?php

$i=0;
foreach ($_GET as $key => $values) 
{
    $i++; 
}

    echo $i;

?>

<form action="index.php" method="get">

    <label for="name">Nom</label>
    <input type="text" id="name" name="user_name" required>

    <label for="name">Prénom</label>
    <input type="text" id="first name" name="name" required>

    <input type="submit" value="VALIDER LES ÉLEMENTS">

</form>

</html>