-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 14 juil. 2025 à 08:14
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
-- Base de données : `exams2`
--

-- --------------------------------------------------------

--
-- Structure de la table `exam_categorie_object`
--

DROP TABLE IF EXISTS `exam_categorie_object`;
CREATE TABLE IF NOT EXISTS `exam_categorie_object` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `exam_categorie_object`
--

INSERT INTO `exam_categorie_object` (`id_categorie`, `nom_categorie`) VALUES
(1, 'esthetique'),
(2, 'bricolage'),
(3, 'mecanique'),
(4, 'cuisine');

-- --------------------------------------------------------

--
-- Structure de la table `exam_emprunt`
--

DROP TABLE IF EXISTS `exam_emprunt`;
CREATE TABLE IF NOT EXISTS `exam_emprunt` (
  `id_emprunt` int NOT NULL AUTO_INCREMENT,
  `idObject` int DEFAULT NULL,
  `idMembre` int DEFAULT NULL,
  `date_emprunt` datetime NOT NULL,
  `date_retour` datetime NOT NULL,
  PRIMARY KEY (`id_emprunt`),
  KEY `idObject` (`idObject`),
  KEY `idMembre` (`idMembre`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `exam_emprunt`
--

INSERT INTO `exam_emprunt` (`id_emprunt`, `idObject`, `idMembre`, `date_emprunt`, `date_retour`) VALUES
(1, 1, 2, '2025-07-05 00:00:00', '2025-07-12 00:00:00'),
(2, 2, 3, '2025-07-06 00:00:00', '2025-07-13 00:00:00'),
(3, 3, 1, '2025-07-07 00:00:00', '2025-07-14 00:00:00'),
(4, 4, 4, '2025-07-08 00:00:00', '2025-07-15 00:00:00'),
(5, 5, 2, '2025-07-09 00:00:00', '2025-07-16 00:00:00'),
(6, 6, 3, '2025-07-09 00:00:00', '2025-07-16 00:00:00'),
(7, 7, 1, '2025-07-10 00:00:00', '2025-07-17 00:00:00'),
(8, 8, 4, '2025-07-10 00:00:00', '2025-07-17 00:00:00'),
(9, 9, 2, '2025-07-11 00:00:00', '2025-07-18 00:00:00'),
(10, 10, 3, '2025-07-11 00:00:00', '2025-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `exam_image_object`
--

DROP TABLE IF EXISTS `exam_image_object`;
CREATE TABLE IF NOT EXISTS `exam_image_object` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `idObject` int DEFAULT NULL,
  `nom_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `idObject` (`idObject`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `exam_menbre`
--

DROP TABLE IF EXISTS `exam_menbre`;
CREATE TABLE IF NOT EXISTS `exam_menbre` (
  `id_membre` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) DEFAULT NULL,
  `date_naissance` datetime NOT NULL,
  `genre` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `mdp` varchar(200) NOT NULL,
  `image_profile` varchar(200) NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `exam_menbre`
--

INSERT INTO `exam_menbre` (`id_membre`, `nom`, `date_naissance`, `genre`, `email`, `ville`, `mdp`, `image_profile`) VALUES
(1, 'Alice', '2000-05-12 00:00:00', 'femme', 'alice@gmail.com', 'antananarivo', '1234', 'null'),
(2, 'Bob', '1898-02-23 00:00:00', 'homme', 'bob@gmail.com', 'toamasina', '1234', 'null'),
(3, 'claire', '2001-05-11 00:00:00', 'femme', 'claire@gmail.com', 'fianarantsoa', '4321', 'null'),
(4, 'davida', '2007-03-18 00:00:00', 'homme', 'davida@gmail.com', 'mahajanga', '4321', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `exam_object`
--

DROP TABLE IF EXISTS `exam_object`;
CREATE TABLE IF NOT EXISTS `exam_object` (
  `id_object` int NOT NULL AUTO_INCREMENT,
  `nom_object` varchar(100) DEFAULT NULL,
  `idCategorie` int DEFAULT NULL,
  `idMembre` int DEFAULT NULL,
  PRIMARY KEY (`id_object`),
  KEY `idCategorie` (`idCategorie`),
  KEY `idMembre` (`idMembre`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `exam_object`
--

INSERT INTO `exam_object` (`id_object`, `nom_object`, `idCategorie`, `idMembre`) VALUES
(1, 'Objet_1_1', 1, 1),
(2, 'Objet_1_2', 2, 1),
(3, 'Objet_1_3', 3, 1),
(4, 'Objet_1_4', 4, 1),
(5, 'Objet_1_5', 1, 1),
(6, 'Objet_1_6', 2, 1),
(7, 'Objet_1_7', 3, 1),
(8, 'Objet_1_8', 4, 1),
(9, 'Objet_1_9', 1, 1),
(10, 'Objet_1_10', 2, 1),
(11, 'Objet_2_1', 3, 2),
(12, 'Objet_2_2', 4, 2),
(13, 'Objet_2_3', 1, 2),
(14, 'Objet_2_4', 2, 2),
(15, 'Objet_2_5', 3, 2),
(16, 'Objet_2_6', 4, 2),
(17, 'Objet_2_7', 1, 2),
(18, 'Objet_2_8', 2, 2),
(19, 'Objet_2_9', 3, 2),
(20, 'Objet_2_10', 4, 2),
(21, 'Objet_3_1', 1, 3),
(22, 'Objet_3_2', 2, 3),
(23, 'Objet_3_3', 3, 3),
(24, 'Objet_3_4', 4, 3),
(25, 'Objet_3_5', 1, 3),
(26, 'Objet_3_6', 2, 3),
(27, 'Objet_3_7', 3, 3),
(28, 'Objet_3_8', 4, 3),
(29, 'Objet_3_9', 1, 3),
(30, 'Objet_3_10', 2, 3),
(31, 'Objet_4_1', 3, 4),
(32, 'Objet_4_2', 4, 4),
(33, 'Objet_4_3', 1, 4),
(34, 'Objet_4_4', 2, 4),
(35, 'Objet_4_5', 3, 4),
(36, 'Objet_4_6', 4, 4),
(37, 'Objet_4_7', 1, 4),
(38, 'Objet_4_8', 2, 4),
(39, 'Objet_4_9', 3, 4),
(40, 'Objet_4_10', 4, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
