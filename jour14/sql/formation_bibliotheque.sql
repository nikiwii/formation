-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 juin 2020 à 19:17
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
-- Base de données :  `formation_bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `bio`) VALUES
(1, 'Tchekhov', 'Anton', 'Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Nam eget dui. Duis leo. Suspendisse feugiat. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.'),
(2, 'Nothomb', 'Amélie', 'Cras non dolor. Maecenas vestibulum mollis diam. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Sed aliquam ultrices mauris.'),
(3, 'Copi', '', 'Nam pretium turpis et arcu. Nam adipiscing. Fusce egestas elit eget lorem. Quisque ut nisi. Etiam sit amet orci eget eros faucibus tincidunt.'),
(4, 'Selby Jr', 'Hubert', 'Cras varius. Curabitur blandit mollis lacus. Praesent turpis. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Vestibulum fringilla pede sit amet augue.'),
(5, 'Boudard', 'Alphonse', 'Sed a libero. Proin faucibus arcu quis ante. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Etiam imperdiet imperdiet orci.'),
(6, 'Muller', 'Florence', 'Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Cras dapibus. Phasellus accumsan cursus velit. In dui magna, posuere eget, vestibulum et, tempor auctor, justo.'),
(7, 'Besson', 'Philippe', 'Vestibulum volutpat pretium libero. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. In ut quam vitae odio lacinia tincidunt. Phasellus magna. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum.'),
(8, 'Topor', 'Roland', 'Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Maecenas malesuada. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Nam commodo suscipit quam. Quisque id odio.');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id_livre` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `jeunesse` tinyint(1) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  PRIMARY KEY (`id_livre`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `titre`, `resume`, `jeunesse`, `auteur_id`) VALUES
(1, 'Le café du pauvre', 'Fusce convallis metus id felis luctus adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent blandit laoreet nibh. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Nulla facilisi.', 0, 5),
(2, 'La queue du Mickey', 'Morbi mollis tellus ac sapien. Cras sagittis. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Sed cursus turpis vitae tortor. Curabitur turpis.', 0, 6),
(3, 'La maison atlantique', 'Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Phasellus gravida semper nisi. Vivamus aliquet elit ac nisl. Vestibulum dapibus nunc ac augue. Vivamus consectetuer hendrerit lacus.', 0, 7),
(4, 'Attentat', 'Cras ultricies mi eu turpis hendrerit fringilla. Vivamus aliquet elit ac nisl. Fusce vel dui. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Mauris sollicitudin fermentum libero.', 0, 2),
(5, 'La mouette', 'Donec vitae sapien ut libero venenatis faucibus. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Vivamus laoreet. Quisque rutrum. In dui magna, posuere eget, vestibulum et, tempor auctor, justo.', 0, 1),
(6, 'Ce fou de Platonov', 'Sed lectus. Etiam rhoncus. Duis leo. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi..', 0, 1),
(7, 'Les trois soeurs', 'Fusce egestas elit eget lorem. Nulla sit amet est. Duis leo. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. In dui magna, posuere eget, vestibulum et, tempor auctor, justo.', 0, 1),
(8, 'Waiting period', 'Curabitur ullamcorper ultricies nisi. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Sed libero. Vestibulum ullamcorper mauris at ligula. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam.', 0, 4),
(9, 'La cuisine cannibale', 'Duis leo. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Donec sodales sagittis magna. Mauris sollicitudin fermentum libero. Morbi ac felis.', 0, 8),
(10, 'Anthéchrista', 'Ut non enim eleifend felis pretium feugiat. Sed libero. Praesent egestas tristique nibh. Vestibulum volutpat pretium libero. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.', 0, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
