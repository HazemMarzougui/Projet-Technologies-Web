-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 déc. 2022 à 16:28
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud-final`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idC` int(255) NOT NULL,
  `NomC` varchar(255) NOT NULL,
  `dateCreation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idC`, `NomC`, `dateCreation`) VALUES
(1, 'Vetements', 0);

-- --------------------------------------------------------

--
-- Structure de la table `eventshh`
--

CREATE TABLE `eventshh` (
  `id` int(255) NOT NULL,
  `nomE` varchar(255) NOT NULL,
  `typeE` int(255) NOT NULL,
  `dateE` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eventshh`
--

INSERT INTO `eventshh` (`id`, `nomE`, `typeE`, `dateE`, `image`) VALUES
(24, 'Aqqq', 12, '2022-12-01', 'img2.jpeg.png'),
(26, 'Ha', 12, '2022-12-11', '');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `idProduit` int(255) NOT NULL,
  `NomP` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `quantite` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `descriptionn` varchar(255) NOT NULL,
  `idC` int(255) NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`idProduit`, `NomP`, `prix`, `quantite`, `img`, `descriptionn`, `idC`, `dateCreation`) VALUES
(1, 'TVSamsung', 1500, 2, '20400449.jpg', 'sdjkhsdjhdsjsdjhsdkdjdskjhqkjh', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `rolee`
--

CREATE TABLE `rolee` (
  `idR` int(11) NOT NULL,
  `NomR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rolee`
--

INSERT INTO `rolee` (`idR`, `NomR`) VALUES
(1, 'Client'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `typeshh`
--

CREATE TABLE `typeshh` (
  `id` int(255) NOT NULL,
  `nom_type` varchar(255) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeshh`
--

INSERT INTO `typeshh` (`id`, `nom_type`, `discount`) VALUES
(12, 'hamza', 2),
(13, 'haaa', 33);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idU` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `passworduser` varchar(255) NOT NULL,
  `idR` int(11) NOT NULL,
  `dateCreation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idU`, `nom`, `prenom`, `adresse`, `email`, `dob`, `passworduser`, `idR`, `dateCreation`) VALUES
(24, 'maram', 'marzougui', 'ariana soghra', 'malek.soussi@esprit.tn', '2000-12-21', '$2y$10$u5p0sF/y8Aat89HHJCPUKuPkjndo66s4ObtmPdru92szkz3KVumFu', 1, '2022-12-03 18:37:42'),
(25, 'hazem', 'hazem', 'ariana soghra', 'hazem@gmail.com', '2000-12-21', '$2y$10$dxnmeqmS9Fj.5JyidSWzgu4f4EzUAzO6dm5a7wRypLPI5Wce/zQqm', 1, '2022-12-03 18:38:22'),
(26, 'admin', 'admin', 'admin', 'admin@switchini.tn', '2022-12-03', '$2y$10$fDZmJB8uq6/nZrHavxvpvOvGQ0H1Rhw3VzBY.OCP.V8iMhTB3FVSm', 2, '2022-12-03 19:01:14'),
(27, 'malek', 'soussi', 'tunis', 'maleksoussi51@gmail.com', '2000-12-15', '$2y$10$SFeabBrNCaJS1.pxOuRVx.ylwwHTmXtrdErIPtAPsaGT98EBNAzLe', 1, '2022-12-05 21:21:45'),
(28, 'hlali', 'maram', 'tunis', 'maram.hlali@esprit.tn', '2000-12-29', '$2y$10$yNMvs.bIFTigqzwYBDZvaOkAccPAZLbpaaX5E1cfeGChd.yISgPCa', 1, '2022-12-05 22:10:30'),
(29, 'hazem', 'marzougui', 'ariana', 'hazem.marzougui@esprit.tn', '2000-12-24', '$2y$10$jEi4DNS6/3vKk8sLDRSsZOMMJcY3.ziRcBU0hDhkA4wLn.g9BJ6vm', 1, '2022-12-06 15:58:10'),
(30, 'ashref', 'bahrini', 'slouguia', 'achrefbahrini28@gmail.com', '1999-08-28', '$2y$10$vt3yYtqsd.ZhYEQKENtPauwK9IhnoI7a7fAZWjr8JyOQf6jLAZP8q', 1, '2022-12-06 16:18:04'),
(31, 'maleeeeeeeeeeek', 'marzougui', 'ariana soghra', 'maleksoussi@gmail.com', '2000-02-28', '$2y$10$CJmu0jZYVOsml.QXGLxjy.gjeui49HXXVZNiNJzjfqfGPEmJhrMdO', 1, '2022-12-06 16:27:38'),
(32, 'soussi', 'malek', 'ariana soghra', 'malekmarzougui@gmail.com', '2002-01-28', '$2y$10$yX2qXUjGhhmhEqDEjG/77uuq5x18wkgcHRVFaxGCOqeAzXP3PTl8u', 1, '2022-12-06 23:16:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idC`);

--
-- Index pour la table `eventshh`
--
ALTER TABLE `eventshh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeE` (`typeE`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `idC` (`idC`);

--
-- Index pour la table `rolee`
--
ALTER TABLE `rolee`
  ADD PRIMARY KEY (`idR`);

--
-- Index pour la table `typeshh`
--
ALTER TABLE `typeshh`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idU`),
  ADD KEY `idR` (`idR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idC` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `eventshh`
--
ALTER TABLE `eventshh`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `idProduit` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rolee`
--
ALTER TABLE `rolee`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `typeshh`
--
ALTER TABLE `typeshh`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idU` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eventshh`
--
ALTER TABLE `eventshh`
  ADD CONSTRAINT `event` FOREIGN KEY (`typeE`) REFERENCES `typeshh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `prod-categ` FOREIGN KEY (`idC`) REFERENCES `categorie` (`idC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fff-f` FOREIGN KEY (`idR`) REFERENCES `rolee` (`idR`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
