-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Janvier 2016 à 16:06
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `code_cat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`code_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`code_cat`, `nom_cat`, `description`) VALUES
(1, 'ordinateurs', 'ordinateurs'),
(2, 'imprimantes', ''),
(3, 'telephones', ''),
(4, 'televiseurs', 'téléviseurs');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `ref_produit` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `disponible` tinyint(4) NOT NULL,
  `promotion` tinyint(4) NOT NULL,
  `selectionne` tinyint(4) NOT NULL,
  `code_cat` int(11) NOT NULL,
  PRIMARY KEY (`ref_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`ref_produit`, `designation`, `quantite`, `prix`, `photo`, `disponible`, `promotion`, `selectionne`, `code_cat`) VALUES
('imp1', 'imprimante HP', 2, 300, 'imp.jpg', 1, 1, 1, 2),
('ord1', 'acer aspire intel core i3 deuxieme génération', 12, 350, 'pc1.png', 1, 1, 1, 1),
('ord2', 'Lenevo x201 intel Core i7 Ecran tactile', 2, 450, 'pc3.jpg', 1, 0, 1, 1),
('ordi3', 'Pc samsung', 1, 350, 'pc2.jpg', 1, 0, 1, 1),
('tel1', 'iphone4', 45, 450, 'iphone.png', 1, 0, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`login`, `password`, `niveau`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 0),
('user', 'user', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
