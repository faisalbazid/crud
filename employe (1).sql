-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 mars 2022 à 10:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `ID` int(11) NOT NULL,
  `MATRICULE` char(4) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `PRENOM` varchar(100) NOT NULL,
  `DATE` date NOT NULL,
  `DEPARTEMENT` varchar(100) NOT NULL,
  `SALAIRE` decimal(60,0) NOT NULL,
  `FONCTION` varchar(100) NOT NULL,
  `PHOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`ID`, `MATRICULE`, `NOM`, `PRENOM`, `DATE`, `DEPARTEMENT`, `SALAIRE`, `FONCTION`, `PHOTO`) VALUES
(49, '1111', 'HAKIMI', 'ACHRAF', '1998-11-04', 'joueur de foot', '865000', 'défenseur', '433049-1583307966.jpg'),
(54, '0234', 'ZIYECH', 'HAKIM', '1993-03-19', 'joueur de foot', '600000', 'Milieu de terrain', '3309431-67668888-2560-1440.jpg'),
(58, '7453', 'BONO', 'YASSINE', '1991-04-05', 'joueur de foot', '250000', 'GARDIEN', 'bono.png'),
(62, '4003', 'BENATIA', 'MEHDI', '1987-04-17', 'Retraité', '404040', 'défenseur', '3309431-67668888-2560-1440.jpg'),
(63, '9300', 'En-Nesyri', 'Youssef', '1997-06-01', 'joueur de foot', '100000', 'attaquant', '433049-1583307966.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
