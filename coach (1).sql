-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 mai 2023 à 01:36
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
-- Structure de la table `coach`
--

CREATE TABLE `coach` (
  `idCoach` int(11) NOT NULL,
  `nomCoach` varchar(20) NOT NULL,
  `prenomCoach` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `specialite` varchar(20) NOT NULL,
  `experience` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  `image` longblob NOT NULL,
  `nbAvis` int(11) NOT NULL,
  `codecoach` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`idCoach`, `nomCoach`, `prenomCoach`, `tel`, `mail`, `specialite`, `experience`, `details`, `image`, `nbAvis`, `codecoach`) VALUES
(50, 'achrefff', 'achref', 20114418, 'ahcref.essefi@esprit.tn', 'Therapist', 13, 'aaaaa', '', 9, ''),
(51, 'achref', 'essefi', 20114418, 'achref.essefi@esprit.tn', 'entraineur', 20, 'bonjour', 0x324133355f4453323232335331202831292e706e67, 1, ''),
(52, 'ahmed', 'ghoyul', 54184183, 'ahmed.ghoul@esprit.tn', 'entraineur', 0, 'pcccc', '', 0, ''),
(53, 'essefi', 'intidhar', 98667893, 'intidhar.essefi@esprit.tn', 'entraineur', 1, 'salle de sport', '', 0, ''),
(54, 'essefi', 'achref', 50212324, 'chorfa.essefi@esprit.tn', 'nutritionniste', 5, 'cabinet', '', 0, ''),
(55, 'ali', 'ali', 54585956, 'ali.ali@esprit.tn', 'nutritionniste', 6, 'cabinet', '', 0, ''),
(56, 'achref', 'essefi', 20114418, 'achref.essefi@esprit.tn', 'entraineur', 20, 'achref', '', 0, ''),
(57, 'youcef', 'youcef', 20141414, 'youcef.ouhab@esprit.tn', 'nutritionniste', 20, 'aaaaa', '', 0, ''),
(59, 'achref', 'achref', 20114418, 'achref.essefi@esprit.tn', 'Therapist', 15, 'cabinet', '', 2, ''),
(60, 'eya', 'essefi', 87878888, 'eya.essefi@esprit.tn', 'Therapist', 7, 'cabinet', 0x70726f66696c652d332e6a7067, 42, ''),
(61, 'ssssss', 'ssssss', 99999999, 'balkika@esprit.tn', 'Therapist', 20, 'aaaaaaa', '', 0, 0x7373737373732d7373737373732d393939393939393943414c4d494e49);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`idCoach`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coach`
--
ALTER TABLE `coach`
  MODIFY `idCoach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
