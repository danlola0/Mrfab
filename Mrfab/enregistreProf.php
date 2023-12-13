<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

// Se connecter à la base de données (assurez-vous de renseigner vos propres informations de connexion)
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = '';
$baseDeDonnees = 'mydb';

$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion à la base de données
if (!$connexion) {
  die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Échapper les caractères spéciaux pour éviter les injections SQL
$nom = mysqli_real_escape_string($connexion, $nom);
$prenom = mysqli_real_escape_string($connexion, $prenom);
$email = mysqli_real_escape_string($connexion, $email);

// Insérer les données dans la base de données
$sql = "INSERT INTO professeur (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

if (mysqli_query($connexion, $sql)) {
  header('location:Dashboard.php');;
} else {
  echo "Erreur lors de l'enregistrement du professeur : " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>