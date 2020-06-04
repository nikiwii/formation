-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 04 juin 2020 à 22:06
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `bio`) VALUES
(1, 'Tchekhov', 'Anton', 'Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Nam eget dui. Duis leo. Suspendisse feugiat. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.'),
(2, 'Nothomb', 'Amélie', 'Amélie Nothomb, nom de plume de Fabienne Claire Nothomb, est une romancière belge d\'expression française.\r\n\r\nElle est fille de l\'ambassadeur de Belgique à Rome, et petite-nièce de l\'homme politique Charles-Ferdinand Nothomb.\r\n\r\nAmélie Nothomb passe ses cinq premières années au Japon, dont elle restera profondément marquée, allant jusqu\'à parler couramment japonais et même à devenir interprète par la suite. Mais son expérience ne s\'arrête pas là puisqu\'elle vivra successivement en Chine, à New York, au Bangladesh, en Birmanie et au Laos, avant de débarquer à dix-sept ans sur le sol de Belgique, berceau de sa famille où elle entame une licence en philologie romane à l\'Université Libre de Bruxelles.\r\n\r\nElle écrit depuis ses dix-sept ans. Elle avoue avoir déjà écrit plus de quatre-vingt-dix romans. L\'écrivain garde rangés dans un carton différents manuscrits qu\'elle se refuse à publier, les estimant trop personnels.\r\n\r\nC\'est en 1992, alors âgée de vingt-cinq ans, qu\'elle fait son entrée fracassante dans le monde des lettres avec son roman \"Hygiène de l\'assassin.\" Elle enchaîne depuis les succès publics avec plus d\'une vingtaine de publications.\r\n\r\nAmélie Nothomb est également l\'auteur de : \"Le sabotage amoureux\" (1993), \"Les combustibles\" (1994), \"Mercure\", \"Péplum\", \"Les Catalinaires\" (1995), \"Métaphysique des tubes\" (2000), \"Cosmétique de l\'ennemi\" (2001), \"Robert des noms propres\" (2002)...\r\n\r\nAmélie Nothomb a été définitivement consacrée en 1999 alors que \"Stupeur et Tremblements\" a été couronné du Grand Prix de l\'Académie française et s\'est vendu à 385 000 exemplaires. Ses romans sont depuis traduits en 23 langues.\r\n\r\nElle a également obtenu par deux fois le prix du jury Jean Giono, le prix Alain Fournier et, très connue en Italie, il premio Chianciano.\r\n\r\nElle est encore actuellement domiciliée à Bruxelles mais voyage beaucoup de ville en ville afin de rencontrer ses lecteurs.\r\n\r\nAuteure extrêmement prolifique, Amélie Nothomb publie traditionnellement un livre par an depuis 24 ans, chaque année vers le mois de septembre.'),
(3, 'Copi', '', 'Élevé en grande partie à Montevideo (Uruguay), dans une famille argentine parfaitement francophone dont le père est directeur de journal et député anti-péroniste, tirant peut-être du goût de ce dernier pour la peinture un talent précoce pour le dessin, il collabore dès l’âge de 16 ans au journal satirique Tía Vicenta2.\r\n\r\nLes activités politiques de son père l’obligent à s\'exiler en sa compagnie à Haïti puis à New York. En 1963, il le quitte pour s’installer à Paris dans l’espoir d’y vivre de sa passion, le théâtre. Mais sa maîtrise imparfaite du français le conduit à vivre dans un premier temps du dessin. Sous le nom de « Copi », il entre alors à Twenty, puis à Bizarre2. C\'est dans cette dernière revue qu’à l’automne 1964, Serge Lafaurie, à la recherche d’une bande dessinée pour Le Nouvel Observateur, le remarque.\r\n\r\nS’il amorce alors sa collaboration à l’hebdomadaire de la rue d’Aboukir, il dessine aussi pour Hara-Kiri, Charlie Hebdo et leur homologue italien, Linus. Se distinguant par un graphisme aigu et un humour surréaliste, il atteint la notoriété avec son personnage de dame assise au gros nez et aux cheveux raides qui, figée sur sa chaise, monologue, ou dialogue avec un volatile informe. Selon Marilú Marini3, il a « créé son exact opposé avec cette femme pleine d’a priori qui veut rester sur sa chaise sans bouger, car tout ce qui peut ébranler ses convictions est pour elle un grand danger ». En 1967, il avec Guido Crepax et Jules Feiffer le premier auteur de bande dessinée à recevoir un prix de bande dessinée remis en Europe, la tour Guinigi d\'or remise lors du Salon international des bandes dessinées de Lucques.\r\n\r\nAvec les revenus qu’il tire du dessin, il peut ainsi se livrer à sa passion en compagnie de ses amis Victor Garcia, Alejandro Jodorowsky, mais aussi Jérôme Savary qui est le premier, en 1964, à monter de courtes pièces qu’il a écrites. Jorge Lavelli prend la suite en montant Sainte Geneviève dans sa baignoire, La Journée d\'une rêveuse au Lutèce (1966) et L\'Homosexuel ou la Difficulté de s\'exprimer (1967) où Copi joue lui-même un travesti délirant (c\'est encore Copi qui, en tant qu\'acteur, fait une apparition en travesti décalé dans le clip publicitaire « C\'est fou ! » pour Perrier)4. Car s’il dénonce le régime argentin comme dans Eva Peron (montée à Buenos Aires en 1970), il est proche du mouvement du Front homosexuel d\'action révolutionnaire (FHAR) qui traduit un rapprochement entre l\'extrême gauche mao et les homosexuels. Depuis 2000 le metteur en scène Marcial Di Fonzo Bo monte l\'intégrale de Copi et compte parmi ses comédiens Pierre Maillet, Élise Vigier, Marina Foïs, Philippe Marteau.\r\n\r\nCompagnon de la figure de proue du mouvement gay Guy Hocquenghem, il suit ce dernier à Libération où, avec Jean-Luc Hennig, Christian Hennion ou la transsexuelle Hélène Hazera, ils forment à partir de 1973 un petit groupe d’homosexuels au sein de la rédaction. L\'été 1979, de juin à août, il dessine une petite créature inventée sur mesure pour le quotidien : la transsexuelle Libérett\'. Ses dessins politico-pornographiques, mâtinés d\'humour noir et franchement potaches, réagissent à l\'actualité en s\'en moquant et font rapidement scandale. Un terme est mis à l\'aventure Libérett\' dès la fin du mois d\'août 1979. Libération rappellera pourtant Copi en 1982 où il reviendra avec un autre personnage, plus sage cette fois-ci : Kang le kangourou, dont les dessins seront compilés plus tard dans un album du même nom.\r\n\r\nAuteur de nombreuses pièces dans la deuxième moitié des années 1970 et la première partie des années 1980, il meurt des suites du sida à 48 ans en 1987, alors qu\'il était en pleine répétition d’Une visite inopportune, dont le personnage principal est un malade du sida qui se meurt dans un hôpital.'),
(4, 'Selby Jr', 'Hubert', 'Né à New York, dans l\'arrondissement de Brooklyn en 1928, Selby quitte l\'école à l\'âge de 15 ans pour s\'engager dans la marine marchande, où son père, orphelin, avait travaillé2. Atteint de la tuberculose à 18 ans, les médecins lui annoncent qu\'il lui reste deux mois à vivre. Il est opéré, perd une partie de son poumon, et restera 4 ans à l\'hôpital1.\r\n\r\nLors de la décennie suivante, Selby, convalescent, est cloué au lit et fréquemment hospitalisé (1946-1950) à la suite de diverses infections du poumon. « C\'est à l\'hôpital que j\'ai commencé à lire avant d\'éprouver le besoin d\'écrire. »1 Incapable de suivre une vie normale à cause de ses problèmes de santé, Selby dira : « Je connais l\'alphabet. Peut-être que je pourrais être écrivain. ». Grâce à sa première machine à écrire, il se lance frénétiquement dans l\'écriture3.\r\n\r\nSon premier roman, Last Exit to Brooklyn, une collection d\'histoires partageant un décor commun, Brooklyn, entraîna une forte controverse lorsqu\'il fut publié en 1964. Allen Ginsberg prédit que l\'ouvrage allait « exploser sur l\'Amérique comme une bombe infernale qu\'on lirait encore cent ans après. »4 Il fut l\'objet d\'un procès pour obscénité en Angleterre, interdit de traduction en Italie, et interdit à la vente aux mineurs dans plusieurs états des États-Unis. Son éditeur, Grove Press, exploita cette controverse pour la campagne de promotion du livre, qui se vendit aux alentours de 750 000 exemplaires la première année. Il fut également traduit en douze langues. L\'auteur le résume ainsi : « Quand j\'ai publié Last Exit to Brooklyn, on m\'a demandé de le décrire. Je n\'avais pas réfléchi à la question et les mots qui me sont venus sont : \"les horreurs d\'une vie sans amour\" . »5 L\'ouvrage est republié sous une nouvelle traduction française début 20144.\r\n\r\nSon second ouvrage, La Geôle, publié en 1971, est un échec commercial, malgré les critiques positives, ce qui décourage l\'auteur1.\r\n\r\nSelby connaît des problèmes d\'alcool, et devient dépendant à l\'héroïne, ce qui le conduira deux mois en prison et un mois à l\'hôpital, et lui permettra de sortir de cette dépendance. Cependant, après cette cure, il tombera encore plus dans l\'alcoolisme1.\r\n\r\nEn 1976 sort son roman Le Démon, l\'histoire de Harry White, jeune cadre New-yorkais en proie à ses obsessions. Cette histoire présente de grandes similitudes avec American Psycho, écrit quinze ans plus tard par Bret Easton Ellis.\r\n\r\nDeux ans plus tard, il publie Retour à Brooklyn ((en) Requiem for a Dream), qui sera adapté plus de 20 ans plus tard au cinéma, en 2000, sous le même titre, par Darren Aronofsky, avec qui il écrira le scénario.\r\n\r\nEn 1986 sort son recueil de nouvelles Chanson de la Neige Silencieuse ((en) Songs of the Silent Snow), et en 1998 son roman Le Saule (The Willow Tree), plus apaisé : « Mes premiers livres avaient tous ce côté pathologique, il fallait parler du \"problème\" sous tous les angles possibles alors que, dans Le Saule, j\'essaie de parler de la solution et des moyens d\'y parvenir. »5. Enfin, en 2002, est publié Waiting Period, roman où le héros, contraint de reporter son suicide, reconsidère son projet.\r\n\r\nIl a vécu à Manhattan, puis à Los Angeles, où il a enseigné à l\'Université3,6. Il a été marié trois fois et a eu quatre enfants, deux filles et deux garçons.\r\n\r\nÀ la fin de sa vie, il confiait à l\'un de ses amis \" je peux tout juste taper une lettre sur ce putain d\'ordinateur \". En effet, Selby avait acheté un ordinateur, dans le seul et unique but de remplacer sa \" bonne vieille machine à écrire \".\r\n\r\nIl est mort le 26 avril 2004 à Los Angeles d\'une maladie pulmonaire chronique, consécutive à la tuberculose contractée durant sa jeunesse. Il s\'est éteint accompagné de ses proches : son ex-femme Suzanne, chez qui il se trouvait, les enfants de son premier mariage, et son chien7.'),
(5, 'Boudard', 'Alphonse', 'Sed a libero. Proin faucibus arcu quis ante. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Etiam imperdiet imperdiet orci.'),
(6, 'Muller', 'Florence', 'Diplômée du Conservatoire national supérieur d\'art dramatique en 1991 où elle étudie sous la direction de Daniel Mesguich et Jean-Pierre Vincent, Florence Muller développe principalement un parcours d\'actrice.\r\n\r\nAu théâtre, elle travaille notamment auprès de Philippe Torreton, Philippe Faure, Georges Werler, Mario Gonzales, Philippe Adrien, Georges Werler ou encore Jean-Luc Revol. Elle s\'essaie également au théâtre de rue et participe à la tournée internationale du spectacle Peplum de la compagnie Royal de Luxe.\r\n\r\nEn parallèle, elle mène une carrière cinématographique débutée avec Robert Altman, puis sous la direction de Blandine Lenoir, Luc Besson, Agnès Jaoui, Romain Goupil ou encore Pierre Aknine. Son parcours est marqué par sa collaboration avec Bruno Podalydès qui la dirige dans plusieurs films.\r\n\r\nEnfin, Florence Muller mène aussi un travail d\'écriture, ayant co-écrit le spectacle La Queue du Mickey (avec Éric Verdin) ou la pièce Boulevard du Boulevard.'),
(7, 'Besson', 'Philippe', 'Philippe Besson est écrivain, dramaturge et scénariste français, anciennement homme d\'affaires. Il a été également critique littéraire et animateur de télévision.\r\n\r\nIl est diplômé de l\'École supérieure de commerce de Rouen et titulaire d\'un DESS de droit. En 1989, il s\'installe à Paris où il exerce une profession de juriste et enseigne le droit social. Pendant près de 6 ans, il sera le bras droit de Laurence Parisot, en tant que DRH puis secrétaire-général de l\'Institut français d\'opinion publique. Par la suite, il sera DRH de T-Online France - Club Internet.\r\n\r\nEn 1999, il publie \"En l\'absence des hommes\", récompensé par le prix Emmanuel-Roblès. En 2001, il publie \"Son frère\" qui sera retenu pour la sélection du Prix Femina. L\'adaptation cinématographique avec Bruno Todeschini et Eric Caravaca dans les rôles principaux qu\'en fera Patrice Chéreau en 2003, recevra l\'Ours d\'argent au festival de Berlin.\r\n\r\n\"L\'Arrière-saison\", roman publié en 2002, est récompensé par le Grand Prix RTL-Lire 2003, année où paraît \"Un garçon d\'Italie\" qui se voit sélectionné pour les Prix Goncourt et Médicis.\r\n\r\nÉdité en 2004, son cinquième roman, \"Les Jours fragiles\" (centré sur les derniers jours d\'Arthur Rimbaud), retient l\'attention du cinéaste François Dupeyron. En 2006, \"L\' Enfant d\'octobre\" suscite une polémique dès sa sortie. Ce roman raconte l\'affaire Grégory sous une forme romancée, alors que les différents acteurs de ce drame sont encore vivants.\r\n\r\nChangement de registre en 2007 avec le très mélancolique \"Se résoudre aux adieux\". En 2009, il publie \"Un homme accidentel\", dont l\'intrigue se déroule à Beverly Hills et il participe avec d\'autres auteurs à \"Huit\", un recueil de nouvelles sur les objectifs pour le développement. La même année, il s\'intéresse encore une fois aux États-Unis dans \"La trahison de Thomas Spencer\", qui raconte la vie de deux amis nés le même jour.\r\n\r\nEn 2011, il soutient l\'action de l\'association Isota qui milite pour le mariage et l\'adoption d\'enfants par des couples homosexuels. Il réalise en 2014 le documentaire \"Homos, la haine\" sur France 2.\r\n\r\n\"Vivre vite\", consacré à James Dean, paraît en janvier 2015, année anniversaire de sa mort.\r\n\r\nIl relate sa première histoire d\'amour alors qu\'il était adolescent dans son roman, \"Arrête avec tes mensonges\" (2017). La même année, il publie \"Un personnage de roman\", récit intime de la campagne présidentielle d’Emmanuel Macron.\r\n\r\nEn 2019, parait \"Un certain Paul Darrigrand\".'),
(8, 'Topor', 'Roland', 'Roland Topor est un illustrateur, dessinateur, peintre, écrivain, poète, metteur en scène, chansonnier, acteur et cinéaste français.\r\n\r\nIl connut d\'abord la difficile condition d\'une famille juive d\'origine polonaise se cachant en Savoie pour échapper à l\'extermination nazie.\r\n\r\nRenonçant à la sculpture pour la maroquinerie, plus apte à nourrir sa maisonnée, son père lui transmit cependant sa passion pour l\'art, une conviction partagée qui conduisit tout naturellement le jeune homme à l\'école des Beaux-Arts de Paris de 1955 à 1964.\r\n\r\nPremiers dessins dans Bizarre, premières nouvelles dans Fiction en 1958 ; il collabore au journal satirique Hara-Kiri de 1961 à 1965. Les Masochistes (1961), son premier livre, paraît chez Losfeld. En 1961, il reçoit le grand prix de l\'humour noir. Totalement tragique et absurde, l\'humour qu\'il impose alors avec force évoque plus le grotesque de l\'Europe centrale que l\'humour anglo-saxon. Toutes les créations ultérieures de Topor resteront fidèlement placées sous le signe de la provocation et du bizarre présents dès le début.\r\n\r\nLa création, en 1962, du groupe Panique avec Fernando Arrabal, Alexandro Jodorowsky et Jacques Sternberg pose les principes de ce qui est aussi un style de vie régi par la confusion, l\'humour, la terreur, le hasard et l\'euphorie.\r\n\r\nEn collaboration avec René Laloux, il fut attiré par le cinéma d\'animation. Après plusieurs courts métrages, le long-métrage La Planète sauvage obtint en 1973 le prix spécial du jury à Cannes. Il tint quelques rôles secondaires au cinéma (Celles qu\'on n\'a pas eues de Pascal Thomas, L\'Araignée de satin etc.). Il joue dans le film de Werner Herzog Nosferatu, fantôme de la nuit aux côtés d\'Isabelle Adjani et de Klaus Kinski.\r\n\r\nRoland Topor réalisa aussi beaucoup d\'affiches (Le Tambour de Volker Schlöndorff, L\'Empire de la passion de Oshima). La décennie 70 voit également son roman Le Locataire chimérique connaître une brillante adaptation au cinéma par Roman Polanski (Le Locataire, considéré comme l\'un des meilleurs films du cinéaste). Il collabora avec Federico Fellini pour son Casanova : Roland Topor y dessina les images lors de la séquence de la « lanterne magique ».\r\n\r\nRoland Topor travaillera avec son ami et complice Jean-Michel Ribes sur de nombreux projets. Ils écriront ensemble pour la télévision Merci Bernard (1982-1984), puis Palace (1988) ; pour le théâtre Batailles (1983.) ; pour le cinéma La Galette du roi (1985).'),
(9, 'Verdin', 'Eric', 'Éric Verdin étudie à l’École supérieure d\'art dramatique de Paris (ESAD) de 1992 à 1995 avec notamment Jacques Seiler, Didier Sandre, Roland Bertin, Michelle Marquais, Danielle Lebrun, Jean Darnel.  Il se forme aussi à l\'École internationale de mimodrame Marcel-Marceau (1992) avec Emmanuel Vacca et Elena Serra, à l’Institut d’études théâtrales de Paris III (1990-1993) et à la Commedia dell\'arte chez Aria Teatro avec Emmanuel Vacca et Luca Franceschi (1994).  Il a fondé et assuré la direction artistique du Théâtre Gérard-Philipe de Meaux de 1992 à 1995'),
(10, 'Notte', 'Pierre', 'En 1993, le premier roman de Pierre Notte (La Chanson de madame Rosenfelt) est publié par Maurice Nadeau.  En août 2005, Moi aussi, je suis Catherine Deneuve est créée au Théâtre de la Pépinière-Opéra dans une mise en scène de Jean-Claude Cotillard. Nommée trois fois pour les Molières 2006, la pièce est couronnée par le Molière du Théâtre Privé. Il reçoit la même année le prix de la Fondation Diane et Lucien Barrière, puis le Prix SACD du Nouveau Talent pour le théâtre.1  Auteur de nombreuses chansons, Pierre Notte met en scène plusieurs spectacles de cabaret donnés à Paris, en province et à l\'étranger, à plusieurs reprises au Japon.  Secrétaire Général de la Comédie-Française à partir de novembre 2006, il quitte ses fonctions en septembre 2009, alors qu\'il est l\'auteur invité de la saison 2009/2010 du Théâtre Les Déchargeurs (Paris). Il intègre la direction du Théâtre du Rond-Point, au titre d\'auteur associé, à partir du 1er décembre 2009.  Les pièces de Pierre Notte ont été mises en scène par Marianne Wolfsohn, Noëmie Rosenblatt, Jean-Claude Cotillard, Svetlana de Cayron, Masaru Hirayama, Patrice Kerbrat, Anne-Laure Liégeois, Sylvain Maurice, Vladimir Petkov, Patrick Schoenstein, Stéphane Alvarez, Valéry Warnotte ou lui-même. Elles ont été traduites, produites, lues ou présentées en France, en Belgique, en Allemagne, en Italie, en Chine, en Autriche, au Portugal, en Angleterre, en Grèce, au Japon, en Bulgarie, aux États-Unis, au Liban ou en Russie.2  Il est chevalier dans l\'ordre des Arts et des Lettres.  En 2011, il a fondé la compagnie « La Cie des gens qui tombent », avec pour parrains Judith Magre et Fernando Arrabal.'),
(11, 'Hennette', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `auteur_livre`
--

DROP TABLE IF EXISTS `auteur_livre`;
CREATE TABLE IF NOT EXISTS `auteur_livre` (
  `auteur_id` int(11) NOT NULL,
  `livre_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur_livre`
--

INSERT INTO `auteur_livre` (`auteur_id`, `livre_id`) VALUES
(5, 1),
(6, 2),
(7, 3),
(2, 4),
(1, 5),
(1, 6),
(1, 7),
(7, 8),
(8, 9),
(2, 10),
(10, 11),
(9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Art, musique et cinéma'),
(2, 'Cuisine'),
(3, 'Développement personnel'),
(4, 'Bande dessinées'),
(5, 'Histoire'),
(6, 'Informatique'),
(7, 'Littérature sentimentale'),
(8, 'Policier, suspense, thriller'),
(9, 'SF, Fantasy'),
(10, 'Théâtre'),
(11, 'Sport, loisir et vie pratique'),
(12, 'Tourisme et voyages'),
(13, 'Humour'),
(14, 'Dictionnaire et langue'),
(15, 'Littérature'),
(16, 'Essais et document');

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
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id_livre`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `titre`, `resume`, `jeunesse`, `categorie_id`) VALUES
(1, 'Le café du pauvre', 'Autrefois, lorsque le café était une denrée précieuse et réservée aux riches, à la fin du repas on se payait le café du pauvre, c\'est--à-dire l\'amour, la joyeuse partie de jambes en l\'air...\r\nNous sommes juste après la guerre en 1946 et le café, devenu rare, ~se vend encore à prix d\'or sous le manteau. Revenant des armées du général de Gaulle où il a récolté une blessure et une médaille, le héros de cette histoire, sans un rond en poche, n\'a guère de quoi s\'offrir autre chose que le café du pauvre quand l\'occasion s\'en présente.\r\nIl exerce divers petits métiers extravagants et peu rémunérés. N\'empêche, les jupons volent au coin des rues, la jeunesse aidant, c\'est tout de même la belle époque.\r\nAlphonse rencontre Odette la catholique, qui veut sauver son âme ; Lulu, la femme du charcutier, qui lui offre ses charmes imposants et les trésors alimentaires de son arrière-boutique ; Jacqueline, la militante trotskiste avec laquelle il défilera de la Bastille à la Nation pour changer le monde ; Flora, la comédienne initiatrice des beautés de l\'art dramatique; Cricri, la belle pute dont il pourrait faire son gagne-pain si la peur du gendarme n\'était pas aussi dissuasive en ces temps reculés où les prêtres avaient des soutanes, les magistrats une guillotine au fond de l\'œil et les dames des porte-jarretelles pour le plaisir de l\'honnête et du malhonnête homme.\r\nUn livre où le rire ne perd jamais son droit prioritaire dans le Paris pourtant maussade de Monsieur Félix Gouin, président provisoire de la République renaissante. Avec, bien sûr, les bons copains et les mauvaises rencontres qui peuvent vous conduire en galère.\r\nL\'apprentissage de la vie, de l\'amour après la guerre... Une fresque de frasques et de fesses, de tétons, de dessous vaporeux... De baguenaudages à la petite semaine au coin de la rue là-bas. Comme dans une chanson de celle qu\'on appelait encore la Môme Piaf.', 0, 1),
(2, 'La queue du Mickey', 'Un petit groupe de Malheureux Anonymes tente avec beaucoup de maladresse et d’inconscience de décrocher du malheur. Pour ces êtres cabossés, toutes les idées sont bonnes pour larguer leur mauvaise étoile et tenter d’attraper, malgré les montagnes russes de leurs vies, la Queue du Mickey.', 0, 10),
(3, 'La maison atlantique', 'Dans le registre implacable de la tragédie, Philippe Besson revisite la règle des trois unités : de lieu, de temps et d\'action. Racontant la façon, à la fois désinvolte et rageuse, dont un jeune homme passe imperceptiblement de l\'hostilité sourde à la haine pure et dangereuse envers son père, il nous offre un roman tout en nuances et en violence contenue.\r\n\r\nL\'homme qui prend la parole se souvient de sa jeunesse, pas si lointaine. L\'été de ses dix-huit ans, il se retrouve seul avec son père dans la maison de vacances de son enfance, quelque part au bord de l\'Atlantique.\r\n\r\nLe père, homme d\'affaires sûr de lui et de son charme, ignore que l\'y attend un huis clos étouffant. Car la fatalité s\'acharne parfois sur certains lieux comme s\'ils étaient hantés par le désespoir de ceux qui les ont habités. Et le présent se charge de déterrer les contentieux du passé et de raviver les chagrins inconsolés.\r\n\r\n\r\nPère et fils pourraient dépasser le ressentiment, l\'incompréhension mutuelle et peut-être leur rivalité inconsciente, mais, dans la torpeur de juillet, aucun ne fait l\'effort. Et lorsque apparaît une jeune femme trop séduisante, affublée d\'un mari trop confiant, le drame peut se nouer.\r\n\r\n\r\nTerrible, sans concession, le nouveau roman de Philippe Besson sonde les relations psychologiques tendues entre deux personnalités aux antipodes : un fils écorché vif, gardien de la mémoire d\'une disparue, et son père, parangon d\'égoïsme. Le récit bascule peu à peu de la légèreté dans la férocité, du marivaudage dans la cruauté. L\'auteur excelle à disséquer dans les moindres détails ces situations en apparence anodines qui procèdent pourtant d\'une logique inéluctable, échappant à la volonté même des personnages.\r\n\r\n\r\nPhilippe Besson aime aussi les hommages aux auteurs qui l\'ont marqué. Et il y a là comme un parfum de Bonjour tristesse qui flotte telle une réminiscence dans l\'atmosphère maritime de ce roman. Personnage à part entière, la Maison atlantique y est tour à tour refuge, sanctuaire du souvenir et siège d\'une vengeance involontairement mise en oeuvre par le narrateur. Elle est à la fois le théâtre et le témoin silencieux de la folie des hommes.', 0, 1),
(4, 'Attentat', '\"La première fois que je me vis dans un miroir, je ris : je ne croyais pas que c’était moi. A présent, quand je regarde mon reflet, je ris : je sais que c’est moi. Et tant de hideur a quelque chose de drôle.\" Epiphane Otos serait-il condamné par sa laideur à vivre exclu de la société des hommes et interdit d’amour ?\r\nDevenu la star – paradoxale – d’une agence de top models, Epiphane sera tour à tour martyr et bourreau, ambassadeur de la monstruosité internationale… et amoureux de la divine Ethel, une jeune comédienne émue par sa laideur.\r\nSur un thème éternel, la romancière d’Hygiène de l’assassin et des Catilinaires nous offre un conte cruel et drôle, à la fois distancié et tendre.', 0, 1),
(5, 'La mouette', 'La mouette est le symbole de l\'histoire de Nina, aimée par Konstantin qui lui a écrit une pièce 3. Persuadée de sa vocation d\'actrice, elle s\'enfuit avec Trigorine, un écrivain reconnu, amant de la mère de Konstantin. Mais elle ne rencontrera pas la réussite, reniée par sa famille et délaissée par son amant. Lorsque, à l\'acte II, Trigorine voit une mouette que Konstantin a abattue, il imagine comment il pourrait en faire le sujet d\'une nouvelle : « Une jeune fille passe toute sa vie sur le rivage d\'un lac. Elle aime le lac, comme une mouette, et elle est heureuse et libre, comme une mouette. Mais un homme arrive par hasard et, quand il la voit, par désœuvrement la fait périr. Comme cette mouette ». La mouette devient le symbole de l\'existence de Nina, heureuse près de son plan d\'eau mais détruite par le chasseur Trigorine.\r\n\r\nLa pièce est aussi la double histoire de Konstantin, qui d\'une part affronte sa mère en cherchant en vain à lui faire reconnaître sa valeur et d\'autre part, depuis la trahison de Nina, se noie dans l\'espoir de retrouver un jour sa bien-aimée. Lorsque celle-ci lui rend visite une dernière fois, deux ans après son départ, elle laisse à Konstantin la certitude que sa vie est maudite.\r\n\r\nDerrière cette dramatique comédie de mœurs, l\'auteur aborde le problème du statut des artistes et de l\'art. La mère de Konstantin est une actrice connue et imbue d\'elle-même. Son amant, Trigorine, est un écrivain à la mode, peut-être un peu plus critique par rapport à sa propre valeur, sans que cela ne l\'empêche d\'exposer avec suffisance sa méthode de travail. À l\'opposé, on trouve Nina qui aspire à devenir actrice, et Konstantin qui s\'essaye à l\'écriture. L\'accueil par des sarcasmes de l\'œuvre écrite pour Nina montre tout le mépris que l\'actrice éprouve envers l\'art de son fils qui se sentira rejeté, comme Nina sera rejetée par Trigorine.\r\n\r\nOn trouve dans cette pièce les tourments de personnages qui se cherchent, qui cherchent l\'amour, mais le laissent fuir ou passent à côté sans le voir, et qui souffrent de leur passion ou de leurs ambitions. C\'est dans le dénouement tragique que les personnages sont confrontés à leur image.\r\n\r\nTchekhov multiplie les didascalies démontrant ainsi sa préoccupation pour des détails de la mise en scène.', 0, 10),
(6, 'Ce fou de Platonov', 'Anna Petrovna, jeune veuve, invite chaque été un groupe d\'amis chez elle en villégiature dans sa maison de campagne.\r\n\r\nParmi eux, Platonov est un garçon qui paraît joyeux, spontané, qui semble aimer la vie. Mais, en réalité, il est tout le contraire, manipulateur et cynique. Il veut que ses amis s\'intéressent à lui, il aime multiplier les aventures, bien qu\'il ait une femme, Sacha, qu\'il considère un peu comme sa fille. Cette pièce fait le portrait d\'un personnage ambigu qui sombre dans le désespoir.', 0, 10),
(7, 'Les trois soeurs', 'Les membres de la famille Prozorov, composée de trois sœurs, Macha, Olga et Irina et de leur frère Andreï, partagent une demeure provinciale, dans la campagne profonde de Russie. Andreï est lui-même marié à Natacha. La pièce débute par la fête d\'Irina, un an après la mort de leur père, marquant la fin du deuil et le début, croit-on, d\'une nouvelle vie. La petite ville de province, près de laquelle se trouve la demeure, accueille un régiment qui vient d\'arriver. La vie des Prozorov s\'avère dominée par l\'ennui et n\'est rythmée que par les visites d\'officiers venus de la garnison voisine, et devenus peu à peu comme des membres de cette famille atteinte du mal de vivre. Un rêve habite cependant les trois sœurs : retourner à Moscou, la ville de leur enfance heureuse. Pas de héros, peu d\'action ; cette pièce va à l\'encontre du schéma classique en mettant en scène des personnages extrêmement humains qui voient leur vie peu à peu s\'étioler, avec le désespoir de n\'avoir rien construit, rien entrepris.\r\n\r\nEntre conversations absurdes et grands débats philosophiques, entre mariages ratés et désespoirs amoureux, Tchekhov aborde dans Les Trois Sœurs les thèmes du temps qui passe et détruit les rêves, de l\'importance du travail et de l\'autonomie, de l\'ennui et de l\'amour.', 0, 10),
(8, 'Waiting period', 'Une personne à la recherche d\'une arme pour se suicider, décide finalement de s\'en prendre à la société. A travers son personnage, l\'auteur décrit sa vision de l\'Amérique de Georges Bush Jr.', 0, 1),
(9, 'La cuisine cannibale', 'Avec le retour aux sources de la civilisation traditionnelle, verrons-nous réapparaître ce mode de cuisine ancestral ? Pour le moment, je ne pense pas mais au cas ou voilà une sujet qui ne demande comme les tripes qu\'à devenir à la mode. C\'est avec gourmandise que je vous propose ce petit digest du cannibalisme, à réserver aux mordus.\r\n', 0, 1),
(10, 'Anthéchrista', 'Avoir pour amie la fille la plus admirée de la fac, belle, séduisante, brillante, enjouée, audacieuse? Lorsque Christa se tourne vers elle, la timide et solitaire Blanche n\'en revient pas de ce bonheur presque écrasant. Elle n\'hésite pas à tout lui donner, et elle commence par l\'installer chez elle pour lui épargner de longs trajets en train.\r\nBlanche va très vite comprendre dans quel piège redoutable elle est tombée. Car sa nouvelle amie se révèle une inquiétante manipulatrice qui a besoin de s\'affirmer en torturant une victime. Au point que Blanche sera amenée à choisir : se laisser anéantir, ou se défendre.\r\nComptons sur la romancière de Stupeur et tremblements (Grand Prix du roman de l\'Académie française) et de Robert des noms propres pour mener à son terme cet affrontement sans merci, et nous donner du même coup un livre incisif, à la fois cruel et tendre, sur les douleurs de l\'adolescence.', 0, 1),
(11, 'L\'effort d\'être spectateur', 'Premier texte théorique d\'un homme de théâtre, auteur, metteur en scène, compositeur, comédien et pédagogue, L\'Effort d\'être spectateur, de Pierre Notte, rassemble ses prises de positions, points de vue, observations et exigences : thèses sur l\'art difficile de la relation à établir entre la scène et la salle. Il s\'agit d\'aborder le travail de l\'acteur, de l\'auteur, du metteur en scène et des artistes de la scène par le prisme de la rencontre organisée avec plus ou moins de bonheur avec le public. Il s\'agit aussi d\'une étude possible de la sociologie des spectateurs et de leurs comportements. Ce texte associe le parcours professionnel et la trajectoire personnelle, intime, de l\'auteur. Il y raconte son expérience, ses ratages, ses aspirations, ses considérations autour des métiers du spectacle vivant, autour de l\'état, du travail et de l\'effort d\'être spectateur. Le texte est issu de plusieurs prises de paroles publiques, que Pierre Notte a été invité à donner, à Tokyo, à Rome ou à Paris, à travers des rencontres ou des conférences.', 0, 16);

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

DROP TABLE IF EXISTS `requete`;
CREATE TABLE IF NOT EXISTS `requete` (
  `id_requete` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `exemple` text NOT NULL,
  PRIMARY KEY (`id_requete`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `requete`
--

INSERT INTO `requete` (`id_requete`, `nom`, `exemple`) VALUES
(1, 'Rechercher un enregistrement', 'SELECT *\r\nFROM livre'),
(2, 'Rechercher un enregistrement plusieurs tables', 'SELECT *\r\nFROM livre, categorie\r\nwhere livre.categorie_id = categorie.id_categorie'),
(3, 'Rechercher un enregistrement plusieurs tables - autre écriture', 'SELECT *\r\nFROM livre L, categorie C\r\nWHERE L.categorie_id = C.id_categorie'),
(4, 'Rechercher avec un filtre', 'SELECT * \r\nFROM livre \r\nWHERE categorie_id = 10'),
(5, 'Insérer un nouvel enregistrement', 'INSERT INTO categorie (nom)\r\nVALUES (\'coloriage\')'),
(6, 'Modifier un enregistrement', 'UPDATE categorie\r\nSET nom = \'Coloriage\'\r\nWHERE id_categorie = 17'),
(7, 'Trier un enregistrement (ascendant)', 'SELECT * \r\nFROM auteur\r\nORDER BY nom ASC'),
(8, 'Trier un enregistrement (descendant)', 'SELECT * \r\nFROM auteur\r\nORDER BY nom DESC'),
(9, 'Faire un filtre sur le contenu (ici : les livres qui ont un enregistrement qui contient le mot histoire\'', 'SELECT *\r\nfrom livre\r\nwhere resume LIKE \'%histoire%\''),
(10, 'ici, les auteurs qui commencent pas N', 'SELECT *\r\nfrom auteur\r\nwhere nom LIKE \'n%\''),
(11, 'Effacer une ligne', 'DELETE FROM categorie\r\nWHERE id_categorie = 17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
