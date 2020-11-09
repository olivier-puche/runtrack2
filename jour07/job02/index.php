<?php
session_start();

if (!isset($_COOKIE['nbvisites']) || isset($_POST['reset'])) //  SIGNIFIE OU || (shift alt L)
{
    setcookie('nbvisites', 1) ;
}

else
{
    setcookie('nbvisites', $_COOKIE['nbvisites'] += 1);

}

echo 'Page visitée ' . $_COOKIE['nbvisites' ] . ' fois ce site';

?>

<!DOCTYPE html>

<form action="index.php" method="post">
    <button name="reset" type="submit" value="reset">reset</button>
</form>

</html>