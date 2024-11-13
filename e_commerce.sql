-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 nov. 2024 à 09:45
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(256) NOT NULL,
  `prix` float NOT NULL,
  `qte` int(11) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `promo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `des`, `image`, `promo`) VALUES
(1, 'Asus', 100, 10, 'aaaaaaaa aaaaaaaaaa aaa aaaaaaaaaaaaaaaa aaaaaaa aaaaa a aaaaaaaaaa aaaaa aaaaaaa aaaaaaaaaaa', 'https://picsum.photos/400/400', 0),
(2, 'Asus I5', 100, 10, 'aaaaaaaa aaaaaaaaaa aaa aaaaaaaaaaaaaaaa aaaaaaa aaaaa a aaaaaaaaaa aaaaa aaaaaaa aaaaaaaaaaa', 'https://picsum.photos/400/400', 0),
(3, 'cable hdmi', 25, 20, 'aaaaaaaa aaaaaaaaaa aaa aaaaaaaaaaaaaaaa aaaaaaa aaaaa a aaaaaaaaaa aaaaa aaaaaaa aaaaaaaaaaa', 'https://picsum.photos/400/400', 0),
(4, 'cable USB', 10, 25, 'aaaaaaaa aaaaaaaaaa aaa aaaaaaaaaaaaaaaa aaaaaaa aaaaa a aaaaaaaaaa aaaaa aaaaaaa aaaaaaaaaaa', 'https://picsum.photos/400/400', 1),
(5, 'Iphone 11 pro max', 1300, 5, 'aaaaaaaa aaaaaaaaaa aaa aaaaaaaaaaaaaaaa aaaaaaa aaaaa a aaaaaaaaaa aaaaa aaaaaaa aaaaaaaaaaa', 'https://picsum.photos/400/400', 0),
(6, 'HP', 2000, 20, 'aaaaaaaa aaaaaaaaaa aaa aaaaaaaaaaaaaaaa aaaaaaa aaaaa a aaaaaaaaaa', 'https://picsum.photos/400/400', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
