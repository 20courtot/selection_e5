-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 22 mars 2022 à 20:24
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `selection`
--

-- --------------------------------------------------------

--
-- Structure de la table `grille`
--

CREATE TABLE `grille` (
  `id` smallint NOT NULL,
  `numcand` int DEFAULT NULL,
  `point_bac` smallint DEFAULT NULL,
  `point_travail_serieux` smallint DEFAULT NULL,
  `point_absence` smallint DEFAULT NULL,
  `point_attitude` smallint DEFAULT NULL,
  `point_etude_superieure` smallint DEFAULT NULL,
  `point_avis_PP` smallint DEFAULT NULL,
  `point_avis_proviseur` smallint DEFAULT NULL,
  `point_lettre_motivation` smallint DEFAULT NULL,
  `remarque` text,
  `point_remarque` smallint DEFAULT NULL,
  `statut_dossier` varchar(50) DEFAULT NULL,
  `total_point` smallint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `grille`
--

INSERT INTO `grille` (`id`, `numcand`, `point_bac`, `point_travail_serieux`, `point_absence`, `point_attitude`, `point_etude_superieure`, `point_avis_PP`, `point_avis_proviseur`, `point_lettre_motivation`, `remarque`, `point_remarque`, `statut_dossier`, `total_point`) VALUES
(8, 123456, 8, -1, 1, 1, 1, 1, 1, 1, '', 1, NULL, 14),
(9, 123, 10, 1, 1, 1, 1, 1, 1, 1, 'test', 1, 'accepte', 18);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` tinyint NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `type_de_compte` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `identifiant`, `mdp`, `type_de_compte`) VALUES
(1, 'admin', 'admin', 'administrateur'),
(2, 'prof', 'prof', 'evaluateur'),
(3, 'secrétaire', 'secrétaire', 'secretaire'),
(4, 'prof2', 'prof2', 'evaluateur'),
(5, 'prof3', 'prof3', 'evaluateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `grille`
--
ALTER TABLE `grille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `grille`
--
ALTER TABLE `grille`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
