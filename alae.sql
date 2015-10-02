-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 10 Janvier 2015 à 17:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `alae`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(30) NOT NULL,
  `mp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `identifiant`, `mp`) VALUES
(1, 'pierre', '84675f2baf7140037b8f5afe54eef841');

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE IF NOT EXISTS `enfant` (
  `id_enfant` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `specificite` varchar(255) COLLATE utf8_bin NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_famille` int(3) NOT NULL,
  PRIMARY KEY (`id_enfant`),
  KEY `id_famille` (`id_famille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE IF NOT EXISTS `famille` (
  `id_famille` int(3) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(30) NOT NULL,
  `mp` varchar(50) NOT NULL,
  `nom1` varchar(100) NOT NULL,
  `prenom1` varchar(100) NOT NULL,
  `adresse11` varchar(100) DEFAULT NULL,
  `adresse12` varchar(100) DEFAULT NULL,
  `cp1` int(5) unsigned zerofill DEFAULT NULL,
  `ville1` varchar(100) DEFAULT NULL,
  `mail1` varchar(50) DEFAULT NULL,
  `tel11` varchar(15) NOT NULL,
  `tel12` varchar(15) DEFAULT NULL,
  `tel13` varchar(15) DEFAULT NULL,
  `fonction1` varchar(50) NOT NULL COMMENT 'Père Mère Autre',
  `nom2` varchar(100) DEFAULT NULL,
  `prenom2` varchar(100) DEFAULT NULL,
  `adresse21` varchar(100) DEFAULT NULL,
  `adresse22` varchar(100) DEFAULT NULL,
  `cp2` char(5) DEFAULT NULL,
  `ville2` varchar(100) DEFAULT NULL,
  `mail2` varchar(50) DEFAULT NULL,
  `tel21` varchar(15) DEFAULT NULL,
  `tel22` varchar(15) DEFAULT NULL,
  `tel23` varchar(15) DEFAULT NULL,
  `fonction2` varchar(50) DEFAULT NULL COMMENT 'Père Mère Autre',
  `date_envoi_mail_demande_inscription` date DEFAULT NULL,
  PRIMARY KEY (`id_famille`),
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `id_personnel` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_personnel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `enfant_ibfk_1` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id_famille`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;