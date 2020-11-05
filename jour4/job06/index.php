<form method="get" action="index.php">

    <input type="text" name="nombre">
    <button type="submit" name="valider">Validation</button>

</form>

<?php

    if (isset($_GET["nombre"]))
    {
        if($_GET["nombre"]%2==0)

        {echo 'nombre pair';} 

        else 
        {echo 'nombre impair';}
    }

?>