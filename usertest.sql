-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 oct. 2021 à 10:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `usertest`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE IF NOT EXISTS `catalogue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_at` datetime NOT NULL,
  `image_principale` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`id`, `title`, `description`, `date_at`, `image_principale`) VALUES
(34, 'article très rare', 'Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.\r\nDonec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.', '2021-09-07 01:59:14', '-'),
(35, 'test2', 'Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', '2021-10-27 00:00:00', 'Nulla porttitor'),
(36, 'test3', 'Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', '2021-10-27 00:00:00', 'Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. ');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_societe` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `nom_societe`, `mail`, `message`, `objet`) VALUES
(1, 'fsqdfqsfsqdf', 'fsdfqsfd', 'fzdsqqfqsdf', 'fdsfqsfdqsdf@fqsdfqsdfqs.com', 'fqsdfqs\r\nf', 'rien'),
(2, 'fsqdfsfd', 'fsdfqsf', 'fsdfqsfdqszf', 'meedlaah@gmail.com', 'fdsfqsfsf', 'rien'),
(3, 'meed', 'lah', 'fsdfqsfdqszf', 'meedlaah@gmail.com', 'csqgqsgqsd qgq sdgqsd gqsg qsgdq sddqs gqsdg qsg q gqsd gdqsg qsdg s  qsgd gfdsfqsfsf', 'rien'),
(4, 'meed', 'lah', 'societé3', 'meedlaah@gmail.com', 'vqfdgsdg shf sdfhsdhf sdfh sdfh sdcsqgqsgqsd qgq sdgqsd gqsg qsgdq sddqs gqsdg qsg q gqsd gdqsg qsdg s  qsgd gfdsfqsfsf', 'rien'),
(5, 'meed', 'laah', 'société', '', 'lfsdlqdfqs;f sdqgflq sdofgkq sdgoqsd gisqdg qsjigd', 'rien'),
(6, 'meed', 'laah', 'société', 'maxblanc13@gmail.com', 'lfsdlqdfqs;f sdqgflq sdofgkq sdgoqsd gisqdg qsjigd', 'rien'),
(7, 'mohamed', 'lahcen', 'societé', 'meedlaah@gmail.com', 'testt', 'rien'),
(8, 'meed', 'laah', 'société', 'meedlaah@gmail.com', 'test message', 'rien');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210830151051', '2021-08-30 15:11:13', 72),
('DoctrineMigrations\\Version20210830222331', '2021-08-30 22:23:42', 49),
('DoctrineMigrations\\Version20210901172329', '2021-09-01 17:23:46', 54),
('DoctrineMigrations\\Version20210901235133', '2021-09-01 23:51:49', 67),
('DoctrineMigrations\\Version20210903220140', '2021-09-03 22:02:00', 124);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E01FBE6A7294869C` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `article_id`, `image`) VALUES
(18, 34, 'akmPKXRd-700w-0-6136c772451c2.png'),
(19, 34, 'LAHCENmohamedVERSO-6136c77245f7b.jpg'),
(20, 34, 'problemeTechnique-6136c77259c4f.png'),
(21, 34, 'victor-hugo-Copie-6136c7725a2f3.png'),
(22, 35, 'TEST'),
(23, 36, 'test2');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'meedlaah@gmail.COM', '[\"ROLE_USER\"]', '$2y$13$gmklXddu7aRSJqJfR3B8DuX6GEKiy4zCu3KgDRyhf72Li0sLUlQR6');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_E01FBE6A7294869C` FOREIGN KEY (`article_id`) REFERENCES `catalogue` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
