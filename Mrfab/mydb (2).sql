-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 25 nov. 2023 à 12:39
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idcours` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `taillefichier` varchar(45) DEFAULT NULL,
  `typeficier` varchar(45) DEFAULT NULL,
  `professeur_idprofesseur` int DEFAULT NULL,
  `Quiz_id` int DEFAULT NULL,
  PRIMARY KEY (`idcours`),
  KEY `fk_cours_professeur1_idx` (`professeur_idprofesseur`),
  KEY `fk_cours_Quiz1_idx` (`Quiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idcours`, `nom`, `taillefichier`, `typeficier`, `professeur_idprofesseur`, `Quiz_id`) VALUES
(1, 'DIANGITUKULU attestation de reussite G3 2020.', '591453', 'application/pdf', NULL, NULL),
(2, 'TEST PROCREDIT.pdf', '114563', 'application/pdf', NULL, NULL),
(3, 'équivalent de diplome.pdf', '391723', 'application/pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `matricule` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `cpassword` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEtudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nom`, `matricule`, `email`, `password`, `cpassword`) VALUES
(1, 'jovial kayembe', '147852', 'jovialkayem@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(2, 'kkk', '123456', 'kkk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(3, 'joella', '12456', 'joella@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(4, 'ruth', '12456', 'ruth@gmail.com', '9d6db80a2fa5979e9546396d298d89fc', NULL),
(5, 'jaella', '123456', 'jaella@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `idInscription` int NOT NULL AUTO_INCREMENT,
  `id_Etudiant` int DEFAULT NULL,
  `id_cour` int DEFAULT NULL,
  PRIMARY KEY (`idInscription`),
  KEY `fk_Inscription_Etudiant1_idx` (`id_Etudiant`),
  KEY `fk_Inscription_cours1_idx` (`id_cour`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `idprofesseur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cours` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprofesseur`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`idprofesseur`, `nom`, `prenom`, `email`, `cours`) VALUES
(3, 'jovial', 'kayembe', 'jovialkayembe99@gmail.com', NULL),
(7, 'KAJIBALE', 'KAYEMBE', 'jovialkayembe99@gmail.com', NULL),
(8, 'RUTK', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `idQuiz` int NOT NULL AUTO_INCREMENT,
  `trite_` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idQuiz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_cours_professeur1` FOREIGN KEY (`professeur_idprofesseur`) REFERENCES `professeur` (`idprofesseur`),
  ADD CONSTRAINT `fk_cours_Quiz1` FOREIGN KEY (`Quiz_id`) REFERENCES `quiz` (`idQuiz`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `fk_Inscription_cours1` FOREIGN KEY (`id_cour`) REFERENCES `cours` (`idcours`),
  ADD CONSTRAINT `fk_Inscription_Etudiant1` FOREIGN KEY (`id_Etudiant`) REFERENCES `etudiant` (`idEtudiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
