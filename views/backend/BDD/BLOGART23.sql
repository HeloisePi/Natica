-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 11 fév. 2023 à 11:15
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `BLOGART23`
--

-- --------------------------------------------------------

--
-- Structure de la table `ARTICLE`
--

CREATE TABLE `ARTICLE` (
  `numArt` int(8) NOT NULL,
  `dtCreArt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numThem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ARTICLE`
--

INSERT INTO `ARTICLE` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(8, '2023-02-10 01:12:42', 'La mission Spacelock, un escape game unique', 'Explorez une nouvelle planète pour voir si la vie est possible. Pour une vingtaine d’euros, une aventure palpitante et hors du temps vous attends à Mérignac.', 'Nous avons pu tester pour vous l’expérience immersive de Spacelock. ', 'Vous êtes livrés à vous et votre équipe pendant 60 minutes. Il est important de savoir qu’il faut trois à six joueurs pour pouvoir faire l’expérience. Oui, c’est vrai qu’il est possible de faire l’expérience à deux, mais il faut vraiment être très fort en escape games. Nous ne recommandons donc pas aux explorateurs d’espace qui n’ont jamais fait Spacelock ou qui débutent de venir à deux. Nous avons trouvé beaucoup d’atouts à cet escape game. Tout d’abord, son immersion dans l’espace est très réussie. Nous sommes vraiment plongés dans le contexte avec les sons du vaisseau, les lumières et les voix qui nous guident parfaitement. L\'ambiance au sein du vaisseau nous fait penser que nous sommes une équipe de cosmonautes aguerris. Ensuite, c’est vrai que le niveau de difficulté est assez haut. Ceci peut-être problématique, mais finalement n’est pas très grave car en équipe nous réfléchissons mieux, et la difficulté reste surmontable. De toute façon, avec l’immersion, vous n’avez pas le choix que de trouver la planète habitable. Au niveau de l’accessibilité, nous sommes servis. À partir de 12 ans, si la personne est accompagnée d’un adulte, elle peut tester l’expérience Spacelock. En famille, entre collègues ou avec ses amis, cette expérience est idéale pour les curieux d’escapes games, d’énigmes et de casses-têtes. Pour les points négatifs, cet escape game n’est pas, ou du moins pas encore équipé de réalité virtuelle. Cela peut paraître anodin, mais malgré la qualité de l’expérience immersive, nous préférons la nouveauté et l’originalité. L’expérience est donc ultra-immersive mais ne déborde pas d’originalité. Pour ajouter un point, le prix est assez élevé si vous ne venez pas en grand groupe.', 'L’expérience dans l’espace', 'Nombreux sont les mécanismes et effets spéciaux qui vous attendent dans le vaisseau Spacelock. Seulement, en quoi consiste l’expérience ? Nous avons voulu être au plus près du sujet et un de nos collègue a gentiment accepté de nous rejoindre pour tester l’expérience. Pour recontextualiser, nous avons rejoint Mérignac pour la mission Spacelock à six. Nous nous connaissons très bien et travaillons ensemble depuis des années déjà. Nous sommes donc arrivés en pensant réussir l’escape game assez vite et sans trop de difficultés. Bien heureusement, nous nous sommes trompés, et avons été agréablement surpris de la complexité des énigmes. Cette expérience a été fascinante du début à la fin. Pour commencer, le vaisseau spatial nous donne des instructions assez précises. Il faut appuyer sur des boutons, brancher des câbles et créer une multitude d’action, et chacune avec un ordre précis. La conception est bien pensée, dans le sens où nous ne pouvons pas avancer si l’esprit d’équipe n’est pas parfaitement au point. Avec quelques lacunes, nous avons réussi à progresser dans l’aventure. A chaque étape validée, les informations sur la planète visée augmentent. Nous pouvons définir si oui ou non la planète est habitable sans terminer l’expérience, ce qui nous fait sortir plus tôt, mais est plus risqué car nous avons plus de chance de nous tromper… En tout cas, c’est une expérience riche et d’une certaine complexité mais c’est aussi très satisfaisant. Désormais, vous vous demandez sûrement comment rejoindre cet escape game, pour, vous aussi tester de vos propres yeux l’expérience. Comme dit précédemment, situé à Mérignac, cet escape game est facilement accessible en tram ou en voiture même s’il faut compter une certaine longueur depuis Bordeaux centre par exemple.', 'Spacelock est-il unique ?', 'Pour commencer, space lock n’est pas le seul escape game dans son genre. Par exemple, dans la périphérie plus ou moins éloignée de Bordeaux vous retrouverez des thèmes similaires. Par exemple, la mission Space Pirates de The Room est dans le même thème et offre une satisfaction client assez élevée. De plus, en commençant par l’épisode 2 puis en continuant par l’épisode 1, son scénario est unique. Nous pouvons aussi constater que la plupart des escape games sont équipés de technologies de réalité virtuelle. Nous avons vu que cette expérience n’est pas en VR. Bien, Spacelock n’est peut être pas dans les meilleurs escape game de Bordeaux et générant le plus de trafic. En revanche, vous pouvez profiter du peu de monde pour trouver des créneaux facilement. Le créateur de Virtuoz fait transparaître sa passion pour les escape games à La mission Spacelock. La mission est belle et bien la même depuis des années et n’est pas à la pointe de la technologie, c’est vrai. Ayant testés, nous pouvons dire que cette expérience trouve son charme dans sa simplicité. En revanche, elle n’a pas besoin de plus pour être mémorable, là ou d’autres escape games misent plutôt sur la technologie plutôt que sur le thème ou le scénario. Le créateur de l’entreprise Virtuoz se démarque par son passé et son histoire. L’entreprise a été créée par Aliben Moussa qui était avant tout dans un laboratoire de recherche. Il a ensuite décidé, après 10 ans de recherches, de mettre en place sa passion avec un collègue au travers de Virtuoz. L’entreprise est loin de toutes les boîtes cherchant seulement le profit et la popularité au détriment de valeurs. Virtuoz se démarque par son échelle humaine et ses valeurs. De plus, les propositions sont variées. Entre la mission Spacelock et le loup-garou, ou même les jeux d’arcade en VR ainsi que les nombreuses escapes games en VR, nous sommes bien servis. Il faut parfois être curieux, et tester de nouvelles expériences même si cela implique une prise de risque…', 'Généralement, cet escape game a beaucoup d’atouts. Nous pouvons y aller à plusieurs et il est très bien réalisé et nous plongeons dans une expérience d’une immersion remarquable. Il faudra en revanche compter vingt-cinq euros par personne pour un groupe de quatre personnes et cela peut être un peu loin de Bordeaux centre. Si vous êtes curieux et que vous aimez les escape games, nous ne pouvons que vous le recommander. À l’avenir, nous espérons qu’il ouvre la voie vers d’autres escapes games bien réalisés, peu connus mais que nous sommes fiers d’avoir fait l’expérience, encore plus avec des personnes proches de nous.', '/src/images/uploads/imgArt2.jpg', 2),
(11, '2023-02-10 09:03:09', 'Le planétarium, une expérience dans les étoiles', 'Connaissez-vous les profondeurs de la voie lactée ? Pendant les vacances d’hiver, du 4 au 24 février, venez découvrir le planétarium et ses films immersifs à Cap Sciences, à Bordeaux centre. Nous avons testé pour vous cette expérience immersive.', 'Vous n’aurez plus besoin d’un télescope ou d’une fusée pour vous rapprocher des étoiles.', 'Du 4 au 24 février 2023, les astres sont à portée de main à Cap Sciences ! Nous avons testé cette expérience en avant première, et voilà notre retour de cette nouvelle aventure. Cap’ Sciences nous a proposé deux voyages uniques de 30 minutes au milieu des galaxies au sein de son planétarium gonflable. La tête dans les étoiles, allongés sur des fauteuils confortables, plongés dans le noir, nous avons pu découvrir les merveilles de la voute céleste. Ce planétarium a de nombreux atouts, le premier étant son accessibilité. Les films proposés sont simples et compréhensibles dès 3 ans. Il propose deux courts-métrages à portée des jeunes et des moins jeunes. Un premier dénommé “Séances contées”, qui nous raconte des histoires spatiales avec des airs de petit prince. De quoi émerveiller toute la famille avec un voyage dans l’enfance et les planètes de notre système solaire. Le deuxième, intitulé “Histoires d\'étoiles, est accessible à partir de 8 ans. Avec des thématiques plus scientifiques, il se demande d’où venons-nous, qui sommes-nous, et où allons-nous, tout en nous en mettant plein la vue avec ses images sublimes de la galaxie. Pour nous, chasseurs d’expériences inédites, Cap sciences nous a apporté de nouveau du rêve et de la science, pour le plus grand bonheur de nos pupilles.', 'Une bulle dans les nuages', 'Mais en quoi consiste cet événement, et qu’est ce qu’un planétarium ? Nous avons été plongé dans le noir, entouré d’une immense toile avec une capacité de plus de cent personnes. Équipé d’un projecteur, la salle est plongée dans le ciel nocturne, le film est alors projeté. Cela nous donne la sensation d’être dans un vaisseau spatial qui se déplace à la vitesse de la lumière à travers plus de 3000 étoiles. Réalisées à partir des images prises par la NASA et par des observatoires du monde entier, leur beauté nous a fait quitter la Terre. Il est important de savoir que le planétarium de Cap Science est éphémère. Situé près de Bordeaux centre, il est fortement accessible en transport en commun ou en voiture avec les parkings payants aux alentours. Il est un lieu pour les passionnés d’astronomie, mais aussi pour les familles ou les personnes en situation de handicap. Un guide audio très riche avec un travail sonore et musical peut vous accompagner et vous aider à découvrir les secrets des étoiles si vous êtes mal voyant. Il dispose de plus d’un dispositif d’accès simplifié avec des ascenseurs pour les personnes à mobilités réduites. Le planétarium propose également des projections interactives et ludiques, à destination des enfants, mais auxquels les familles peuvent aussi participer.', 'Une expérience unique', 'Entre le salon de réalité virtuelle Vortex à Bordeaux ou le Rêvarium, les concurrents au Planétarium de cap sciences ne sont pas à négliger. Certes, le planétarium de Cap sciences n’arrive pas à la cheville des bassins de lumières. De plus, la base sous-marine est référencée comme l’un des plus grands centres numériques au monde, avec une histoire très riche. Nous n’avons peut-être pas passé autant de temps que sur d’autres expériences immersives de Bordeaux, il est vrai. De plus, l’expérience n’était pas complètement immersive sur tous les aspects. En revanche, cela va paraître choquant mais, c’est ce qui fait tout le charme du planétarium de Cap sciences. Étant venus avec nos enfants, ils ont eu encore plus de plaisir à faire un planétarium adapté à leur âge. Et ce, même s’ils en ont moins appris qu’en découvrant les histoires folles de la base sous-marine. Ces évènements sont démarqués par le fait qu’ils sont sans cesse renouvelés, accessibles et simplistes. C’est un pari fort qui est lancé, et nous trouvons honnêtement que le Planétarium remplit le contrat. Nous avons passé de bons moments en famille, et n’est-ce pas finalement un des buts des expériences immersives ?', 'Pour finir, nous vous recommandons grandement cet évènement magique et encore plus en famille. Il y a assez de raisons pour montrer  En revanche, si vous souhaitez une expérience complètement immersive et passer une journée entière  à découvrir des lieux et merveilles, cela n’est peut être pas fait pour vous.', '/src/images/uploads/imgArt18.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `numCom` int(10) NOT NULL,
  `dtCreCom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int(8) NOT NULL,
  `numMemb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LIKEART`
--

CREATE TABLE `LIKEART` (
  `numMemb` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeA` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `MEMBRE`
--

CREATE TABLE `MEMBRE` (
  `numMemb` int(10) NOT NULL,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numStat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MEMBRE`
--

INSERT INTO `MEMBRE` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(8, 'ADMIN', 'ADMIN', 'ADMIN', '$2y$10$Iuz9yVTmEoAX5Na73Sirru4ujkj0sz5IJdi4Zg5Kw1JaWHQ0IsR6i', 'ADMIN@2', '2023-02-09 11:27:25', 1),
(12, 'MODO', 'MODO', 'MODO', '$2y$10$6myYBkRApboSULr8X4G0quN4ikTQKYVIMddymqLeE1AaHmIF77p9C', 'MODO@', '2023-02-09 21:38:37', 2),
(13, 'MEMBRE', 'MEMBRE', 'MEMBRE', '$2y$10$EDLLpMls9wUzCrgGvhfLWew1Agiu6vRVs3Ef1ov0x4K5/Vhzcy9S2', 'MEMBRE@', '2023-02-10 12:44:33', 3);

-- --------------------------------------------------------

--
-- Structure de la table `MOTCLE`
--

CREATE TABLE `MOTCLE` (
  `numMotCle` int(8) NOT NULL,
  `libMotCle` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MOTCLE`
--

INSERT INTO `MOTCLE` (`numMotCle`, `libMotCle`) VALUES
(1, 'Bordeaux');

-- --------------------------------------------------------

--
-- Structure de la table `MOTCLEARTICLE`
--

CREATE TABLE `MOTCLEARTICLE` (
  `numArt` int(8) NOT NULL,
  `numMotCle` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `STATUT`
--

CREATE TABLE `STATUT` (
  `numStat` int(5) NOT NULL,
  `libStat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `STATUT`
--

INSERT INTO `STATUT` (`numStat`, `libStat`) VALUES
(1, 'Administrateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `THEMATIQUE`
--

CREATE TABLE `THEMATIQUE` (
  `numThem` int(10) NOT NULL,
  `libThem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `THEMATIQUE`
--

INSERT INTO `THEMATIQUE` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`numArt`),
  ADD KEY `ARTICLE_FK` (`numArt`),
  ADD KEY `FK_ASSOCIATION_1` (`numThem`);

--
-- Index pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`numCom`),
  ADD KEY `COMMENT_FK` (`numCom`),
  ADD KEY `FK_ASSOCIATION_2` (`numArt`),
  ADD KEY `FK_ASSOCIATION_3` (`numMemb`);

--
-- Index pour la table `LIKEART`
--
ALTER TABLE `LIKEART`
  ADD PRIMARY KEY (`numMemb`,`numArt`),
  ADD KEY `LIKEART_FK` (`numMemb`,`numArt`),
  ADD KEY `FK_LIKEART1` (`numArt`);

--
-- Index pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  ADD PRIMARY KEY (`numMemb`),
  ADD KEY `MEMBRE_FK` (`numMemb`),
  ADD KEY `FK_ASSOCIATION_4` (`numStat`);

--
-- Index pour la table `MOTCLE`
--
ALTER TABLE `MOTCLE`
  ADD PRIMARY KEY (`numMotCle`),
  ADD KEY `MOTCLE_FK` (`numMotCle`);

--
-- Index pour la table `MOTCLEARTICLE`
--
ALTER TABLE `MOTCLEARTICLE`
  ADD PRIMARY KEY (`numArt`,`numMotCle`),
  ADD KEY `MOTCLEARTICLE_FK` (`numArt`),
  ADD KEY `MOTCLEARTICLE2_FK` (`numMotCle`);

--
-- Index pour la table `STATUT`
--
ALTER TABLE `STATUT`
  ADD PRIMARY KEY (`numStat`),
  ADD KEY `STATUT_FK` (`numStat`);

--
-- Index pour la table `THEMATIQUE`
--
ALTER TABLE `THEMATIQUE`
  ADD PRIMARY KEY (`numThem`),
  ADD KEY `THEMATIQUE_FK` (`numThem`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  MODIFY `numArt` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  MODIFY `numCom` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  MODIFY `numMemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `MOTCLE`
--
ALTER TABLE `MOTCLE`
  MODIFY `numMotCle` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `STATUT`
--
ALTER TABLE `STATUT`
  MODIFY `numStat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `THEMATIQUE`
--
ALTER TABLE `THEMATIQUE`
  MODIFY `numThem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `THEMATIQUE` (`numThem`);

--
-- Contraintes pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`),
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`);

--
-- Contraintes pour la table `LIKEART`
--
ALTER TABLE `LIKEART`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`),
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`);

--
-- Contraintes pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `STATUT` (`numStat`);

--
-- Contraintes pour la table `MOTCLEARTICLE`
--
ALTER TABLE `MOTCLEARTICLE`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `MOTCLE` (`numMotCle`),
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
