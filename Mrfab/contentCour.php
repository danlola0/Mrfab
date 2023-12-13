<?php

include 'config.php';

$requete = "SELECT 	idcours  FROM cours";
$resultat = mysqli_query($conn, $requete);

$somCour = 0;
while ($row = mysqli_fetch_assoc($resultat)) {

    $idcours = $row['idcours'];

    $somCour =+ $idcours;
}
