-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 nov. 2019 à 00:54
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd1`
--

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(5) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `Nom`, `Prenom`, `Email`, `Password`) VALUES
(1, 'Wansi', 'Armand', 'armand_wansi@yahoo.com', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(5) NOT NULL,
  `Nom` varchar(256) NOT NULL,
  `Prenom` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `NumeroSecu` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `Nom`, `Prenom`, `Email`, `Password`, `NumeroSecu`) VALUES
(1, 'NTSAGUIM NGUIMEZAP', 'Cindy Carelle', 'cindycarelle@yncrea.fr', 'mabellemarainne', 123456789),
(23, 'WAMBO PIAME', 'Yvan-hermann', 'wamboyvan@gmail.com', 'lepiams', 1234567898),
(3, 'NJILLA NJONKEP', 'Noel Landry', 'nnjonkep@gmail.com', 'innovation', 123456787),
(4, 'NEDEYE KHADY', 'Diouf', 'nkdiouf@icloud.cOM', 'labosseuse', 123456785),
(24, 'KAMENI WANSI', 'ARMAND CABREL', 'wansicabrel@icloud.com', 'azerty', 123456784),
(5, 'Rafa', 'SIM', 'rafasim@hotmail.fr', 'toto', 123456897);

-- --------------------------------------------------------

--
-- Structure de la table `prélèvement`
--

CREATE TABLE `prélèvement` (
  `id` int(5) NOT NULL,
  `idPatient` int(5) NOT NULL,
  `idMedecin` int(5) NOT NULL,
  `Date` int(11) NOT NULL,
  `RésultatAnalyse` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prélèvement`
--
ALTER TABLE `prélèvement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPatient` (`idPatient`,`idMedecin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `prélèvement`
--
ALTER TABLE `prélèvement`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
