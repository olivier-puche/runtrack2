<?php
session_start();

if (isset($_POST["connecte"])) || (isset($_POS["deco"]))
{
    setcookie('prenom');

}

echo $_POST;

else
{
    setcookie('nbvisites', $_COOKIE['prenom'];

}


?>

<!DOCTYPE html>

<form action="index.php" method="post">
    <input type="text" name="prenom" />
    <button name="connexion" type="submit" value="connecte">valider</button>
    <button name="deco" value="deco">reset</button>
</form>
</html>

