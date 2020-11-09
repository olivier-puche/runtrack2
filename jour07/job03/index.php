<?php
session_start();

if (isset($_POST["reset"])) 
{
    session_destroy();
    session_start ();
}

if(!isset($_SESSION["prenom"]))

{
    $_SESSION ["prenom"] = ''; 
}


if (isset($_POST["valide"])) 
{
    $_SESSION ["prenom"] = $_SESSION ["prenom"]  . $_POST ["prenom"] .'<br>';
}

echo $_SESSION["prenom"];
?>

<!DOCTYPE html>

<form action="index.php" method="post">
    <input type="text" name="prenom" />
    <button name="valide" type="submit" value="valide">valider</button>
    <button name="reset" value="reset">reset</button>
</form>

</html>
