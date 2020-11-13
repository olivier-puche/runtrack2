<?php

$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requette = "SELECT etage.nom AS ETAGES, salles.nom AS SALLES FROM etage INNER JOIN salles ON salles.id_etage = etage.id";
$query = mysqli_query($connexion, $requette);

$i = 0;

echo "<table>";

while ($resultat = mysqli_fetch_assoc($query)) 
{

    if ($i == 0) 
    {
        foreach ($resultat as $key => $value) 
        {
        echo "<th>$key</th>";
        }
    $i++;
    }
    echo "<tr>";
foreach ($resultat as $key => $value) {
echo "<td>$value</td>";
}
echo "</tr>";

}
echo "</table>";
 ?>