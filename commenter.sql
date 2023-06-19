-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 mai 2023 à 15:42
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetwb`
--

-- --------------------------------------------------------

--
-- Structure de la table `commenter`
--

CREATE TABLE `commenter` (
  `IdCommenter` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `time` date NOT NULL,
  `IdArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commenter`
--

INSERT INTO `commenter` (`IdCommenter`, `user`, `comment`, `time`, `IdArticle`) VALUES
(1, 'me', 'aaaa', '2023-04-17', 1),
(2, 'me', 'me', '2023-04-17', 1),
(3, 'me', 'mohsen', '2023-04-17', 1),
(8, 'me', 'aaa', '2023-04-17', 2),
(10, 'me', 'qsxsqd', '2023-04-17', 3),
(11, 'me', 'aaaa', '2023-04-19', 7),
(12, 'me', 'aywa', '2023-04-19', 7),
(13, 'me', 'a3', '2023-04-19', 8),
(15, 'me', 'aya', '2023-04-23', 73),
(16, 'me', 'aa', '2023-04-24', 73),
(18, 'me', 'hi', '2023-04-30', 79),
(20, 'me', 'good job', '2023-04-30', 79),
(22, 'me', 'I love this product!', '2023-04-30', 79),
(23, 'me', 'This movie was terrible.', '2023-04-30', 79),
(24, 'me', 'azeae', '2023-04-30', 79),
(25, 'me', 'good', '2023-04-30', 79),
(27, 'me', 'hey', '2023-04-30', 79),
(30, 'me', 'asm3', '2023-04-30', 79),
(32, 'me', 'aywa', '2023-04-30', 79),
(48, '58', 'sad', '2023-05-06', 75),
(50, '58', 'hi', '2023-05-06', 84);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commenter`
--
ALTER TABLE `commenter`
  ADD PRIMARY KEY (`IdCommenter`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commenter`
--
ALTER TABLE `commenter`
  MODIFY `IdCommenter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
