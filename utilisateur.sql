-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 15:29
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `utilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Code_Postal` int(11) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Numero_Telephone` int(11) NOT NULL,
  `Numero_Carte` int(11) NOT NULL,
  `Nom_Carte` varchar(255) NOT NULL,
  `Type_Carte` varchar(255) NOT NULL,
  `Date_Expiration` int(11) NOT NULL,
  `Code_Securite` int(11) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`Id`, `Nom`, `Prenom`, `Adresse1`, `Adresse2`, `Ville`, `Code_Postal`, `Pays`, `Numero_Telephone`, `Numero_Carte`, `Nom_Carte`, `Type_Carte`, `Date_Expiration`, `Code_Securite`, `Mdp`) VALUES
(1, 'Lafay', 'Baptiste', 'Marlyzer', 'Cellezou', 'Marly', 78160, 'France', 781299, 7007007, 'Lafay Baptiste', 'Visa', 2021, 170, 'baba1998');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
