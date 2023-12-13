<?php

include 'config.php';

$requete = "SELECT idEtudiant  FROM etudiant";
$resultat = mysqli_query($conn, $requete);

$somme = 0;
while ($row = mysqli_fetch_assoc($resultat)) {
    $id_etudiant = $row['idEtudiant'];
    $somme =+ $id_etudiant;
}


?>