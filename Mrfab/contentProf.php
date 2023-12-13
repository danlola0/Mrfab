<?php

include 'config.php';

$requete = "SELECT idprofesseur  FROM professeur";
$resultat = mysqli_query($conn, $requete);

$som = 0;
while ($row = mysqli_fetch_assoc($resultat)) {
    $idprofesseur = $row['idprofesseur'];
    $som =+ $idprofesseur;
}

?>