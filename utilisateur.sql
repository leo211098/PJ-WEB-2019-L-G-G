-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 mai 2019 à 17:10
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
  `Pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`Id`, `Nom`, `Prenom`, `Adresse1`, `Adresse2`, `Ville`, `Code_Postal`, `Pays`, `Numero_Telephone`, `Numero_Carte`, `Nom_Carte`, `Type_Carte`, `Date_Expiration`, `Code_Securite`, `Mdp`, `Pseudo`) VALUES
(1, 'Lafay', 'Baptiste', 'Marlyzer', 'Cellezou', 'Marly', 78160, 'France', 781299, 7007007, 'Lafay Baptiste', 'Visa', 2021, 170, 'baba1998', 'balaf78'),
(2, 'Galard', 'Jonathan', 'Sannois', 'Paris', 'Sannois', 95200, 'France', 123456789, 10123, 'Jonathan Galard', 'MasterCard', 10121, 175, 'jo95', 'John');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Qt` int(11) NOT NULL,
  `MailV` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Prix` double NOT NULL,
  `Categorie` varchar(16) NOT NULL,
  `Ventes` int(11) NOT NULL,
  `Info1` varchar(255) NOT NULL,
  `Info2` varchar(255) NOT NULL,
  `Info3` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`Id`, `Qt`, `MailV`, `Img`, `Nom`, `Description`, `Prix`, `Categorie`, `Ventes`, `Info1`, `Info2`, `Info3`) VALUES
(1, 12, 'vendeur1@gmail.com', '51Fp54c75SL._SX477_BO1,204,203,200_.jpg', 'Vingt mille lieues sous les mers', 'Auteur: Jules vernes\r\nMaison d\'edition: hachette\r\nDate de parution:1869\r\n', 10, 'Livres', 0, 'Jules vernes', 'hachette', '1869'),
(2, 3, 'vendeur2@gmail.com', '41fDeh9mhIL._SX307_BO1,204,203,200_.jpg', 'L\'alchimiste', 'Auteur: Paolo Coelho\r\nMaison d\'edition: J\'ai lu\r\nParution: 1988\r\n', 15, 'Livres', 0, 'Paolo Coelho', 'J\'ai lu', '1988'),
(3, 7, 'vendeur@rigyde.fr', '41o-VpCePaL._SX376_BO1,204,203,200_.jpg', 'Vivre avec la Terre', 'Auteur: Charles Hervé-Gruyer\r\nMaison d\'édition: Actes sud\r\nParution: 2019', 20, 'Livres', 0, 'Charles Hervé-Gruyer', 'Actes sud', '2019'),
(4, 25, 'vendeur3@gmail.com', '41fgs7rdA8L._SX359_BO1,204,203,200_.jpg', 'Candide', 'Auteur: voltaire\r\nMaison d\'édition: Larousse\r\nParution: 1759', 7, 'Livres', 0, 'voltaire', 'larousse', '1759'),
(5, 18, 'Vendeur5@gmail.com', '51ZS6mE9PHL._SX346_BO1,204,203,200_.jpg', 'Harry Potter L\'école des sorciers', 'Auteur: J.K.Rowling\r\nMaison d\'édition: j\'ai lu\r\nDate de parution: 2010', 12, 'Livres', 0, 'J.K.Rowling', 'j\'ai lu', '2010'),
(6, 17, 'vendeur1@gmail.com', '51XLX7SwQvL._SX318_BO1,204,203,200_.jpg', 'One punch Man', 'Auteur: Yūsuke Murata\r\nMaison d\'édition: Nathan\r\nDate de parution: 2015', 7, 'Livres', 0, 'Yūsuke Murata', 'nathan', '2015'),
(7, 18, 'vendeur1@gmail.com', '61aGn3bm5TL.jpg', 'Breakfast in america', 'Auteur: Supertramp\r\nAnnée: 1979\r\nlabel: Universal\r\n', 11, 'Musique', 0, 'Supertramp', '1979', 'Universal'),
(8, 17, 'vendeur2@gmail.com', 'download.jpg', 'A night at opera', 'Artiste: Queen\r\nlabel: Republic\r\nAnnée: 1975', 10, 'Musique', 0, 'Queen', 'Republic', '1975'),
(9, 3, 'vendeur3@gmail.com', 'deuxfrere.jpg', 'Deux frères', 'Auteur: PNL\r\nlabel: Universal\r\nAnnée: 2019', 15, 'Musique', 0, 'PNL', 'Universal', '2019'),
(10, 7, 'vendeur3@gmail.com', '81yiAVcBpAL._SL1500_.jpg', 'Velo enfant', 'Marque: Hambros\r\nActivité: Education\r\nCouleur: rouge', 12, 'Loisirs', 4, 'Hambros', 'Education', 'Rouge'),
(11, 20, 'vendeur5@gmail.com', 'danslalegende.jpg', 'Dans la légende', 'Artiste: PNL\r\nLabel: Universal\r\nAnnée: 2016', 12, 'Musique', 0, 'PNL', 'Universal', '2016'),
(12, 50, 'vendeur4@gmail.com', 'veste.jpg', 'Veste', 'Marque: Brice\r\nSexe: Homme\r\nPièce: Veste\r\n', 30, 'Vetements', 1, 'Brice', 'Homme', 'Veste'),
(13, 50, 'vendeur1@gmail.com', 't-shirt.jpg', 't-shirt blanc', 'Marque: levi\'s\r\nSexe: Homme\r\nPièce: t-shirt', 20, 'Vetements', 3, 'levi\'s', 'Homme', 't-shirt'),
(14, 15, 'vendeur3@gmail.fr', 't-shirtF.jpg', 't-shirt Levi\'s', 'Marque: Levi\'s\r\nGenre: Femme\r\nPiece: T-shirt', 13, 'Vetements', 5, 'Levi\'s', 'Femme', 'T-shirt'),
(15, 20, 'vendeur2@gmail.com', 'jeans.jpg', 'Jeans ', 'Marque: Levi\'s\r\nGenre: Homme\r\nPièce: Jeans', 50, 'Vetements', 0, 'Levi\'s', 'Homme', 'Jeans'),
(16, 20, 'vendeur1@gmail.fr', 'jeansF.jpg', 'Jeans', 'Marque: Levi\'s\r\nGenre: Femme\r\nPièce: Jeans', 50, 'Vetements', 0, 'Levi\'s', 'Femme', 'Jeans'),
(17, 20, 'vendeur3@gmail.com', 'nikepaire.jpg', 'Nike air max', 'Marque: Nike\r\nGenre: Mixte\r\nPièce: Chaussures', 110, 'Vetements', 0, 'Nike', 'Mixte', 'Chaussures'),
(18, 10, 'vendeur5@gmail.com', 'nike.jpg', 'Nike air Max', 'Marque: Nike\r\nGenre: Mixte\r\nPièce: Chaussures', 120, 'Vetements', 2, 'Nike', 'Mixte', 'Chaussures'),
(19, 20, 'vendeur3@gmail.com', 'monopoly.jpg', 'Monopoly', 'Marque: Monopoly\r\nActivité: Jeu de société\r\nCouleur: Original', 50, 'Loisirs', 1, 'Monopoly', 'Jeu de société', 'Original'),
(20, 20, 'vendeur1@gmail.com', 'arc.jpg', 'Arc', 'Marque: petitjean\r\nActivité: Tir à l\'arc\r\nCouleur: Noir', 500, 'Loisirs', 2, 'petitJean', 'Tir à l\'arc', 'Noir'),
(21, 10, 'vendeur2@mail.com', 'tibia.jpg', 'Protège tibia', 'Marque: Nike\r\nActivité: Football\r\nCouleur: violet', 17, 'Loisirs', 1, 'Nike', 'Football', 'violet'),
(22, 10, 'vendeur3@gmail.com', 'gant.jpg', 'Gants de gardien', 'Marque: Nike\r\nActivité: Football\r\nCouleur: Blanc', 20, 'Loisirs', 0, 'Nike', 'Football', 'Blanc'),
(23, 10, 'vendeur5@gmail.com', 'ballon.jpg', 'Ballon', 'Marque: Nike\r\nActivité: Football\r\nCouleur: Jaune', 30, 'Loisirs', 2, 'Nike', 'Football', 'Jaune'),
(24, 5, 'vendeur4@gmail.com', 'destin.jpg', 'Destin', 'Artiste: Ninho \r\nlabel: Universal \r\nAnnée: 2019', 10, 'Musique', 3, 'Ninho', 'Universal', '2019'),
(25, 25, 'vendeur2@gmail.com', 'commeprevu.jpg', 'Comme prévu', 'Artiste: Ninho \r\nlabel: Universal \r\nAnnée: 2015', 9, 'Musique', 1, 'Ninho', 'Universal', '2015');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Mail` varchar(255) NOT NULL,
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
  `Img` varchar(255) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`Mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Mail`, `Nom`, `Prenom`, `Adresse1`, `Adresse2`, `Ville`, `Code_Postal`, `Pays`, `Numero_Telephone`, `Numero_Carte`, `Nom_Carte`, `Type_Carte`, `Date_Expiration`, `Code_Securite`, `Img`, `Type`, `Mdp`) VALUES
('lb@gmail.com', 'Lafay', 'Baptiste', 'Marlyzer', 'Cellezou', 'Marly', 78160, 'France', 781299, 7007007, 'Lafay Baptiste', 'Visa', 2021, 170, 'on-aide-une-personne-1547758678.jpg', 'Acheteur', 'baba1998'),
('lg@gmail.com', 'gerardin', 'leo', 'Marlyzer', 'Cellezou', 'Marly', 78160, 'France', 781299, 7007007, 'Lafay Baptiste', 'Visa', 2021, 170, 'on-aide-une-personne-1547758678.jpg', 'Vendeur', 'baba1998'),
('vendeur1@gmail.com', 'Laf', 'Maxime', '1 rue du festival', '5 rue du festival', 'Paris', 75018, 'France', 13258745, 12, 'Maxime laf', 'Visa', 70121, 123, '', 'Vendeur', 'vendeur1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
