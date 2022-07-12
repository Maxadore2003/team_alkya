-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 12 juil. 2022 à 10:22
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `team-alkya`
--

-- --------------------------------------------------------

--
-- Structure de la table `about-us`
--

CREATE TABLE `about-us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `image` char(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `about-us`
--

INSERT INTO `about-us` (`id`, `name`, `image`) VALUES
(0, 'board', 'board-about-us.png'),
(1, 'tree', 'tree-about-us.png');

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

CREATE TABLE `actuality` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` char(100) NOT NULL,
  `image` char(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actuality`
--

INSERT INTO `actuality` (`id`, `title`, `image`, `description`, `date`) VALUES
(0, 'La rentabilité dans l\'esport', 'illustration-news.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-05-22'),
(1, 'Nouvel présidence chez France Esport', 'nomination-vicepresident-france-esport.png', 'Juste une petite description.', '2022-05-28'),
(2, 'Test Title 3', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(3, 'Test Title 4', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(4, 'Test Title 5', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(5, 'Test Title 6', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(6, 'Test Title 7', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(7, 'Test Title', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `logo` char(30) NOT NULL,
  `image` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `name`, `logo`, `image`) VALUES
(0, 'League of Legends', 'logo-lol.png', 'lol.png'),
(1, 'Valorant', 'logo-valorant.png', 'valorant.png');

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `nickname` char(30) NOT NULL,
  `nationality` char(50) NOT NULL,
  `birthday` date NOT NULL,
  `city` char(50) NOT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `team-arrival` date NOT NULL,
  `game-id` int(10) UNSIGNED NOT NULL,
  `image` char(30) NOT NULL,
  `type` char(30) NOT NULL DEFAULT 'player',
  `twitter` char(100) NOT NULL,
  `instagram` char(100) NOT NULL,
  `twitch` char(100) NOT NULL,
  `game-stats` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`id`, `name`, `firstname`, `nickname`, `nationality`, `birthday`, `city`, `size`, `weight`, `team-arrival`, `game-id`, `image`, `type`, `twitter`, `instagram`, `twitch`, `game-stats`) VALUES
(0, 'Callewaert', 'Ilan', 'ManTh3Bus', 'France', '2004-02-10', 'Meaux', 180, 77, '2021-06-10', 1, 'ilan-callewaert.jpg', 'player', 'mantheboss77', 'manth3bus', 'manth3bus', 'steam76561198988805219'),
(1, 'Callewaert', 'Ilan', 'ManTh3Bus', 'France', '2004-02-10', 'Meaux', 180, 77, '2022-06-12', 1, 'ilan-callewaert.png', 'coach', '', '', '', ''),
(2, 'Callewaert', 'Ilan', 'ManTh3Bus', 'France', '2004-02-10', 'Meaux', 180, 77, '2021-06-10', 0, 'ilan-callewaert.jpg', 'player', 'mantheboss77', 'manth3bus', 'manth3bus', 'steam76561198988805219'),
(3, 'Callewaert', 'Ilan', 'ManTh3Bus', 'France', '2004-02-10', 'Meaux', 180, 77, '2021-06-10', 0, 'ilan-callewaert.jpg', 'player', 'mantheboss77', 'manth3bus', 'manth3bus', 'steam76561198988805219');

-- --------------------------------------------------------

--
-- Structure de la table `social-network`
--

CREATE TABLE `social-network` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `image` char(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `social-network`
--

INSERT INTO `social-network` (`id`, `name`, `image`, `link`) VALUES
(0, 'Instagram', 'instagram.png', 'https://www.instagram.com/teamalkya/'),
(1, 'Twitter', 'twitter.png', 'https://twitter.com/teamalkya'),
(2, 'Twitch', 'twitch.png', 'https://www.twitch.tv/teamalkya');

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `image` char(30) NOT NULL,
  `type` char(11) NOT NULL DEFAULT 'sponsors',
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `image`, `type`, `link`) VALUES
(0, 'Gaming Campus', 'gamingcampus.png', 'sponsors', 'https://gamingcampus.fr'),
(1, 'adidas', 'adidas.png', 'partners', 'https://www.adidas.fr');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `image` char(30) NOT NULL,
  `title` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `name`, `firstname`, `image`, `title`) VALUES
(0, 'Scalvi', 'Baptist', 'baptist-scalvi.png', 'Président'),
(1, 'Diani', 'Jean-Michel', 'jean-michel-diani.png', 'Secrétaire / Head of FPS'),
(2, 'Gonnet', 'Anthony', 'anthony-gonnet.png', 'Head of marketing'),
(3, 'Lux', 'Damien', 'damien-lux.png', 'Directeur esportif'),
(4, 'Callewaert', 'Ilan', 'ilan-callewaert.jpg', 'Développeur Web');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `game-id` int(10) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `image` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `game-id`, `name`, `image`) VALUES
(0, 0, 'LOL #1', 'team-lol.png'),
(1, 1, 'VALO #2', 'team-valorant.png');

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

CREATE TABLE `text` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `description` text NOT NULL,
  `type` char(30) NOT NULL,
  `link` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `text`
--

INSERT INTO `text` (`id`, `name`, `description`, `type`, `link`) VALUES
(0, 'description-home-page', 'alkya', 'title', ''),
(1, 'description-home-page', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'description', ''),
(2, 'game-home-page', 'nos équipes', 'title', ''),
(3, 'game-home-page', 'toutes nos équipes', 'button', ''),
(4, 'actuality-home-page', 'dernières actualités', 'title', ''),
(5, 'actuality-home-page', 'en savoir plus', 'button', ''),
(6, 'sponsors', 'sponsors majeurs', 'title', ''),
(7, 'partenaires', 'partenaires officiels', 'title', ''),
(8, 'actuality', 'actualités', 'title', ''),
(9, 'about-us-what', 'qu\'est ce que alkya ?', 'title', ''),
(10, 'about-us-desc-what', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'description', ''),
(11, 'about-us-why', 'Pourquoi Alkya ?', 'title', ''),
(12, 'about-us-desc-why', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'description', ''),
(13, 'staff', 'staff', 'title', ''),
(14, 'teams', 'nos équipes', 'title', ''),
(15, 'teams-sheet-player', 'joueurs', 'title', ''),
(16, 'teams-sheet-coach', 'coachs', 'title', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `pseudo` char(30) NOT NULL,
  `password` char(30) NOT NULL,
  `admin-level` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `pseudo`, `password`, `admin-level`) VALUES
(0, 'admin', 'admin', 'admin', 'admin', 2),
(1, 'ManTh3Bus', 'Ilan', 'ManTh3Bus', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about-us`
--
ALTER TABLE `about-us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `actuality`
--
ALTER TABLE `actuality`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social-network`
--
ALTER TABLE `social-network`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about-us`
--
ALTER TABLE `about-us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
