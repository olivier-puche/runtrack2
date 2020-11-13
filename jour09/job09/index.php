<?php 

$db = mysqli_connect('localhost', 'root', '', 'jour08');
$requete = mysqli_query($db, "SELECT * FROM salles ORDER BY capacite");
$result = mysqli_num_rows($requete);

?>

<table>
 <thead>
  <tr>
    <th>id</th> 
    <th>nom</th>
    <th>id_etage</th>
    <th>Capacite</th>
  </tr>
 </thead>

 <tbody>
<?php 

while($rs = mysqli_fetch_array($requete)){
   
    echo "<tr><td>$rs[id]</td>";
    echo "<td>$rs[nom]</td>";
    echo "<td>$rs[id_etage]</td>";
    echo "<td>$rs[capacite]</td></tr>";
}

?>

 </tbody>