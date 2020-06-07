-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 07 juin 2020 à 20:10
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation_restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `entree` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL,
  `ordre` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom`, `titre`, `entree`, `plat`, `dessert`, `ordre`) VALUES
(1, 'Jeudi', 'Le jeudi, c\'est sucré !', 'Salade de pâtes au sucre', 'Gigot aux fraises', 'Salade de fruit avec beaucoup de sucre', 4),
(3, 'Lundi', 'C\'est lundi ! C\'est ravioli !', 'Raviolis d\'endives', 'Ravioli de fromage', 'Ravioli de tiramisu', 1),
(5, 'Mercredi', 'Un mercredi de carottes !', 'Carottes rapées', 'Carottes et son jus de carotte', 'Carot Cake', 3);

-- --------------------------------------------------------

--
-- Structure de la table `simpledonnee`
--

DROP TABLE IF EXISTS `simpledonnee`;
CREATE TABLE IF NOT EXISTS `simpledonnee` (
  `id_simpledonnee` int(11) NOT NULL AUTO_INCREMENT,
  `iduu` varchar(255) NOT NULL,
  `valeur` text NOT NULL,
  PRIMARY KEY (`id_simpledonnee`),
  UNIQUE KEY `iduu` (`iduu`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `simpledonnee`
--

INSERT INTO `simpledonnee` (`id_simpledonnee`, `iduu`, `valeur`) VALUES
(1, 'TEXTE_ACCUEIL', 'L\'incroyable Restaurant la Bohême : Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Aenean massa. Nam pretium turpis et arcu. Pellentesque commodo eros a enim. Aenean imperdiet.\r\n\r\nCras sagittis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Vivamus euismod mauris. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Aenean ut eros et nisl sagittis vestibulum.\r\n\r\nSuspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Sed lectus. Curabitur suscipit suscipit tellus. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vulputate eleifend sapien.\r\n\r\nAliquam erat volutpat. Sed in libero ut nibh placerat accumsan. Vestibulum eu odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Etiam rhoncus.\r\n\r\nProin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Sed lectus. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'),
(3, 'TITRE_ACCUEIL', 'Bienvenue dans votre restaurant !!!!!!');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `identifiant` varchar(100) NOT NULL,
  `motdepasse` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `identifiant`, `motdepasse`) VALUES
(1, 'Nicolas', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
