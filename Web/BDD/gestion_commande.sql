-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Mai 2018 à 14:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_commande`
--

-- --------------------------------------------------------

--
-- Structure de la table `boitiers`
--

CREATE TABLE IF NOT EXISTS `boitiers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `hauteur` int(11) NOT NULL,
  `matiere` char(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `boitiers`
--

INSERT INTO `boitiers` (`id`, `nom`, `hauteur`, `matiere`) VALUES
(11, 'Boitier noir', 14, 'plastique'),
(13, 'Boitier Rouge', 10, 'plastique'),
(21, 'Boitier argente', 11, 'metal'),
(24, 'Boitier noir', 2, 'plastique'),
(25, 'Boitier argente', 17, 'metal');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPP` int(200) NOT NULL,
  `quantite` int(200) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idLot` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE IF NOT EXISTS `lot` (
  `id` int(11) NOT NULL,
  `quantiter` int(11) NOT NULL,
  `idProductionPersonnaliser` int(11) NOT NULL,
  `EtatLot` enum('produit','pas produit') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `productionpersonnalisee`
--

CREATE TABLE IF NOT EXISTS `productionpersonnalisee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(200) NOT NULL,
  `idBoitiers` int(11) NOT NULL,
  `idTraitements` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `productionpersonnalisee`
--

INSERT INTO `productionpersonnalisee` (`id`, `reference`, `idBoitiers`, `idTraitements`) VALUES
(6, 'NOIR FRAISAGE', 11, 8),
(7, 'ROUGE TAMPONNAGE', 13, 12),
(8, 'ROUGE FRAISAGE ET TAMPONNAGE', 13, 11),
(9, 'ARGENTE AUCUN USINAGE', 21, 7),
(11, 'NOIR TAMPONNAGE', 22, 12);

-- --------------------------------------------------------

--
-- Structure de la table `traitements`
--

CREATE TABLE IF NOT EXISTS `traitements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `traitements`
--

INSERT INTO `traitements` (`id`, `nom`) VALUES
(7, 'aucun traitement'),
(8, 'fraisage'),
(11, 'fraisage et tamponnage'),
(12, 'tamponnage');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'ylies', 'saukret');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
