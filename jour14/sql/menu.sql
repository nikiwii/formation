-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 31 mai 2020 à 12:05
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
-- Base de données :  `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `titre_page` varchar(255) NOT NULL,
  `entree` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom`, `titre_page`, `entree`, `plat`, `dessert`) VALUES
(1, 'lundi', 'C\'est lundi ! C\'est ravioli !', 'Ravioli d\'endives', 'Ravioli de couscous', 'Ravioli de tiramissu'),
(2, 'mardi', 'Mardi ! Hummmm !', 'Velouté de carotte coco', 'Colombo de gambas au lait de coco', 'Clafoutis ananas-coco'),
(3, 'mercredi', 'J\'aime le Mercredi !', 'Velouté de panais aux pommes, crème de Camembert', 'Blanquette de veau : la meilleure recette', 'Clafoutis cerises : la meilleure recette'),
(4, 'jeudi', 'Jeudi entre ami(e)s', 'Mini quiches knacki moutarde', 'Quiche lorraine au Comté', 'Tartelettes citron-framboises'),
(5, 'vendredi', 'J\'aime le vendredi (soir)', 'Pain farcis aux épinards, petits pois et fromage - Gozlemes', 'Pâtes penne au pesto de roquette et épinards', 'Gâteau au yaourt et au citron vert'),
(6, 'samedi', 'Le super menu du samedi', 'Croquettes de Haricots Tarbais au piment d’Espelette', 'Poulet basquaise au jambon de Bayonne', 'Le gâteau Basque de ma grand-mère'),
(7, 'dimanche', 'Le Brunch du dimanche', 'Café, Jus d\'orange', 'Oeufs, saumon, salade', 'Croissant, pain au chocolat...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
