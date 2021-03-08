-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 mars 2021 à 13:45
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_eval_poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  `art_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_status` tinyint(1) NOT NULL,
  `art_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `art_modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tbl_articles`
--

INSERT INTO `tbl_articles` (`user_id`, `cat_id`, `art_id`, `art_title`, `art_slug`, `art_description`, `art_body`, `art_img`, `art_status`, `art_created_at`, `art_modified_at`) VALUES
(1, 2, 1, 'tro bin le pc', 'tro-bin-le-pc', 'c bin les pc', 'oui oui oui oui oui oui oui oui oui oui oui oui', 'https://i.imgur.com/woO7Mvf.jpg', 1, '2021-03-05 08:51:35', '2021-03-05 08:51:35'),
(1, 1, 2, 'xiao', 'xiao', 'grrrr xiao', 'non :)', 'https://i.imgur.com/u3RACQQ.png', 1, '2021-03-05 10:49:12', '2021-03-05 10:49:12'),
(1, 3, 4, 'mdr apple quoi', 'mdr-apple-quoi', 'c éclaté nan ?', 'oui beaucoup', 'https://i.imgur.com/FGzjMwf.gif', 1, '2021-03-05 10:57:20', '2021-03-05 10:57:20');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_categories_per_article`
--

CREATE TABLE `tbl_categories_per_article` (
  `art_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'mobile', 'Mobile & tech mobile'),
(2, 'PC', 'PC'),
(3, 'APPLE', 'MAC & iphone etc');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `com_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  `com_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `user_journal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_hobbies` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_roles` enum('admin','author','user','anonymous') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_bio`, `user_img`, `user_journal_name`, `user_hobbies`, `user_roles`, `user_created_at`) VALUES
(1, 'Jack', 'Lecomte', 'jack.lecomtes@gmail.com', '', 'salut', 'https://i.imgur.com/tkXzo8H.jpg', 'oui', 'oui', 'admin', '2021-03-05 08:49:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `art_user_id` (`user_id`),
  ADD KEY `art_cat_id` (`cat_id`);

--
-- Index pour la table `tbl_categories_per_article`
--
ALTER TABLE `tbl_categories_per_article`
  ADD KEY `cpa_art_id` (`art_id`),
  ADD KEY `cpa_cat_id` (`cat_id`);

--
-- Index pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `com_user_id` (`user_id`),
  ADD KEY `com_art_id` (`art_id`);

--
-- Index pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD CONSTRAINT `art_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `art_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_categories_per_article`
--
ALTER TABLE `tbl_categories_per_article`
  ADD CONSTRAINT `cpa_art_id` FOREIGN KEY (`art_id`) REFERENCES `tbl_articles` (`art_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpa_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD CONSTRAINT `com_art_id` FOREIGN KEY (`art_id`) REFERENCES `tbl_articles` (`art_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `com_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
