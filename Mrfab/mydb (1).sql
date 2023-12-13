-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 30 juil. 2023 à 17:23
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `password`) VALUES
(4, 'fabrice', 'fabrice@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idcours` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `durer` datetime DEFAULT NULL,
  `Etudiant_idEtudiant` int(11) NOT NULL,
  PRIMARY KEY (`idcours`,`Etudiant_idEtudiant`),
  KEY `fk_cours_Etudiant_idx` (`Etudiant_idEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEtudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nom`, `email`, `password`) VALUES
(1, 'JOVIAL', 'rombaut@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'JOVIAL', 'JOV@gmail.com', '83cdcec08fbf90370fcf53bdd56604ff'),
(3, 'vial', 'OV@gmail.com', '9d6db80a2fa5979e9546396d298d89fc'),
(4, 'glodi', 'glodi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'PERINA MOSEKA', 'joella@gmail.com', '9d6db80a2fa5979e9546396d298d89fc'),
(6, 'ruth', 'ruth@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `cours_idcours` int(11) NOT NULL,
  `cours_Etudiant_idEtudiant` int(11) NOT NULL,
  PRIMARY KEY (`idMatiere`,`cours_idcours`,`cours_Etudiant_idEtudiant`),
  KEY `fk_Matiere_cours1_idx` (`cours_idcours`,`cours_Etudiant_idEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `idQuiz` int(11) NOT NULL AUTO_INCREMENT,
  `trite_` varchar(45) DEFAULT NULL,
  `Matiere_idMatiere` int(11) NOT NULL,
  `Matiere_cours_idcours` int(11) NOT NULL,
  `Matiere_cours_Etudiant_idEtudiant` int(11) NOT NULL,
  PRIMARY KEY (`idQuiz`,`Matiere_idMatiere`,`Matiere_cours_idcours`,`Matiere_cours_Etudiant_idEtudiant`),
  KEY `fk_Quiz_Matiere1_idx` (`Matiere_idMatiere`,`Matiere_cours_idcours`,`Matiere_cours_Etudiant_idEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
