-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 11 juin 2019 à 19:57
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_motus`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_groupe` int(11) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_groupe`, `nom`, `prenom`, `email`, `mdp`, `date_naissance`, `pays`, `date_inscription`) VALUES
(1, 3, 'administrateur_1', NULL, 'admin_1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL),
(2, 2, 'say', 'sath', 'sayan.sath@gmail.com', '9cdfb439c7876e703e307864c9167a15', '1998-10-10', 'France', '2019-05-13'),
(14, 2, 'Jean', 'Dupont', 'jeanDupont@gmail.com', 'f9824ba4a0c1053d3c448d752236fe4f', '2005-10-10', 'France', '2019-05-15'),
(15, 2, 'Montparnasse', 'Luc', 'luc@gmail.com', 'c490825595c06727da1d1a11497eb89f', '2003-05-10', 'Bahamas', '2019-05-15'),
(16, 2, 'montaigne', 'pierre', 'montaigne@gmail.com', 'b47d4ab34723d0e272e68b09ca2be155', '1997-12-05', 'France', '2019-05-15'),
(21, 2, 'test', 'projet', 'test_projet@gmail.com', '5a2e54ee57e5b7273b9a8fed78c1ebd8', '1998-10-07', 'Allemagne', '2019-05-16'),
(22, 2, 'dupont', 'pierre', 'pierre@gmail.com', '9cdfb439c7876e703e307864c9167a15', '1999-11-10', 'France', '2019-06-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
