-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 20 Mai 2019 à 13:30
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spawn`
--

-- --------------------------------------------------------

--
-- Structure de la table `spawn_ville`
--

CREATE TABLE `spawn_ville` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `spawn_ville`
--

INSERT INTO `spawn_ville` (`id`, `nom`, `img`) VALUES
(3, 'Paris', 'paris.jpg'),
(4, 'Bordeaux', 'bordeaux.jpg'),
(5, 'Los Angeles', 'los_angeles.jpg'),
(6, 'New York', 'new_york.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `spawn_ville`
--
ALTER TABLE `spawn_ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `spawn_ville`
--
ALTER TABLE `spawn_ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
