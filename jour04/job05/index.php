<form action="index.php" method="post">

    <label for="name">Nom</label>
    <input type="text" name="username" required>
    <br> <label for="password">Mot de passe</label>
    <input type="password" name="password" required>
    <br> <button type="submit" name="valider">Validation</button>

</form>

<?php

if (isset($_POST["username"]) && isset($_POST["password"])) 
{
    if ($_POST["username"] == "John" && $_POST ["password"] == "Rambo")
    {
        echo "C'est pas ma guerre";
    }
    else {
        echo "Votre pire";
    }
}

?>