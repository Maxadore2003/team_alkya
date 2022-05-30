-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 mai 2022 à 09:14
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.3.33

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
(1, 'Nouvel présidence chez France Esport', 'nomination-vicepresident-france-esport.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-05-28'),
(2, 'Test Title', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `global-image` char(30) NOT NULL,
  `logo-image` char(30) NOT NULL,
  `team-image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `name`, `global-image`, `logo-image`, `team-image`) VALUES
(0, 'League of Legends', '', '0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `pseudo` char(30) NOT NULL,
  `nationality` char(50) NOT NULL,
  `birthday` date NOT NULL,
  `city` char(50) NOT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `team-arrival` date NOT NULL,
  `game-id` int(10) UNSIGNED NOT NULL,
  `image` char(30) NOT NULL,
  `type` char(30) NOT NULL DEFAULT 'player',
  `twitter` char(30) NOT NULL,
  `instagram` char(30) NOT NULL,
  `twitch` char(30) NOT NULL,
  `game-stats` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `image` char(30) NOT NULL,
  `type` char(11) NOT NULL DEFAULT 'sponsors'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `image`, `type`) VALUES
(0, 'Gaming Campus', 'gamingcampus.png', 'sponsors'),
(1, 'adidas', 'adidas.png', 'sponsors'),
(2, 'adidas', 'adidas.png', 'partners'),
(3, 'adidas', 'adidas.png', 'partners'),
(4, 'Gaming Campus', 'gamingcampus.png', 'sponsors'),
(5, 'adidas', 'adidas.png', 'sponsors'),
(6, 'adidas', 'adidas.png', 'partners'),
(7, 'adidas', 'adidas.png', 'partners'),
(8, 'adidas', 'adidas.png', 'partners'),
(9, 'adidas', 'adidas.png', 'partners');

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
(3, 'Lux', 'Damien', 'damien-lux.png', 'Directeur esportif');

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
(4, 'actuality-home-page', 'dernières actualitées', 'title', ''),
(5, 'actuality-home-page', 'en savoir plus', 'button', ''),
(6, 'sponsors', 'sponsors majeurs', 'title', ''),
(7, 'partenaires', 'partenaires officiels', 'title', ''),
(8, 'actuality', 'actualitées', 'title', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `pseudo` char(30) NOT NULL,
  `password` int(30) NOT NULL,
  `admin-level` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
