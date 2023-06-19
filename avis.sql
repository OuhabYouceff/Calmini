-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 avr. 2023 à 19:54
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
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `idAvis` int(11) NOT NULL,
  `commentaire` varchar(100) NOT NULL,
  `dateAvis` datetime NOT NULL,
  `evaluation` varchar(20) NOT NULL,
  `idCoach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `commentaire`, `dateAvis`, `evaluation`, `idCoach`) VALUES
(79, 'jhg', '2023-04-23 10:52:34', '5', 50),
(86, 'bonjour', '2023-04-23 12:00:31', '5', 60),
(87, '', '2023-04-23 12:15:16', '9', 60),
(88, 'bonjourrrrrrrrrrrr', '2023-04-23 12:53:12', '5', 60),
(89, 'tttttttttttttttttttttttttttttttttttt', '2023-04-23 14:15:56', '5', 60),
(91, 'mar7abaaaaa', '2023-04-23 16:58:08', '8', 60),
(92, 'aaaaaaaa', '2023-04-23 18:13:52', '5', 50),
(94, 'bonjour', '2023-04-23 19:42:22', '8', 60);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `fk_avis_coach` (`idCoach`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_avis_coach` FOREIGN KEY (`idCoach`) REFERENCES `coach` (`idCoach`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
