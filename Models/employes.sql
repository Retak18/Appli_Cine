-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 jan. 2025 à 11:12
-- Version du serveur : 5.7.36
-- Version de PHP : 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `employes`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employes` int(3) NOT NULL,
  `prenom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` enum('m','f','o') COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_embauche` date NOT NULL,
  `salaire` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `id_employes`, `prenom`, `nom`, `sexe`, `service`, `date_embauche`, `salaire`) VALUES
(1, 350, 'Jean-pierre', 'Laborde', 'm', 'direction', '1999-12-09', 5000),
(2, 388, 'Clement', 'Gallet', 'm', 'commercial', '2000-01-15', 2300),
(3, 415, 'Thomas', 'Winter', 'm', 'commercial', '2000-05-03', 3550),
(4, 417, 'Chloe', 'Dubar', 'f', 'production', '2001-09-05', 1900),
(5, 491, 'Elodie', 'Fellier', 'f', 'secretariat', '2002-02-22', 1600),
(6, 509, 'Fabrice', 'Grand', 'm', 'comptabilite', '2003-02-20', 1900),
(7, 547, 'Melanie', 'Collier', 'f', 'commercial', '2004-09-08', 3100),
(8, 592, 'Laura', 'Blanchet', 'f', 'direction', '2005-06-09', 4500),
(9, 627, 'Guillaume', 'Miller', 'm', 'commercial', '2006-07-02', 1900),
(10, 655, 'Celine', 'Perrin', 'f', 'commercial', '2006-09-10', 2700),
(11, 699, 'Julien', 'Cottet', 'm', 'secretariat', '2007-01-18', 1390),
(12, 701, 'Mathieu', 'Vignal', 'm', 'informatique', '2008-12-03', 2000),
(13, 739, 'Thierry', 'Desprez', 'm', 'secretariat', '2009-11-17', 1390),
(14, 780, 'Amandine', 'Thoyer', 'f', 'communication', '2010-01-23', 1500),
(15, 802, 'Damien', 'Durand', 'm', 'informatique', '2010-07-05', 2250),
(16, 854, 'Daniel', 'Chevel', 'm', 'informatique', '2011-09-28', 1700),
(17, 876, 'Nathalie', 'Martin', 'f', 'juridique', '2012-01-12', 3200),
(18, 900, 'Benoit', 'Lagarde', 'm', 'production', '2013-01-03', 2550),
(19, 933, 'Emilie', 'Sennard', 'f', 'commercial', '2014-09-11', 1800),
(20, 990, 'Stephanie', 'Lafaye', 'f', 'assistant', '2015-06-02', 1775);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
