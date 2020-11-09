<?php
session_start();

if(!isset($_SESSION['nbvisites'])) 

{
    $_SESSION['nbvisites'] = 0;
}
    
else {
    $_SESSION['nbvisites']++;

}

if (isset($_POST) && isset ($_POST['reset']))

{
    $_SESSION ['nbvisites']=0;
}

echo 'Page visitée ' . $_SESSION['nbvisites'] . ' fois ce site';

?>

<!DOCTYPE html>

<form action="index.php" method="post">
  <button name="reset" type="submit" value="reset">reset</button>
</form>

</html>
