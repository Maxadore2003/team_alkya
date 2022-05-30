-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 mai 2022 à 13:13
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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

DROP TABLE IF EXISTS `about-us`;
CREATE TABLE IF NOT EXISTS `about-us` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `image` char(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `actuality`;
CREATE TABLE IF NOT EXISTS `actuality` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` char(100) NOT NULL,
  `image` char(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actuality`
--

INSERT INTO `actuality` (`id`, `title`, `image`, `description`, `date`) VALUES
(0, 'La rentabilité dans l\'esport', 'illustration-news.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-05-22'),
(1, 'Nouvel présidence chez France Esport', 'nomination-vicepresident-france-esport.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-05-28'),
(2, 'Test Title 3', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(3, 'Test Title 4', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(4, 'Test Title 5', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(5, 'Test Title 6', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(6, 'Test Title 7', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(7, 'Test Title 8', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(8, 'Test Title 9', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(9, 'Test Title 10', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(10, 'Test Title 11', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(11, 'Test Title 12', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10'),
(12, 'Test Title 13', 'illustration-news.png', 'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ', '2022-06-10');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `global-image` char(30) NOT NULL,
  `logo-image` char(30) NOT NULL,
  `team-image` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `name`, `global-image`, `logo-image`, `team-image`) VALUES
(0, 'League of Legends', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
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
  `game-stats` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `image` char(30) NOT NULL,
  `type` char(11) NOT NULL DEFAULT 'sponsors',
  PRIMARY KEY (`id`)
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

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `image` char(30) NOT NULL,
  `title` char(50) NOT NULL,
  PRIMARY KEY (`id`)
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

DROP TABLE IF EXISTS `text`;
CREATE TABLE IF NOT EXISTS `text` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `description` text NOT NULL,
  `type` char(30) NOT NULL,
  `link` char(100) NOT NULL,
  PRIMARY KEY (`id`)
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
(8, 'actuality', 'actualitées', 'title', ''),
(9, 'about-us-what', 'qu\'est ce que alkya ?', 'title', ''),
(10, 'about-us-desc-what', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'description', ''),
(11, 'about-us-why', 'Pourquoi Alkya ?', 'title', ''),
(12, 'about-us-desc-why', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'description', ''),
(13, 'staff', 'staff', 'title', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `pseudo` char(30) NOT NULL,
  `password` int(30) NOT NULL,
  `admin-level` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
